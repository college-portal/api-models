<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\Session;
use CollegePortal\Models\School;
use CollegePortal\Models\ProgramCredit;
use CollegePortal\Models\Traits\ChargeableTrait;

/**
 * CollegePortal\Models\Semester
 * 
 * A Semester represents a time period, marked by start and end dates, 
 *  within a Session, and belonging to a Semester Type.
 *
 * @property int $id
 * @property int $semester_type_id
 * @property int $session_id
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property \Carbon\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Semester whereContains($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Semester whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Semester whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Semester whereCreatedAt($value)
 * @mixin \Eloquent
 */
class Semester extends BaseModel
{
    use ChargeableTrait;
    protected $fillable = [ 'semester_type_id', 'session_id', 'start_date', 'end_date' ];

    public function session() {
        return $this->belongsTo(Session::class);
    }

    public function school() {
        $ids = $this->type->pluck('id');
        return School::whereHas('semesterTypes', function ($q) use ($ids) {
            return $q->whereIn('id', $ids);
        });
    }

    public function type() {
        return $this->belongsTo(SemesterType::class, 'semester_type_id');
    }

    public function programCredits() {
        return $this->hasMany(ProgramCredit::class);
    }

    public static function boot() {
        parent::boot();
        self::deleting(function ($model) {
            $model->programCredits()->get()->map(function ($programCredit) {
                $programCredit->delete();
            });
        });
    }
}
