<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\School;
use CollegePortal\Models\Staff;
use CollegePortal\Models\Student;
use CollegePortal\Models\Role;
use CollegePortal\Models\Program;
use CollegePortal\Models\Department;
use CollegePortal\Models\User;
use Illuminate\Support\Facades\DB;

/**
 * CollegePortal\Models\Faculty
 *
 * A Faculty is a division within a School comprising one or more departments.
 *
 * @property int $id
 * @property string $name
 * @property int $school_id
 * @property int $dean_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Faculty whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Faculty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Faculty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Faculty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Faculty whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Faculty extends BaseModel
{

    protected $dates = ['deleted_at'];

    protected $fillable = [ 'name', 'school_id', 'dean_id' ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function dean()
    {
        return $this->belongsTo(Staff::class, 'dean_id');
    }

    public function deans()
    {
        return $this->belongsToMany(Staff::class, self::name(), 'id', 'dean_id');
    }

    public function departments()
    {
        return $this->hasMany(Department::class);
    }

    public function programs()
    {
        return $this->hasManyThrough(Program::class, Department::class);
    }

    public function students()
    {
        return $this->programs()
                    ->join(Student::name(), 'students.program_id', '=', 'programs.id')
                    ->select('students.*');
    }

    public function staff()
    {
        return $this->departments()
                    ->join(Staff::name(), 'staff.department_id', '=', 'departments.id')
                    ->select('staff.*');
    }

    public function users()
    {
        return $this->students()
                ->join(User::name(), 'students.user_id', '=', 'users.id')
                ->select(
                    'users.id',
                    'users.display_name',
                    'users.created_at',
                    'users.updated_at'
                )
                ->union(
                    $this->deans()
                        ->join(User::name(), 'staff.user_id', '=', 'users.id')
                        ->select(
                            'users.id',
                            'users.display_name',
                            'users.created_at',
                            'users.updated_at',
                            'faculties.id as faculty_id'
                        )
                )
                ->union(
                    $this->staff()
                                ->join(User::name(), 'staff.user_id', '=', 'users.id')
                                ->select(
                                    'users.id',
                                    'users.display_name',
                                    'users.created_at',
                                    'users.updated_at',
                                    'departments.faculty_id'
                                )
                );
    }

    public static function boot()
    {
        parent::boot();
        $schoolHasUsersUpdate = function ($model) {
            $role = Role::where('name', Role::DEAN)->first();
            $staff = $model->dean()->first();
            $user = $staff->user()->first();
            $school = $model->school()->first();
            if (!$school->users()
                        ->wherePivot('user_id', $user->id)
                        ->wherePivot('role_id', $role->id)
                        ->exists()) {
                $school->users()->attach([
                    $user->id => [
                        'role_id' => $role->id
                    ]
                ]);
            }

            $staffRole = Role::where('name', Role::STAFF)->first();
            if (!$school->users()
                        ->wherePivot('user_id', $user->id)
                        ->wherePivot('role_id', $staffRole->id)
                        ->exists()) {
                $school->users()->attach([
                    $user->id => [
                        'role_id' => $staffRole->id
                    ]
                ]);
            }
        };

        self::created($schoolHasUsersUpdate);
        self::updated($schoolHasUsersUpdate);

        self::deleting(function ($model) {
            $model->departments()->get()->map(function ($department) {
                $department->delete();
            });
        });
    }
}
