CollegePortal\Models\Student
===============

CollegePortal\Models\Student

A Student represents a user with a "student" role within a School


* Class name: Student
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('user_id', 'program_id', 'matric_no')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $user_id

    public integer $user_id





* Visibility: **public**


### $program_id

    public integer $program_id





* Visibility: **public**


### $matric_no

    public string $matric_no





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### user

    mixed CollegePortal\Models\Student::user()





* Visibility: **public**




### program

    mixed CollegePortal\Models\Student::program()





* Visibility: **public**




### courses

    mixed CollegePortal\Models\Student::courses()





* Visibility: **public**




### scopeDepartment

    mixed CollegePortal\Models\Student::scopeDepartment()





* Visibility: **public**




### scopeFaculty

    mixed CollegePortal\Models\Student::scopeFaculty()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\Student::scopeSchool()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\BaseModel::boot()





* Visibility: **public**
* This method is **static**.
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




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

     CollegePortal\Models\Student::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Student::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Student::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Student::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Student::whereUpdatedAt()





* Visibility: **public**



