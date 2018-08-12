CollegePortal\Models\Session
===============

CollegePortal\Models\Session

A Session represents an academic year. It could contain one or more semesters.


* Class name: Session
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('school_id', 'name', 'start_date', 'end_date')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $name

    public integer $name





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


Methods
-------


### school

    mixed CollegePortal\Models\Session::school()





* Visibility: **public**




### semesters

    mixed CollegePortal\Models\Session::semesters()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\BaseModel::boot()





* Visibility: **public**
* This method is **static**.
* This method is defined by [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)




### scopeChargeables

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Chargeable CollegePortal\Models\Session::scopeChargeables()

Returns a query builder for CollegePortal\Models\Chargeable



* Visibility: **public**




### scopeChargeableServices

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService CollegePortal\Models\Session::scopeChargeableServices($query, $school_id)

Returns a query builder for CollegePortal\Models\ChargeableService



* Visibility: **public**


#### Arguments
* $query **mixed**
* $school_id **mixed**



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




### whereContains

     CollegePortal\Models\Session::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Session::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Session::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Session::whereCreatedAt()





* Visibility: **public**



