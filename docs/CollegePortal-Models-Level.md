CollegePortal\Models\Level
===============

CollegePortal\Models\Level

A Level represents a year within the school system.


* Class name: Level
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('name', 'school_id')





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


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### school

    mixed CollegePortal\Models\Level::school()





* Visibility: **public**




### courses

    mixed CollegePortal\Models\Level::courses()





* Visibility: **public**




### programCredits

    mixed CollegePortal\Models\Level::programCredits()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\Level::boot()





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




### whereId

     CollegePortal\Models\Level::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Level::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Level::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Level::whereUpdatedAt()





* Visibility: **public**



