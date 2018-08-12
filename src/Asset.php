<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\AssetType;

/**
 * CollegePortal\Models\Asset
 * 
 * An Asset represents a particular file that belongs to an AssetType
 *
 * @property int $id
 * @property int $owner_id
 * @property int $asset_type_id
 * @property string $location
 * @property string $mime
 * @property int $size
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Asset extends BaseModel
{
    protected $fillable = ['owner_id', 'asset_type_id', 'location', 'mime', 'size'];  

    public function type()
    {
        return $this->belongsTo(AssetType::class, 'asset_type_id');
    }

    public function scopeOwner()
    {
        return app($this->type()->first()->type)->where('id', $this->owner_id);
    }

    public function scopeSchool()
    {
        $ids = $this->type()->pluck('school_id');
        return School::whereIn('id', $ids);
    }
}
