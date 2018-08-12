<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Department;
use CollegePortal\Models\Role;
use CollegePortal\Models\Faculty;
use CollegePortal\Models\School;
use CollegePortal\Models\Course;
use CollegePortal\Models\StaffTeachCourse;
use CollegePortal\Models\User;

/**
 * CollegePortal\Models\Staff
 * 
 * A staff represents a User having a "staff" role within a School
 *
 * @property int $id
 * @property int $user_id
 * @property int $school_id
 * @property int $department_id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Staff whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Staff whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Staff whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Staff extends BaseModel
{
    protected $fillable = [ 'title', 'school_id', 'department_id', 'user_id' ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function courses() {
        return $this->hasManyThrough(Course::class, StaffTeachCourse::class)->withTimestamps();
    }

    public function school() {
        return $this->belongsTo(School::class);
    }

    public function scopeFaculty() {
        $ids = $this->department()->pluck('faculty_id');
        return Faculty::whereIn('id', $ids);
    }

    public static function boot() {
        parent::boot();
        self::created(function ($model) {
            $school = $model->school()->first();
            $role = Role::where('name', Role::STAFF)->first();

            if (optional($school)->id) {
                $model->user->roles()->syncWithoutDetaching([
                    $role->id => [
                        'school_id' => $school->id
                    ]
                ]);
            }
        });

        self::deleting(function ($model) {
            $school = $model->school()->first();
            $role = Role::where('name', Role::STAFF)->first();

            if (optional($school)->id) {
                $model->user->roles()
                    ->wherePivot('school_id', $school->id)
                    ->wherePivot('role_id', $role->id)
                    ->detach();
            }
        });
    }
}
