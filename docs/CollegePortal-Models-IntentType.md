CollegePortal\Models\IntentType
===============

CollegePortal\Models\IntentType

An IntentType represents a group of intents.


* Class name: IntentType
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('name')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $name

    public integer $name





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### users

    mixed CollegePortal\Models\IntentType::users()





* Visibility: **public**




### intents

    mixed CollegePortal\Models\IntentType::intents()





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

     CollegePortal\Models\IntentType::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\IntentType::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\IntentType::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\IntentType::whereUpdatedAt()





* Visibility: **public**



