CollegePortal\Models\CourseDependency
===============

CollegePortal\Models\CourseDependency

Course Dependencies point to courses a students needs to have passed
 before he/she can subscribe to a course.
E.g. You must pass MATH 101 to subscribe to MATH 201


* Class name: CourseDependency
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('course_id', 'dependency_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $course_id

    public integer $course_id





* Visibility: **public**


### $dependency_id

    public integer $dependency_id





* Visibility: **public**


### $created_date

    public \Carbon\Carbon $created_date





* Visibility: **public**


### $updated_date

    public \Carbon\Carbon $updated_date





* Visibility: **public**


Methods
-------


### course

    mixed CollegePortal\Models\CourseDependency::course()





* Visibility: **public**




### dependency

    mixed CollegePortal\Models\CourseDependency::dependency()





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

     CollegePortal\Models\CourseDependency::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\CourseDependency::whereName()





* Visibility: **public**



