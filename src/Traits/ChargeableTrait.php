<?php

namespace CollegePortal\Models\Traits;

use CollegePortal\Models\Chargeable;
use CollegePortal\Models\ChargeableService;
use Illuminate\Database\Eloquent\Builder;

trait ChargeableTrait
{
    /**
     * Returns a query builder for CollegePortal\Models\Chargeable
     *
     * @return Illuminate\Database\Eloquent\Builder|CollegePortal\Models\Chargeable
     */
    public function scopeChargeables()
    {
        return Chargeable::where('type', static::class)->whereHas('service', function ($q) {
            return $q->where('id', $this->id);
        });
    }

    /**
     * Returns a query builder for CollegePortal\Models\ChargeableService
     *
     * @return Illuminate\Database\Eloquent\Builder|CollegePortal\Models\ChargeableService
     */
    public function scopeChargeableServices($query, $school_id)
    {
        return ChargeableService::where([
            'type' => static::class,
            'school_id' => $school_id
        ]);
    }
}
