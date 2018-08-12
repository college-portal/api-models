<?php

namespace CollegePortal\Models\Traits;

use CollegePortal\Models\Image;

trait ImageableTrait
{
    /**
     * Returns a query builder for CollegePortal\Models\Image
     *
     * @return Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image
     */
    public function images() {
        return $this->hasMany(Image::class, 'owner_id')->whereHas('type', function ($q) {
            return $q->where('type', static::class);
        });
    }
}
