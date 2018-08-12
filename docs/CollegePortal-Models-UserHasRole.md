CollegePortal\Models\UserHasRole
===============

CollegePortal\Models\UserHasRole

A UserHasRole model represents the fact that a User,
 acts a particular Role, sometimes within a School.


* Class name: UserHasRole
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('user_id', 'role_id', 'school_id')





* Visibility: **protected**


### $table

    protected mixed $table = 'user_has_roles'





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $user_id

    public integer $user_id





* Visibility: **public**


### $role_id

    public integer $role_id





* Visibility: **public**


### $school_id

    public integer $school_id





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

    mixed CollegePortal\Models\UserHasRole::user()





* Visibility: **public**




### role

    mixed CollegePortal\Models\UserHasRole::role()





* Visibility: **public**




### school

    mixed CollegePortal\Models\UserHasRole::school()





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

     CollegePortal\Models\UserHasRole::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\UserHasRole::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\UserHasRole::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\UserHasRole::whereUpdatedAt()





* Visibility: **public**



