<?php

namespace CollegePortal\Models;

use CollegePortal\Models\User;
use CollegePortal\Models\School;
use CollegePortal\Models\Program;
use CollegePortal\Models\Session;
use CollegePortal\Models\BaseModel;

/**
 * CollegePortal\Models\Prospect
 *
 * A Prospect is a User who is an admission candidate to a particular School,
 *  in a particular Program and targeting a particular Session.
 *
 * A Prospect can be locked for editing by a school-owner, similar to closing the
 *  admission process.
 *
 * @property int $id
 * @property int $user_id
 * @property int $school_id
 * @property int $program_id
 * @property int $session_id
 * @property int $student_id
 * @property \Carbon\Carbon $locked_at
 * @property \Carbon\Carbon $accepted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Prospect whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Prospect whereSchoolId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Prospect whereProgramId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Prospect whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Prospect whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Prospect extends BaseModel
{
    protected $fillable = [ 'user_id', 'school_id', 'program_id', 'session_id', 'locked_at', 'accepted_at' ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public static function boot()
    {
        parent::boot();
        $createProspectRole = function ($model) {
            $school = $model->school()->first();
            $role = Role::where('name', Role::PROSPECT)->first();
            $user = $model->user()->first();
            if (!$user->roles()
                        ->wherePivot('school_id', $school->id)
                        ->wherePivot('role_id', $role->id)
                        ->exists()) {
                $user->roles()->attach([
                    $role->id => [
                        'school_id' => $school->id
                    ]
                ]);
            }
        };

        self::created($createProspectRole);
        self::updated($createProspectRole);

        self::deleting(function ($model) {
            $school = $model->school()->first();
            $role = Role::where('name', Role::STUDENT)->first();
            $user = $model->user()->first();
            
            $user->roles()
                ->wherePivot('school_id', $school->id)
                ->wherePivot('role_id', $role->id)->detach($role->id);
        });
    }
}
