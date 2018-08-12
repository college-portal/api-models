<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Staff;
use CollegePortal\Models\Course;
use CollegePortal\Models\StudentTakesCourse;
use CollegePortal\Models\User;

/**
 * CollegePortal\Models\StaffTeachCourse
 * 
 * A StaffTeachCourse model represents the fact that a Staff teaches a particular Course.
 *
 * @property int $id
 * @property int $staff_id
 * @property int $course_id
 * @property int $semester_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StaffTeachCourse whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StaffTeachCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StaffTeachCourse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StaffTeachCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StaffTeachCourse whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StaffTeachCourse extends BaseModel
{
    protected $fillable = [ 'staff_id', 'course_id', 'semester_id' ];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function staff() {
        return $this->belongsTo(Staff::class);
    }

    public function semester() {
        return $this->belongsTo(Semester::class);
    }

    public function studentTakesCourse() {
        return $this->hasMany(StudentTakesCourse::class, 'staff_teach_course_id');
    }

    public function scopeSchool() {
        $ids = $this->staff()->pluck('school_id');
        return School::whereIn('id', $ids);
    }

    public static function boot() {
        parent::boot();
        self::deleting(function ($model) {
            $model->studentTakesCourse()->get()->map(function ($studentCourse) {
                $studentCourse->delete();
            });
        });
    }
}
