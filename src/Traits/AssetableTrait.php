<?php

namespace CollegePortal\Models\Traits;

use CollegePortal\Models\Asset;

trait AssetableTrait
{
    /**
     * Returns a query builder for CollegePortal\Models\Asset
     *
     * @return \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset
     */
    public function assets()
    {
        return $this->hasMany(Asset::class, 'owner_id')->whereHas('type', function ($q) {
            return $q->where('type', static::class);
        });
    }
}
