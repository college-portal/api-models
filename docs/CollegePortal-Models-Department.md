CollegePortal\Models\Department
===============

CollegePortal\Models\Department

A Department is a division within a Faculty comprising one or more study programs.


* Class name: Department
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('name', 'hod_id', 'faculty_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $hod_id

    public integer $hod_id





* Visibility: **public**


### $faculty_id

    public integer $faculty_id





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### faculty

    mixed CollegePortal\Models\Department::faculty()





* Visibility: **public**




### hod

    mixed CollegePortal\Models\Department::hod()





* Visibility: **public**




### hods

    mixed CollegePortal\Models\Department::hods()





* Visibility: **public**




### programs

    mixed CollegePortal\Models\Department::programs()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\Department::staff()





* Visibility: **public**




### students

    mixed CollegePortal\Models\Department::students()





* Visibility: **public**




### courses

    mixed CollegePortal\Models\Department::courses()





* Visibility: **public**




### users

    mixed CollegePortal\Models\Department::users()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\Department::boot()





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

     CollegePortal\Models\Department::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Department::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Department::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Department::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Department::whereUpdatedAt()





* Visibility: **public**



