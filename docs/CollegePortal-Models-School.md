CollegePortal\Models\School
===============

CollegePortal\Models\School

A School represents a tertiary institution.


* Class name: School
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('name', 'short_name', 'owner_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $short_name

    public string $short_name





* Visibility: **public**


### $owner_id

    public integer $owner_id





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### owner

    mixed CollegePortal\Models\School::owner()





* Visibility: **public**




### users

    mixed CollegePortal\Models\School::users()





* Visibility: **public**




### faculties

    mixed CollegePortal\Models\School::faculties()





* Visibility: **public**




### gradeTypes

    mixed CollegePortal\Models\School::gradeTypes()





* Visibility: **public**




### chargeableServices

    mixed CollegePortal\Models\School::chargeableServices()





* Visibility: **public**




### imageTypes

    mixed CollegePortal\Models\School::imageTypes()





* Visibility: **public**




### contentTypes

    mixed CollegePortal\Models\School::contentTypes()





* Visibility: **public**




### invites

    mixed CollegePortal\Models\School::invites()





* Visibility: **public**




### scopeDepartments

    mixed CollegePortal\Models\School::scopeDepartments()





* Visibility: **public**




### currentSession

    mixed CollegePortal\Models\School::currentSession($date)





* Visibility: **public**


#### Arguments
* $date **mixed**



### sessions

    mixed CollegePortal\Models\School::sessions()





* Visibility: **public**




### semesterTypes

    mixed CollegePortal\Models\School::semesterTypes()





* Visibility: **public**




### levels

    mixed CollegePortal\Models\School::levels()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\School::staff()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\School::boot()





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

     CollegePortal\Models\School::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\School::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\School::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\School::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\School::whereUpdatedAt()





* Visibility: **public**



