CollegePortal\Models\Event
===============

CollegePortal\Models\Event

Not Implemented Yet


* Class name: Event
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $id

    public integer $id





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $user_id

    public integer $user_id





* Visibility: **public**


### $url

    public string $url





* Visibility: **public**


### $description

    public string $description





* Visibility: **public**


### $start_date

    public \Carbon\Carbon $start_date





* Visibility: **public**


### $end_date

    public \Carbon\Carbon $end_date





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

    mixed CollegePortal\Models\Event::user()





* Visibility: **public**




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

     CollegePortal\Models\Event::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Event::whereName()





* Visibility: **public**



