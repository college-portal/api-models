CollegePortal\Models\Prospect
===============

CollegePortal\Models\Prospect

A Prospect is a User who is an admission candidate to a particular School,
 in a particular Program and targeting a particular Session.

A Prospect can be locked for editing by a school-owner, similar to closing the
 admission process.


* Class name: Prospect
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('user_id', 'school_id', 'program_id', 'session_id', 'locked_at', 'accepted_at')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $user_id

    public integer $user_id





* Visibility: **public**


### $school_id

    public integer $school_id





* Visibility: **public**


### $program_id

    public integer $program_id





* Visibility: **public**


### $session_id

    public integer $session_id





* Visibility: **public**


### $student_id

    public integer $student_id





* Visibility: **public**


### $locked_at

    public \Carbon\Carbon $locked_at





* Visibility: **public**


### $accepted_at

    public \Carbon\Carbon $accepted_at





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

    mixed CollegePortal\Models\Prospect::user()





* Visibility: **public**




### school

    mixed CollegePortal\Models\Prospect::school()





* Visibility: **public**




### program

    mixed CollegePortal\Models\Prospect::program()





* Visibility: **public**




### session

    mixed CollegePortal\Models\Prospect::session()





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

     CollegePortal\Models\Prospect::whereId()





* Visibility: **public**




### whereSchoolId

     CollegePortal\Models\Prospect::whereSchoolId()





* Visibility: **public**




### whereProgramId

     CollegePortal\Models\Prospect::whereProgramId()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Prospect::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Prospect::whereUpdatedAt()





* Visibility: **public**



