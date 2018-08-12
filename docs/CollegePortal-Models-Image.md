CollegePortal\Models\Image
===============

CollegePortal\Models\Image

An Image represents a particular jpeg/png/etc resource belonging to an Image Type


* Class name: Image
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('owner_id', 'image_type_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $owner_id

    public integer $owner_id





* Visibility: **public**


### $image_type_id

    public integer $image_type_id





* Visibility: **public**


### $location

    public string $location





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### type

    mixed CollegePortal\Models\Image::type()





* Visibility: **public**




### scopeOwner

    mixed CollegePortal\Models\Image::scopeOwner()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\Image::scopeSchool()





* Visibility: **public**




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




### assets

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Asset CollegePortal\Models\BaseModel::assets()

Returns a query builder for CollegePortal\Models\Asset



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### images

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image CollegePortal\Models\BaseModel::images()

Returns a query builder for CollegePortal\Models\Image



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### whereId

     CollegePortal\Models\Image::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Image::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Image::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Image::whereUpdatedAt()





* Visibility: **public**



