<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\User;
use CollegePortal\Models\Role;
use CollegePortal\Models\Staff;

/**
 * CollegePortal\Models\UserHasRole
 * 
 * A UserHasRole model represents the fact that a User, 
 *  acts a particular Role, sometimes within a School.
 *
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @property int $school_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\UserHasRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\UserHasRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\UserHasRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\UserHasRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class UserHasRole extends BaseModel
{
    protected $fillable = [ 'user_id', 'role_id', 'school_id' ];
    protected $table = 'user_has_roles';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function school() {
        return $this->belongsTo(School::class);
    }
}
