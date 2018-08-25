CollegePortal\Models\StaffTeachCourse
===============

CollegePortal\Models\StaffTeachCourse

A StaffTeachCourse model represents the fact that a Staff teaches a particular Course.


* Class name: StaffTeachCourse
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('staff_id', 'course_id', 'semester_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $staff_id

    public integer $staff_id





* Visibility: **public**


### $course_id

    public integer $course_id





* Visibility: **public**


### $semester_id

    public integer $semester_id





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### course

    mixed CollegePortal\Models\StaffTeachCourse::course()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\StaffTeachCourse::staff()





* Visibility: **public**




### semester

    mixed CollegePortal\Models\StaffTeachCourse::semester()





* Visibility: **public**




### studentTakesCourse

    mixed CollegePortal\Models\StaffTeachCourse::studentTakesCourse()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\StaffTeachCourse::scopeSchool()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\StaffTeachCourse::boot()





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

     CollegePortal\Models\StaffTeachCourse::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\StaffTeachCourse::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\StaffTeachCourse::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\StaffTeachCourse::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\StaffTeachCourse::whereUpdatedAt()





* Visibility: **public**



