CollegePortal\Models\AssetType
===============

CollegePortal\Models\AssetType

An AssetType represents file types belongs to a model,
 denoted by the $type property.
E.g. the Prospect model having waec-result as an AssetType


* Class name: AssetType
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('type', 'name', 'school_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $type

    public string $type





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $size

    public integer $size





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### assets

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset CollegePortal\Models\BaseModel::assets()

Returns a query builder for CollegePortal\Models\Asset



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### school

    mixed CollegePortal\Models\AssetType::school()





* Visibility: **public**




### scopeOwner

    mixed CollegePortal\Models\AssetType::scopeOwner($query, $owner_id)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $owner_id **mixed**



### name

    string CollegePortal\Models\BaseModel::name()

Returns the table name for the Model



* Visibility: **public**
* This method is **static**.
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### contents

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Content CollegePortal\Models\BaseModel::contents()

Returns a query builder for CollegePortal\Models\Content



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### boot

    mixed CollegePortal\Models\BaseModel::boot()





* Visibility: **public**
* This method is **static**.
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### images

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image CollegePortal\Models\BaseModel::images()

Returns a query builder for CollegePortal\Models\Image



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### whereId

     CollegePortal\Models\AssetType::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\AssetType::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\AssetType::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\AssetType::whereUpdatedAt()





* Visibility: **public**



