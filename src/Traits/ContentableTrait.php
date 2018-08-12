<?php

namespace CollegePortal\Models\Traits;

use CollegePortal\Models\Content;

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

    public static function boot()
    {
        static::deleting(function ($model) {
            $model->contents()->get()->map(function ($content) {
                $content->delete();
            });
        });
    }
}
