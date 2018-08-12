CollegePortal\Models\User
===============

CollegePortal\Models\User

The base class for all other models


* Class name: User
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected array $fillable = array('first_name', 'last_name', 'other_names', 'display_name', 'email', 'password', 'dob')

The attributes that are mass assignable.



* Visibility: **protected**


### $hidden

    protected array $hidden = array('google_id', 'password', 'remember_token')

The attributes that should be hidden for arrays.



* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $google_id

    public string $google_id





* Visibility: **public**


### $first_name

    public string $first_name





* Visibility: **public**


### $last_name

    public string $last_name





* Visibility: **public**


### $other_names

    public string $other_names





* Visibility: **public**


### $display_name

    public string $display_name





* Visibility: **public**


### $email

    public string $email





* Visibility: **public**


### $password

    public string $password





* Visibility: **public**


### $remember_token

    public string $remember_token





* Visibility: **public**


### $dob

    public \CollegePortal\Models\date $dob





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


### $name

    public mixed $name





* Visibility: **public**


Methods
-------


### roles

    mixed CollegePortal\Models\User::roles()





* Visibility: **public**




### intents

    mixed CollegePortal\Models\User::intents()





* Visibility: **public**




### scopeSchools

    mixed CollegePortal\Models\User::scopeSchools()





* Visibility: **public**




### scopeUsers

    mixed CollegePortal\Models\User::scopeUsers()





* Visibility: **public**




### scopeFaculties

    mixed CollegePortal\Models\User::scopeFaculties()





* Visibility: **public**




### scopeDepartments

    mixed CollegePortal\Models\User::scopeDepartments()





* Visibility: **public**




### scopePrograms

    mixed CollegePortal\Models\User::scopePrograms()





* Visibility: **public**




### scopeProgramCredits

    mixed CollegePortal\Models\User::scopeProgramCredits()





* Visibility: **public**




### scopeCourses

    mixed CollegePortal\Models\User::scopeCourses()





* Visibility: **public**




### scopeCourseDependencies

    mixed CollegePortal\Models\User::scopeCourseDependencies()





* Visibility: **public**




### scopeViewableStudents

    mixed CollegePortal\Models\User::scopeViewableStudents()





* Visibility: **public**




### scopeViewableStaff

    mixed CollegePortal\Models\User::scopeViewableStaff()





* Visibility: **public**




### scopeSessions

    mixed CollegePortal\Models\User::scopeSessions()





* Visibility: **public**




### scopeSemesters

    mixed CollegePortal\Models\User::scopeSemesters()





* Visibility: **public**




### scopeChargeableServices

    mixed CollegePortal\Models\User::scopeChargeableServices()





* Visibility: **public**




### scopeChargeables

    mixed CollegePortal\Models\User::scopeChargeables()





* Visibility: **public**




### scopeManagedSchools

    mixed CollegePortal\Models\User::scopeManagedSchools($query, \CollegePortal\Models\User $user)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $user **[CollegePortal\Models\User](CollegePortal-Models-User.md)**



### scopeManagedFaculties

    mixed CollegePortal\Models\User::scopeManagedFaculties($query, \CollegePortal\Models\User $user)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $user **[CollegePortal\Models\User](CollegePortal-Models-User.md)**



### scopeManagedDepartments

    mixed CollegePortal\Models\User::scopeManagedDepartments($query, \CollegePortal\Models\User $user)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $user **[CollegePortal\Models\User](CollegePortal-Models-User.md)**



### scopeManagedSchoolsUsers

    mixed CollegePortal\Models\User::scopeManagedSchoolsUsers()





* Visibility: **public**




### scopeManagedFacultiesUsers

    mixed CollegePortal\Models\User::scopeManagedFacultiesUsers()





* Visibility: **public**




### scopeManagedDepartmentsUsers

    mixed CollegePortal\Models\User::scopeManagedDepartmentsUsers()





* Visibility: **public**




### scopeViewablePayables

    mixed CollegePortal\Models\User::scopeViewablePayables()





* Visibility: **public**




### scopeViewableUserRoles

    mixed CollegePortal\Models\User::scopeViewableUserRoles()





* Visibility: **public**




### students

    mixed CollegePortal\Models\User::students()





* Visibility: **public**




### staff

    mixed CollegePortal\Models\User::staff()





* Visibility: **public**




### payables

    mixed CollegePortal\Models\User::payables()





* Visibility: **public**




### hasRole

    mixed CollegePortal\Models\User::hasRole($role_names, $school_id)





* Visibility: **public**


#### Arguments
* $role_names **mixed**
* $school_id **mixed**



### scopeIntersectsSchoolsWith

    mixed CollegePortal\Models\User::scopeIntersectsSchoolsWith($query, $user)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $user **mixed**



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




### setFirstNameAttribute

    mixed CollegePortal\Models\User::setFirstNameAttribute(string $value)

Executed when the first_name property is set



* Visibility: **public**


#### Arguments
* $value **string**



### setLastNameAttribute

    mixed CollegePortal\Models\User::setLastNameAttribute(string $value)

Executed when the last_name property is set



* Visibility: **public**


#### Arguments
* $value **string**



### setOtherNamesAttribute

    mixed CollegePortal\Models\User::setOtherNamesAttribute(string $value)

Executed when the other_names property is set



* Visibility: **public**


#### Arguments
* $value **string**



### getNameAttribute

    mixed CollegePortal\Models\User::getNameAttribute()

serves the name property which consists of first_name, last_name and other_names



* Visibility: **public**




### authorize

    \Illuminate\Auth\Access\Response CollegePortal\Models\User::authorize(mixed $ability, mixed|array $arguments)

Authorize a given action for a user.



* Visibility: **public**


#### Arguments
* $ability **mixed**
* $arguments **mixed|array**



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

     CollegePortal\Models\User::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\User::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\User::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\User::whereUpdatedAt()





* Visibility: **public**



