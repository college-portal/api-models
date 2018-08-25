CollegePortal\Models\Staff
===============

CollegePortal\Models\Staff

A staff represents a User having a "staff" role within a School


* Class name: Staff
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('title', 'school_id', 'department_id', 'user_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $user_id

    public integer $user_id





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $department_id

    public integer $department_id





* Visibility: **public**


### $title

    public string $title





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

    mixed CollegePortal\Models\Staff::user()





* Visibility: **public**




### department

    mixed CollegePortal\Models\Staff::department()





* Visibility: **public**




### courses

    mixed CollegePortal\Models\Staff::courses()





* Visibility: **public**




### school

    mixed CollegePortal\Models\Staff::school()





* Visibility: **public**




### scopeFaculty

    mixed CollegePortal\Models\Staff::scopeFaculty()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\Staff::boot()





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

     CollegePortal\Models\Staff::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Staff::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Staff::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Staff::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Staff::whereUpdatedAt()





* Visibility: **public**



