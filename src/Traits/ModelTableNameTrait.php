<?php

namespace CollegePortal\Models\Traits;

trait ModelTableNameTrait
{
    /**
     * Returns the table name for the Model
     *
     * @return string
     */
    public static function name()
    {
        return with(new static)->getTable();
    }
}
