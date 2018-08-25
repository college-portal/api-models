CollegePortal\Models\Grade
===============

CollegePortal\Models\Grade

A Grade is a partial or total score a lecturer assigns to a student who
 takes a course he/she is in charge of.


* Class name: Grade
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('student_takes_course_id', 'score', 'description', 'locked_at')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $student_takes_course_id

    public integer $student_takes_course_id





* Visibility: **public**


### $score

    public float $score





* Visibility: **public**


### $description

    public string $description





* Visibility: **public**


### $locked_at

    public \Carbon\Carbon $locked_at





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### studentTakesCourse

    mixed CollegePortal\Models\Grade::studentTakesCourse()





* Visibility: **public**




### scopeStudent

    mixed CollegePortal\Models\Grade::scopeStudent()





* Visibility: **public**




### scopeStaffTeachCourse

    mixed CollegePortal\Models\Grade::scopeStaffTeachCourse()





* Visibility: **public**




### scopeStaff

    mixed CollegePortal\Models\Grade::scopeStaff()





* Visibility: **public**




### scopeCourse

    mixed CollegePortal\Models\Grade::scopeCourse()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\Grade::scopeSchool()





* Visibility: **public**




### scopeUser

    mixed CollegePortal\Models\Grade::scopeUser()





* Visibility: **public**




### scopeTotal

    mixed CollegePortal\Models\Grade::scopeTotal($query, $student_takes_course_id)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $student_takes_course_id **mixed**



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

     CollegePortal\Models\Grade::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Grade::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Grade::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Grade::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Grade::whereUpdatedAt()





* Visibility: **public**



