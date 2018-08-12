<?php

namespace CollegePortal\Models;

use CollegePortal\Models\User;
use CollegePortal\Models\Intent;

/**
 * CollegePortal\Models\IntentType
 *
 * An IntentType represents a group of intents.
 *
 * @property int $id
 * @property int $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\IntentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\IntentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\IntentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\IntentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class IntentType extends BaseModel
{

    protected $fillable = [ 'name' ];

    public function users()
    {
        return $this->hasManyThrough(User::class, Intent::class, 'id', 'intent_type_id')->withTimestamps();
    }

    public function intents()
    {
        return $this->hasMany(Intent::class, 'intent_type_id');
    }
}
