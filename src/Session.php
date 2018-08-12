<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\School;
use CollegePortal\Models\Semester;
use CollegePortal\Models\Traits\ChargeableTrait;

/**
 * CollegePortal\Models\Session
 *
 * A Session represents an academic year. It could contain one or more semesters.
 *
 * @property int $id
 * @property int $school_id
 * @property int $name
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property \Carbon\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Session whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Session whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Session whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Session whereCreatedAt($value)
 * @mixin \Eloquent
 */
class Session extends BaseModel
{
    use ChargeableTrait;
    protected $fillable = [ 'school_id', 'name', 'start_date', 'end_date' ];

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($model) {
            $model->semesters()->get()->map(function ($semester) {
                $semester->delete();
            });
        });
    }
}
