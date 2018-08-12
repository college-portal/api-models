<?php

namespace CollegePortal\Models;

use CollegePortal\Models\Course;
use CollegePortal\Models\School;
use CollegePortal\Models\ProgramCredit;
use CollegePortal\Models\BaseModel;

/**
 * CollegePortal\Models\Level
 *
 * A Level represents a year within the school system.
 *
 * @property int $id
 * @property string $name
 * @property int $school_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Level whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Level whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Level extends BaseModel
{
    protected $fillable = [ 'name', 'school_id' ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function programCredits()
    {
        return $this->hasMany(ProgramCredit::class);
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($model) {
            $model->programCredits()->get()->map(function ($programCredit) {
                $programCredit->delete();
            });
        });
    }
}
