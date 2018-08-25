CollegePortal\Models\ChargeableService
===============

CollegePortal\Models\ChargeableService

A Chargeable Service represents the charges assigned to a model,
 denoted by the $type property.


* Class name: ChargeableService
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('type', 'name', 'description', 'amount', 'school_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $type

    public string $type





* Visibility: **public**


### $name

    public string $name





* Visibility: **public**


### $description

    public string $description





* Visibility: **public**


### $amount

    public float $amount





* Visibility: **public**


### 

    public integer 

school_id



* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### chargeables

    mixed CollegePortal\Models\ChargeableService::chargeables()





* Visibility: **public**




### school

    mixed CollegePortal\Models\ChargeableService::school()





* Visibility: **public**




### scopeOwner

    mixed CollegePortal\Models\ChargeableService::scopeOwner($query, $owner_id)





* Visibility: **public**


#### Arguments
* $query **mixed**
* $owner_id **mixed**



### boot

    mixed CollegePortal\Models\ChargeableService::boot()





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




### whereId

     CollegePortal\Models\ChargeableService::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\ChargeableService::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\ChargeableService::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\ChargeableService::whereUpdatedAt()





* Visibility: **public**



