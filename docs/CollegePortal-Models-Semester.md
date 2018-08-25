CollegePortal\Models\Semester
===============

CollegePortal\Models\Semester

A Semester represents a time period, marked by start and end dates,
 within a Session, and belonging to a Semester Type.


* Class name: Semester
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('semester_type_id', 'session_id', 'start_date', 'end_date')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $semester_type_id

    public integer $semester_type_id





* Visibility: **public**


### $session_id

    public integer $session_id





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


### session

    mixed CollegePortal\Models\Semester::session()





* Visibility: **public**




### school

    mixed CollegePortal\Models\Semester::school()





* Visibility: **public**




### type

    mixed CollegePortal\Models\Semester::type()





* Visibility: **public**




### programCredits

    mixed CollegePortal\Models\Semester::programCredits()





* Visibility: **public**




### boot

    mixed CollegePortal\Models\Semester::boot()





* Visibility: **public**
* This method is **static**.




### scopeChargeables

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\Chargeable CollegePortal\Models\Semester::scopeChargeables()

Returns a query builder for CollegePortal\Models\Chargeable



* Visibility: **public**




### scopeChargeableServices

    \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService CollegePortal\Models\Semester::scopeChargeableServices($query, $school_id)

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

     CollegePortal\Models\Semester::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\Semester::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\Semester::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Semester::whereCreatedAt()





* Visibility: **public**



