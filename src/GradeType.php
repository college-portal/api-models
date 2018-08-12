<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\School;

/**
 * CollegePortal\Models\GradeType
 *
 * A GradeType is a classification for grade scores. E.g. a score between 70 and 100 is an A.
 *
 * @property int $id
 * @property string $name
 * @property int $value
 * @property int $school_id
 * @property int $minimum
 * @property int $maximum
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\GradeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\GradeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Grade whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class GradeType extends BaseModel
{
    protected $fillable = [ 'name', 'value', 'school_id', 'minimum', 'maximum' ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }
}
