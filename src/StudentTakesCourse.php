<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\StaffTeachCourse;
use CollegePortal\Models\Semester;
use CollegePortal\Models\SemesterType;
use CollegePortal\Models\Staff;
use CollegePortal\Models\Student;
use CollegePortal\Models\School;
use CollegePortal\Models\Grade;

/**
 * CollegePortal\Models\StudentTakesCourse
 * 
 * A StudentTakesCourse models represents the fact that a Student, 
 *  takes a Course taught by a particular Staff.
 *
 * @property int $id
 * @property int $student_id
 * @property int $staff_teach_course_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StudentTakesCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\StudentTakesCourse whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StudentTakesCourse extends BaseModel
{
    protected $fillable = [ 'student_id', 'staff_teach_course_id' ];

    protected $table = 'student_takes_courses';

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function staffCourses() {
        return $this->belongsToMany(StaffTeachCourse::class, self::name(), 'id', 'staff_teach_course_id');
    }

    public function semester() {
        return $this->staffCourses()
                    ->join(Semester::name(), 'semester.id', '=', 'staff_teach_courses.semester_id')
                    ->select('semester.*');
    }

    public function grades() {
        return $this->hasMany(Grade::class);
    }

    public function staff() {
        return $this->staffCourses()
                    ->join(Staff::name(), 'staff.id', '=', 'staff_teach_courses.staff_id')
                    ->select('staff.*');
    }

    public function course() {
        return $this->staffCourses()
                    ->join(Course::name(), 'courses.id', '=', 'staff_teach_courses.course_id')
                    ->select('courses.*');
    }

    public function scopeSchool() {
        return $this->staff()
                    ->join(School::name(), 'schools.id', '=', 'staff.school_id')
                    ->select('schools.*');
    }

    public static function boot() {
        parent::boot();
        self::deleting(function ($model) {
            $model->grades()->get()->map(function ($grade) {
                $grade->delete();
            });
        });
    }
}
