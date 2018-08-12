CollegePortal\Models\Course
===============

CollegePortal\Models\Course

A Course represents a subject, managed by a department,
 that students can subscribe to, learn and receive Grades for having learnt.


* Class name: Course
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('department_id', 'semester_type_id', 'level_id', 'code', 'title', 'credit')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $department_id

    public integer $department_id





* Visibility: **public**


### $semester_type_id

    public integer $semester_type_id





* Visibility: **public**


### $level_id

    public integer $level_id





* Visibility: **public**


### $code

    public string $code





* Visibility: **public**


### $title

    public string $title





* Visibility: **public**


### $credit

    public integer $credit





* Visibility: **public**


### $created_date

    public \Carbon\Carbon $created_date





* Visibility: **public**


### $updated_date

    public \Carbon\Carbon $updated_date





* Visibility: **public**


Methods
-------


### department

    mixed CollegePortal\Models\Course::department()





* Visibility: **public**




### semesterType

    mixed CollegePortal\Models\Course::semesterType()





* Visibility: **public**




### level

    mixed CollegePortal\Models\Course::level()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\Course::scopeSchool()





* Visibility: **public**




### scopeFaculty

    mixed CollegePortal\Models\Course::scopeFaculty()





* Visibility: **public**




### dependencies

    mixed CollegePortal\Models\Course::dependencies()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\Course::staff()





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




### whereId

     CollegePortal\Models\Course::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Course::whereName()





* Visibility: **public**



