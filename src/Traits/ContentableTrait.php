<?php

namespace CollegePortal\Models\Traits;

use CollegePortal\Models\Content;
use CollegePortal\Models\ContentType;

trait ContentableTrait
{
    /**
     * Returns a query builder for CollegePortal\Models\Content
     *
     * @return \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content
     */
    public function contents()
    {
        return $this->hasMany(Content::class, 'owner_id')->whereHas('type', function ($q) {
            return $q->where('type', static::class)->whereNull('related_to');
        });
    }

    /**
     * Adds new Content
     *
     * @return \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content
     */
    public function createContent($name, $value, $school_id = null)
    {
        $q = ContentType::where('name', $name);
        if ($q) {
            $q = $q->where('school_id', $school_id);
        }
        $type = $q->firstOrFail();
        if ($type->format == ContentType::ARRAY) {
            if (!$this->contents()->where('content_type_id', $type->id)->where('value', $value)->exists()) {
                return $this->contents()->create([
                    'content_type_id' => $type->id,
                    'value' => $value
                ]);
            } else {
                $this->contents()->where('content_type_id', $type->id)->where('value', $value)->firstOrFail();
            }
        } else {
            if (!$this->contents()->where('content_type_id', $type->id)->exists()) {
                return $this->contents()->create([
                    'content_type_id' => $type->id,
                    'value' => $value
                ]);
            } else {
                $content = $this->contents()->where('content_type_id', $type->id)->firstOrFail();
                $content->value = $value;
                $content->save();
                return $content;
            }
        }
    }

    public static function boot()
    {
        static::deleting(function ($model) {
            $model->contents()->get()->map(function ($content) {
                $content->delete();
            });
        });
    }
}
