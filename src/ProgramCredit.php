<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Semester;
use CollegePortal\Models\Level;
use CollegePortal\Models\School;
use CollegePortal\Models\SemesterType;

/**
 * CollegePortal\Models\ProgramCredit
 * 
 * A Program Credit represents the maximum number of credits a Student within a Level can take in a Semester.
 *
 * @property int $id
 * @property int $program_id
 * @property int $semester_id
 * @property int $level_id
 * @property int $credit
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ProgramCredit whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ProgramCredit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ProgramCredit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ProgramCredit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ProgramCredit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProgramCredit extends BaseModel
{
    protected $fillable = [ 'program_id', 'semester_id', 'level_id', 'credit' ];

    public function program() {
        return $this->belongsTo(Program::class);
    }

    public function semester() {
        return $this->belongsTo(Semester::class);
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }

    public function scopeSchool() {
        $ids = $this->level()->pluck('levels.school_id');
        return School::whereIn('id', $ids);
    }
}
