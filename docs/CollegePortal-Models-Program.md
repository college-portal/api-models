CollegePortal\Models\Program
===============

CollegePortal\Models\Program

A Program represents a study-path a Student within a Department can take.


* Class name: Program
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('name', 'department_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $department_id

    public integer $department_id





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### department

    mixed CollegePortal\Models\Program::department()





* Visibility: **public**




### students

    mixed CollegePortal\Models\Program::students()





* Visibility: **public**




### credits

    mixed CollegePortal\Models\Program::credits()





* Visibility: **public**




### prospects

    mixed CollegePortal\Models\Program::prospects()





* Visibility: **public**




### scopeFaculty

    mixed CollegePortal\Models\Program::scopeFaculty()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\Program::scopeSchool()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\Program::boot()





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

     CollegePortal\Models\Program::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Program::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Program::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Program::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Program::whereUpdatedAt()





* Visibility: **public**



