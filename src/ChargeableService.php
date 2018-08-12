<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\School;
use CollegePortal\Models\Chargeable;

/**
 * CollegePortal\Models\ChargeableService
 *
 * A Chargeable Service represents the charges assigned to a model,
 *  denoted by the $type property.
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property string $description
 * @property float $amount
 * @property int school_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ChargeableService extends BaseModel
{
    protected $fillable = [ 'type', 'name', 'description', 'amount', 'school_id' ];

    public function chargeables()
    {
        return $this->hasMany(Chargeable::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }
    
    public function scopeOwner($query, $owner_id)
    {
        return app($this->type)->where('id', $owner_id);
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($model) {
            $model->chargeables()->get()->map(function ($chargeable) {
                $chargeable->delete();
            });
        });
    }
}
