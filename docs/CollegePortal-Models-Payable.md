CollegePortal\Models\Payable
===============

CollegePortal\Models\Payable

A payable represents the fact that a user has to pay for a chargeable.
- It should be hook for all Models that implement CollegePortal\Models\Traits\ChargeableTrait
- The hook should be executed before POSTs in the service, to check that no pending payable exists
- The POST operation should fail if such a payable exists


* Class name: Payable
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('user_id', 'chargeable_id')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $user_id

    public integer $user_id





* Visibility: **public**


### $chargeable_id

    public integer $chargeable_id





* Visibility: **public**


### $is_paid

    public boolean $is_paid





* Visibility: **public**


### $paid_at

    public \Carbon\Carbon $paid_at





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

    mixed CollegePortal\Models\Payable::user()





* Visibility: **public**




### chargeable

    mixed CollegePortal\Models\Payable::chargeable()





* Visibility: **public**




### setIsPaidAttribute

    mixed CollegePortal\Models\Payable::setIsPaidAttribute($value)





* Visibility: **public**


#### Arguments
* $value **mixed**



### getIsPaidAttribute

    mixed CollegePortal\Models\Payable::getIsPaidAttribute()





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

     CollegePortal\Models\Payable::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Payable::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Payable::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Payable::whereUpdatedAt()





* Visibility: **public**



