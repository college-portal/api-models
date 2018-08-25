CollegePortal\Models\StudentTakesCourse
===============

CollegePortal\Models\StudentTakesCourse

A StudentTakesCourse models represents the fact that a Student,
 takes a Course taught by a particular Staff.


* Class name: StudentTakesCourse
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('student_id', 'staff_teach_course_id')





* Visibility: **protected**


### $table

    protected mixed $table = 'student_takes_courses'





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $student_id

    public integer $student_id





* Visibility: **public**


### $staff_teach_course_id

    public integer $staff_teach_course_id





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### student

    mixed CollegePortal\Models\StudentTakesCourse::student()





* Visibility: **public**




### staffCourses

    mixed CollegePortal\Models\StudentTakesCourse::staffCourses()





* Visibility: **public**




### semester

    mixed CollegePortal\Models\StudentTakesCourse::semester()





* Visibility: **public**




### grades

    mixed CollegePortal\Models\StudentTakesCourse::grades()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\StudentTakesCourse::staff()





* Visibility: **public**




### course

    mixed CollegePortal\Models\StudentTakesCourse::course()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\StudentTakesCourse::scopeSchool()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\StudentTakesCourse::boot()





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

     CollegePortal\Models\StudentTakesCourse::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\StudentTakesCourse::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\StudentTakesCourse::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\StudentTakesCourse::whereUpdatedAt()





* Visibility: **public**



