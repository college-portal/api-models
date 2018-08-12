<?php

namespace CollegePortal\Models;

use CollegePortal\Models\BaseModel;
use CollegePortal\Models\ContentType;
use CollegePortal\Models\School;

/**
 * CollegePortal\Models\Content
 * 
 * A Content represents a value property for a particular model, 
 *  belonging to a content-type.
 *
 * @property int $id
 * @property int $owner_id
 * @property int $content_type_id
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Content extends BaseModel
{
    protected $fillable = [ 'owner_id', 'content_type_id', 'value' ];

    public function type()
    {
        return $this->belongsTo(ContentType::class, 'content_type_id');
    }

    public function scopeChildren($query) {
        return $query->whereHas('type', function ($q) {
            return $q->where('related_to', $this->content_type_id);
        });
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

    public function setValueAttribute($value) {
        if (!is_string($value)) {
            $this->attributes['value'] = json_encode($value);
        }
        else {
            $this->attributes['value'] = $value;
        }
    }

    public static function boot() {
        parent::boot();
        self::creating(function ($model) {
            $type = $model->type()->first();
            if (($type->format($model->value) != $type->format) && ($type->format != ContentType::ARRAY)) {
                throw new \Exception("content type for $model->value should be $type->format");
            }
            if (self::where('content_type_id', $model->content_type_id)->exists() && ($type->format != ContentType::ARRAY)) {
                throw new \Exception("only content_type with 'array' format can have multiple values");
            }
            if (!$model->owner()->exists()) {
                throw new \Exception("no $type->type with id $model->owner_id exists");
            }
        });
    }
}
