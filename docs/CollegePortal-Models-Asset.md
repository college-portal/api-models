CollegePortal\Models\Asset
===============

CollegePortal\Models\Asset

An Asset represents a particular file that belongs to an AssetType


* Class name: Asset
* Namespace: CollegePortal\Models
* Parent class: [CollegePortal\Models\BaseModel](CollegePortal-Models-BaseModel.md)





Properties
----------


### $fillable

    protected mixed $fillable = array('owner_id', 'asset_type_id', 'location', 'mime', 'size')





* Visibility: **protected**


### $id

    public integer $id





* Visibility: **public**


### $owner_id

    public integer $owner_id





* Visibility: **public**


### $asset_type_id

    public integer $asset_type_id





* Visibility: **public**


### $location

    public string $location





* Visibility: **public**


### $mime

    public string $mime





* Visibility: **public**


### $size

    public integer $size





* Visibility: **public**


### $created_at

    public \Carbon\Carbon $created_at





* Visibility: **public**


### $updated_at

    public \Carbon\Carbon $updated_at





* Visibility: **public**


Methods
-------


### type

    mixed CollegePortal\Models\Asset::type()





* Visibility: **public**




### scopeOwner

    mixed CollegePortal\Models\Asset::scopeOwner()





* Visibility: **public**




### scopeSchool

    mixed CollegePortal\Models\Asset::scopeSchool()





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

     CollegePortal\Models\Asset::whereId()





* Visibility: **public**




### whereCreatedAt

     CollegePortal\Models\Asset::whereCreatedAt()





* Visibility: **public**




### whereUpdatedAt

     CollegePortal\Models\Asset::whereUpdatedAt()





* Visibility: **public**



