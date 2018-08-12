CollegePortal\Models\Invite
===============

CollegePortal\Models\Invite

An Invite represents an invitation given by an administrator, or school-owner
 to a potential user, denoted by $email.
It may contain one or more roles.


* Class name: Invite
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('creator_id', 'school_id', 'email', 'message')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $creator_id

    public integer $creator_id





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $email

    public integer $email





* Visibility: **public**


### $message

    public string $message





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### roles

    mixed CollegePortal\Models\Invite::roles()





* Visibility: **public**




### school

    mixed CollegePortal\Models\Invite::school()





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

     CollegePortal\Models\Invite::whereId()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Invite::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Invite::whereUpdatedAt()





* Visibility: **public**



