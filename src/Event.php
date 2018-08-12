<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\User;

/**
 * CollegePortal\Models\Event
 * 
 * Not Implemented Yet
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property string $url
 * @property string $description
 * @property \Carbon\Carbon $start_date
 * @property \Carbon\Carbon $end_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Event whereName($value)
 * @mixin \Eloquent
 */
class Event extends BaseModel
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
