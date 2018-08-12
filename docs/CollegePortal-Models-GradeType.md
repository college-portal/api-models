CollegePortal\Models\GradeType
===============

CollegePortal\Models\GradeType

A GradeType is a classification for grade scores. E.g. a score between 70 and 100 is an A.


* Class name: GradeType
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('name', 'value', 'school_id', 'minimum', 'maximum')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $value

    public integer $value





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $minimum

    public integer $minimum





* Visibility: **public**


### $maximum

    public integer $maximum





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

    mixed CollegePortal\Models\GradeType::school()





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

     CollegePortal\Models\GradeType::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\GradeType::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\GradeType::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\GradeType::whereUpdatedAt()





* Visibility: **public**



