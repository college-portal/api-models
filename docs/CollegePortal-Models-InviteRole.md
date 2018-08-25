CollegePortal\Models\InviteRole
===============

CollegePortal\Models\InviteRole

An Invite Role represents the role an invited potential is supposed to assume in the system.


* Class name: InviteRole
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('invite_id', 'role_id', 'extras')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $invite_id

    public integer $invite_id





* Visibility: **public**


### $role_id

    public integer $role_id





* Visibility: **public**


### $extras

    public string $extras





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### invite

    mixed CollegePortal\Models\InviteRole::invite()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\InviteRole::scopeSchool()





* Visibility: **public**




### setExtrasAttribute

    mixed CollegePortal\Models\InviteRole::setExtrasAttribute($value)





* Visibility: **public**


#### Arguments
* $value **mixed**



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




### whereId

     CollegePortal\Models\InviteRole::whereId()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\InviteRole::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\InviteRole::whereUpdatedAt()





* Visibility: **public**



