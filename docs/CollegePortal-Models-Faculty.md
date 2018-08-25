CollegePortal\Models\Faculty
===============

CollegePortal\Models\Faculty

A Faculty is a division within a School comprising one or more departments.


* Class name: Faculty
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $dates

    protected mixed $dates = array('deleted_at')





* Visibility: **protected**


### $fillable

    protected mixed $fillable = array('name', 'school_id', 'dean_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $dean_id

    public integer $dean_id





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


### $deleted_at

    public \Carbon\Carbon $deleted_at





* Visibility: **public**


Methods
-------


### school

    mixed CollegePortal\Models\Faculty::school()





* Visibility: **public**




### dean

    mixed CollegePortal\Models\Faculty::dean()





* Visibility: **public**




### deans

    mixed CollegePortal\Models\Faculty::deans()





* Visibility: **public**




### departments

    mixed CollegePortal\Models\Faculty::departments()





* Visibility: **public**




### programs

    mixed CollegePortal\Models\Faculty::programs()





* Visibility: **public**




### students

    mixed CollegePortal\Models\Faculty::students()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\Faculty::staff()





* Visibility: **public**




### users

    mixed CollegePortal\Models\Faculty::users()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\Faculty::boot()





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




### images

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Image CollegePortal\Models\BaseModel::images()

Returns a query builder for CollegePortal\Models\Image



* Visibility: **public**
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### whereContains

     CollegePortal\Models\Faculty::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Faculty::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Faculty::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Faculty::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Faculty::whereUpdatedAt()





* Visibility: **public**



