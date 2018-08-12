<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Role;
use CollegePortal\Models\Department;
use CollegePortal\Models\StudentTakesCourse;
use CollegePortal\Models\Course;
use CollegePortal\Models\User;

/**
 * CollegePortal\Models\Student
 *
 * A Student represents a user with a "student" role within a School
 *
 * @property int $id
 * @property int $user_id
 * @property int $program_id
 * @property string $matric_no
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Student whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Student whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Student extends BaseModel
{
    protected $fillable = [ 'user_id', 'program_id', 'matric_no' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function courses()
    {
        return $this->hasManyThrough(Course::class, StudentTakesCourse::class, 'id', 'course_id');
    }

    public function scopeDepartment()
    {
        $ids = $this->program()->pluck('department_id');
        return Department::where('id', $ids);
    }

    public function scopeFaculty()
    {
        $ids = $this->department()->pluck('faculty_id');
        return Faculty::where('id', $ids);
    }

    public function scopeSchool()
    {
        $ids = $this->faculty()->pluck('school_id');
        return School::where('id', $ids);
    }


    public static function boot()
    {
        parent::boot();
        $studentRoleCreate = function ($model) {
            $school = $model->program()->first()->department()->first()
                                        ->faculty()->first()->school()->first();
            $role = Role::where('name', Role::STUDENT)->first();
            $user = $model->user()->first();
            if (!$user->roles()
                        ->wherePivot('school_id', $school->id)
                        ->wherePivot('role_id', $role->id)
                        ->exists()) {
                $user->roles()->attach([
                    $role->id => [
                        'school_id' => $school->id
                    ]
                ]);
            }
        };

        self::created($studentRoleCreate);
        self::updated($studentRoleCreate);

        self::deleting(function ($model) {
            $school = $model->program()->first()->department()->first()
                                        ->faculty()->first()->school()->first();
            $role = Role::where('name', Role::STUDENT)->first();
            $user = $model->user()->first();
            
            $user->roles()
                ->wherePivot('school_id', $school->id)
                ->wherePivot('role_id', $role->id)->detach($role->id);
        });
    }
}
