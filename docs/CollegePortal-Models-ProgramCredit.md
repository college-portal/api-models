CollegePortal\Models\ProgramCredit
===============

CollegePortal\Models\ProgramCredit

A Program Credit represents the maximum number of credits a Student within a Level can take in a Semester.


* Class name: ProgramCredit
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('program_id', 'semester_id', 'level_id', 'credit')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $program_id

    public integer $program_id





* Visibility: **public**


### $semester_id

    public integer $semester_id





* Visibility: **public**


### $level_id

    public integer $level_id





* Visibility: **public**


### $credit

    public integer $credit





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### program

    mixed CollegePortal\Models\ProgramCredit::program()





* Visibility: **public**




### semester

    mixed CollegePortal\Models\ProgramCredit::semester()





* Visibility: **public**




### level

    mixed CollegePortal\Models\ProgramCredit::level()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\ProgramCredit::scopeSchool()





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




### whereContains

     CollegePortal\Models\ProgramCredit::whereContains()





* Visibility: **public**




### whereId

     CollegePortal\Models\ProgramCredit::whereId()





* Visibility: **public**




### whereName

     CollegePortal\Models\ProgramCredit::whereName()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\ProgramCredit::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\ProgramCredit::whereUpdatedAt()





* Visibility: **public**



