CollegePortal\Models\ImageType
===============

CollegePortal\Models\ImageType

An Image Type represents images belonging to a model,
 denoted by the $type property.


* Class name: ImageType
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


### $type

    public string $type





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### 

    public integer 

school_id



* Visibility: **public**


Methods
-------


### images

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image CollegePortal\Models\BaseModel::images()

Returns a query builder for CollegePortal\Models\Image



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### school

    mixed CollegePortal\Models\ImageType::school()





* Visibility: **public**




### scopeOwner

    mixed CollegePortal\Models\ImageType::scopeOwner($query, $owner_id)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $owner_id **mixed**



### boot

    mixed CollegePortal\Models\ImageType::boot()





* Visibility: **public**
* This method is **static**.




### name

    string CollegePortal\Models\BaseModel::name()

Returns the table name for the Model



* Visibility: **public**
* This method is **static**.
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### assets

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset CollegePortal\Models\BaseModel::assets()

Returns a query builder for CollegePortal\Models\Asset



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### whereId

     CollegePortal\Models\ImageType::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\ImageType::whereName()





* Visibility: **public**



