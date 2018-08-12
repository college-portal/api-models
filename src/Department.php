<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Faculty;
use CollegePortal\Models\Staff;
use CollegePortal\Models\Student;
use CollegePortal\Models\Program;
use CollegePortal\Models\Course;
use CollegePortal\Models\User;

/**
 * CollegePortal\Models\Department
 *
 * A Department is a division within a Faculty comprising one or more study programs.
 *
 * @property int $id
 * @property string $name
 * @property int $hod_id
 * @property int $faculty_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Department whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Department whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Department extends BaseModel
{
    protected $fillable = [ 'name', 'hod_id', 'faculty_id' ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function hod()
    {
        return $this->belongsTo(Staff::class, 'hod_id');
    }

    public function hods()
    {
        return $this->belongsToMany(Staff::class, self::name(), 'id', 'hod_id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }

    public function students()
    {
        return $this->hasManyThrough(Student::class, Program::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
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
                    $this->hods()
                        ->join(User::name(), 'staff.user_id', '=', 'users.id')
                        ->select(
                            'users.id',
                            'users.display_name',
                            'users.created_at',
                            'users.updated_at',
                            'departments.id as department_id'
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
                            'staff.department_id'
                        )
                );
    }

    public static function boot()
    {
        parent::boot();
        $schoolHasUsersUpdate = function ($model) {
            $staff = Staff::with('user')->find($model->hod_id);
            $role = Role::where('name', Role::HOD)->first();
            $faculty = $model->faculty()->first();
            $school = $faculty->school()->first();
            if (!$school->users()
                        ->wherePivot('user_id', $staff->user_id)
                        ->wherePivot('role_id', $role->id)
                        ->exists()) {
                $school->users()->attach([
                    $staff->user_id => [
                        'role_id' => $role->id
                    ]
                ]);
            }
        };

        self::created($schoolHasUsersUpdate);
        self::updated($schoolHasUsersUpdate);

        self::deleting(function ($model) {
            $model->courses()->get()->map(function ($course) {
                $course->delete();
            });
            $model->programs()->get()->map(function ($program) {
                $program->delete();
            });
        });
    }
}
