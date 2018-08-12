<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\User;

/**
 * CollegePortal\Models\Group
 *
 * Not Implemented Yet!
 *
 * @property int $id
 * @property int $name
 * @property int $owner_id
 * @property string $description
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Group whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Group whereName($value)
 * @mixin \Eloquent
 */
class Group extends BaseModel
{
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
