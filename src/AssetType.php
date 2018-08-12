<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;

/**
 * CollegePortal\Models\AssetType
 * 
 * An AssetType represents file types belongs to a model, 
 *  denoted by the $type property.
 * E.g. the Prospect model having waec-result as an AssetType
 *
 * @property int $id
 * @property int $school_id
 * @property string $type
 * @property string $name
 * @property int $size
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\AssetType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\AssetType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\AssetType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\AssetType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AssetType extends BaseModel
{
    protected $fillable = [ 'type', 'name', 'school_id' ];

    public function assets() {
        return $this->hasMany(Asset::class, 'asset_type_id');
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function scopeOwner($query, $owner_id)
    {
        return app($this->type)->where('id', $owner_id);
    }
}
