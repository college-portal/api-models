<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Semester;
use CollegePortal\Models\School;

/**
 * CollegePortal\Models\SemesterType
 * 
 * A Semester Type represents a group of Semesters, and 
 *  belonging to a School. 
 * E.g. 1st Semester
 *
 * @property int $id
 * @property int $name
 * @property int $school_id
 * @property \Carbon\Carbon $created_date
 * @property \Carbon\Carbon $updated_date
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\SemesterType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\SemesterType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SemesterType extends BaseModel
{
    protected $fillable = [ 'name', 'school_id' ];

    public function semesters() {
        return $this->hasMany(Semester::class);
    }

    public function school() {
        return $this->belongsTo(School::class);
    }
}
