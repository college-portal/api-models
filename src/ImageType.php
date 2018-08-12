<?php

namespace CollegePortal\Models;

use CollegePortal\Models\Image;
use CollegePortal\Models\School;
use CollegePortal\Models\BaseModel;

/**
 * CollegePortal\Models\ImageType
 * 
 * An Image Type represents images belonging to a model, 
 *  denoted by the $type property.
 *
 * @property int $id
 * @property string $type
 * @property string $name
 * @property int school_id
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ImageType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ImageType whereName($value)
 * @mixin \Eloquent
 */
class ImageType extends BaseModel
{
    protected $fillable = [ 'type', 'name', 'school_id' ];

    public function images() {
        return $this->hasMany(Image::class, 'image_type_id');
    }

    public function school() {
        return $this->belongsTo(School::class);
    }

    public function scopeOwner($query, $owner_id) {
        return app($this->type)->where('id', $owner_id);
    }

    public static function boot() {
        parent::boot();
        self::deleting(function ($model) {
            $model->images()->get()->map(function ($image) {
                $image->delete();
            });
        });
    }
}
