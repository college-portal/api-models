<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\User;
use CollegePortal\Models\Staff;
use CollegePortal\Models\Course;
use CollegePortal\Models\School;
use CollegePortal\Models\Student;
use CollegePortal\Models\GradeType;
use CollegePortal\Models\StaffTeachCourse;
use CollegePortal\Models\StudentTakesCourse;

/**
 * CollegePortal\Models\Grade
 * 
 * A Grade is a partial or total score a lecturer assigns to a student who 
 *  takes a course he/she is in charge of.
 *
 * @property int $id
 * @property int $student_takes_course_id
 * @property float $score
 * @property string $description
 * @property \Carbon\Carbon $locked_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Grade extends BaseModel
{
    protected $fillable = [ 'student_takes_course_id', 'score', 'description', 'locked_at' ];

    function studentTakesCourse() {
        return $this->belongsTo(StudentTakesCourse::class);
    }

    public function scopeStudent() {
        $ids = $this->studentTakesCourse()->pluck('student_id');
        return Student::whereIn('id', $ids);
    }

    public function scopeStaffTeachCourse() {
        $ids = $this->studentTakesCourse()->pluck('staff_teach_course_id');
        return StaffTeachCourse::whereIn('id', $ids);
    }

    public function scopeStaff() {
        $ids = $this->staffTeachCourse()->pluck('staff_id');
        return Staff::whereIn('id', $ids);
    }

    public function scopeCourse() {
        $ids = $this->staffTeachCourse()->pluck('course_id');
        return Course::whereIn('id', $ids);
    }

    public function scopeSchool() {
        $ids = $this->student()->pluck('school_id');
        return School::whereIn('id', $ids);
    }

    public function scopeUser() {
        $ids = $this->student()->pluck('user_id');
        return User::whereIn('id', $ids);
    }

    public function scopeTotal($query, $student_takes_course_id = null) {
        return $this->where('student_takes_course_id', $student_takes_course_id ?? $this->student_takes_course_id)
                    ->sum('score');
    }
}
