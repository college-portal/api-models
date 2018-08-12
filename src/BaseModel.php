<?php

namespace CollegePortal\Models;

use Mykeels\Filters\Traits\FilterableTrait;
use CollegePortal\Models\Traits\ContentableTrait;
use CollegePortal\Models\Traits\AssetableTrait;
use CollegePortal\Models\Traits\ImageableTrait;
use Illuminate\Database\Eloquent\Model;

/**
 * CollegePortal\Models\BaseModel
 *
 * The base class for all other models
 *
 * @mixin \Eloquent
 */
class BaseModel extends Model
{
    use FilterableTrait, ContentableTrait, AssetableTrait, ImageableTrait;
  
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
