CollegePortal\Models\SemesterType
===============

CollegePortal\Models\SemesterType

A Semester Type represents a group of Semesters, and
 belonging to a School.
E.g. 1st Semester


* Class name: SemesterType
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

    public integer $name





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $created_date

    public \Carbon\Carbon $created_date





* Visibility: **public**


### $updated_date

    public \Carbon\Carbon $updated_date





* Visibility: **public**


Methods
-------


### semesters

    mixed CollegePortal\Models\SemesterType::semesters()





* Visibility: **public**




### school

    mixed CollegePortal\Models\SemesterType::school()





* Visibility: **public**




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

     CollegePortal\Models\SemesterType::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\SemesterType::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\SemesterType::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\SemesterType::whereUpdatedAt()





* Visibility: **public**



