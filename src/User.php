<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use CollegePortal\Models\Traits\ModelTableNameTrait;
use CollegePortal\Models\Traits\FullNameTrait;
use CollegePortal\Models\Traits\FilterableTrait;
use CollegePortal\Models\Traits\AuthorizableTrait;
use CollegePortal\Models\Role;
use CollegePortal\Models\School;
use CollegePortal\Models\Staff;
use CollegePortal\Models\Student;
use CollegePortal\Models\Faculty;
use CollegePortal\Models\Program;
use CollegePortal\Models\Course;
use CollegePortal\Models\Session;
use CollegePortal\Models\Semester;
use CollegePortal\Models\Department;
use CollegePortal\Models\UserHasRole;
use CollegePortal\Models\ChargeableService;
use CollegePortal\Models\Chargeable;
use CollegePortal\Models\ProgramCredit;
use CollegePortal\Models\Payable;
use CollegePortal\Models\CourseDependency;
use CollegePortal\Models\IntentType;
use CollegePortal\Models\Intent;

/**
 * CollegePortal\Models\User
 *
 * @property int $id
 * @property string $google_id
 * @property string $first_name
 * @property string $last_name
 * @property string $other_names
 * @property string $display_name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property date $dob
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read mixed $name
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\CollegePortal\Models\ChargeableService whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable, ModelTableNameTrait, FullNameTrait, FilterableTrait, AuthorizableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'other_names', 'display_name', 'email', 'password', 'dob'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'google_id', 'password', 'remember_token',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class, UserHasRole::name())->withTimestamps();
    }

    public function intents() {
        return $this->belongsToMany(IntentType::class, Intent::name())->withTimestamps();
    }

    public function scopeSchools() {
        return $this->hasRole(Role::ADMIN) ? 
                School::query() :
                $this->belongsToMany(School::class, UserHasRole::name())->withTimestamps();
    }

    public function scopeUsers() {
        if ($this->hasRole(Role::ADMIN)) return self::query();
        else {
            /** get users in schools that intersect with the current user's */
            $table_name = UserHasRole::name();
            $ids = $this->schools()->pluck('schools.id');
            return $this->whereHas('schools', function ($q) use ($ids) {
                return $q->whereIn('schools.id', $ids);
            })->where('users.id', '!=', $this->id)->with('staff');
        }
    }

    public function scopeFaculties() {
        if ($this->hasRole(Role::ADMIN)) return Faculty::query();
        else {
            /** get faculties in schools that intersect with the current user's */
            $ids = $this->schools()->pluck('schools.id');
            return Faculty::whereIn('school_id', $ids);
        }
    }

    public function scopeDepartments() {
        if ($this->hasRole(Role::ADMIN)) return Department::query();
        else {
            /** get departments in faculties in schools that intersect with the current user's */
            $ids = $this->faculties()->pluck('faculties.id');
            return Department::whereIn('faculty_id', $ids);
        }
    }

    public function scopePrograms() {
        if ($this->hasRole(Role::ADMIN)) return Program::query();
        else {
            /** get programs in departments in faculties in schools that intersect with the current user's */
            $ids = $this->departments()->pluck('departments.id');
            return Program::whereIn('department_id', $ids);
        }
    }

    public function scopeProgramCredits() {
        if ($this->hasRole(Role::ADMIN)) return ProgramCredit::query();
        else {
            /** get programs in departments in faculties in schools that intersect with the current user's */
            $ids = $this->programs()->pluck('programs.id');
            return ProgramCredit::whereIn('program_id', $ids);
        }
    }

    public function scopeCourses() {
        if ($this->hasRole(Role::ADMIN)) return Course::query();
        else {
            /** get courses in departments in faculties in schools that intersect with the current user's */
            $ids = $this->departments()->pluck('departments.id');
            return Course::whereIn('department_id', $ids);
        }
    }

    public function scopeCourseDependencies() {
        if ($this->hasRole(Role::ADMIN)) return CourseDependency::query();
        else {
            /** get courses in departments in faculties in schools that intersect with the current user's */
            $ids = $this->courses()->pluck('courses.id');
            return CourseDependency::whereIn('course_id', $ids);
        }
    }

    public function scopeViewableStudents() {
        if ($this->hasRole(Role::ADMIN)) return Student::query();
        else {
            $ids = $this->schools()->pluck('schools.id');
            return Student::whereHas('user', function ($q) use ($ids) {
                return $q->whereHas('schools', function ($q) use ($ids) {
                    return $q->whereIn('schools.id', $ids);
                });
            });
        }
    }

    public function scopeViewableStaff() {
        if ($this->hasRole(Role::ADMIN)) return Staff::query();
        else {
            $ids = $this->schools()->pluck('schools.id');
            return Staff::whereHas('user', function ($q) use ($ids) {
                return $q->whereHas('schools', function ($q) use ($ids) {
                    return $q->whereIn('schools.id', $ids);
                });
            });
        }
    }

    public function scopeSessions() {
        if ($this->hasRole(Role::ADMIN)) return Session::query();
        else {
            $ids = $this->schools()->pluck('schools.id');
            return Session::whereIn('school_id', $ids);
        }
    }

    public function scopeSemesters() {
        if ($this->hasRole(Role::ADMIN)) return Semester::query();
        else {
            $ids = $this->schools()->pluck('schools.id');
            return Semester::whereHas('type', function ($q) use ($ids) {
                return $q->whereIn('school_id', $ids);
        });
        }
    }

    public function scopeChargeableServices() {
        if ($this->hasRole(Role::ADMIN)) return ChargeableService::query();
        else {
            $ids = $this->schools()->pluck('schools.id');
            return ChargeableService::whereIn('school_id', $ids);
        }
    }

    public function scopeChargeables() {
        if ($this->hasRole(Role::ADMIN)) return Chargeable::query();
        else {
            $ids = $this->chargeableServices()->pluck('chargeable_services.id');
            return Chargeable::whereIn('chargeable_service_id', $ids);
        }
    }

    public function scopeManagedSchools($query, User $user = null) {
        return School::where('owner_id', isset($user) ? $user->id : $this->id);
    }

    public function scopeManagedFaculties($query, User $user = null) {
        $ids = Staff::where('user_id', isset($user) ? $user->id : $this->id)->pluck('staff.id');
        return Faculty::whereIn('dean_id', $ids);
    }

    public function scopeManagedDepartments($query, User $user = null) {
        $ids = Staff::where('user_id', isset($user) ? $user->id : $this->id)->pluck('staff.id');
        return Department::whereIn('hod_id', $ids);
    }

    public function scopeManagedSchoolsUsers() {
        $table_name = UserHasRole::name();
        return $this->managedSchools()
                    ->join("$table_name as pivot", 'schools.id', '=', 'pivot.school_id')
                    ->join('users as others', 'others.id', '=', 'pivot.user_id')
                    ->select('others.*');
    }

    public function scopeManagedFacultiesUsers() {
        $table_name = UserHasRole::name();
        return $this->managedFaculties()
                    ->join('schools', 'faculties.school_id', '=', 'schools.id')
                    ->join("$table_name as pivot", 'schools.id', '=', 'pivot.school_id')
                    ->join('users as others', 'others.id', '=', 'pivot.user_id')
                    ->select('others.*');
    }

    public function scopeManagedDepartmentsUsers() {
        $table_name = UserHasRole::name();
        return $this->managedDepartments()
                    ->join('faculties', 'faculties.id', '=', 'departments.faculty_id')
                    ->join('schools', 'faculties.school_id', '=', 'schools.id')
                    ->join("$table_name as pivot", 'schools.id', '=', 'pivot.school_id')
                    ->join('users as others', 'others.id', '=', 'pivot.user_id')
                    ->select('others.*');
    }

    public function scopeViewablePayables() {
        $q = app(Payable::class);
        if ($this->hasRole(Role::ADMIN)) {
            return $q;
        }
        else if ($this->hasRole(Role::SCHOOL_OWNER)) {
            $ids = $this->managedSchoolsUsers()
                        ->select('others.id')->pluck('others.id');
            return $q->whereIn('user_id', $ids);
        }
        else if ($this->hasRole(Role::DEAN)) {
            $ids = $this->managedFacultiesUsers()
                        ->select('others.id')->pluck('others.id');
            return $q->whereIn('user_id', $ids);
        }
        else if ($this->hasRole(Role::HOD)) {
            $ids = $this->managedDepartmentsUsers()
                        ->select('others.id')->pluck('others.id');
            return $q->whereIn('user_id', $ids);
        }
        else return $this->payables();
    }

    public function scopeViewableUserRoles() {
        $q = app(UserHasRole::class);
        if ($this->hasRole(Role::ADMIN)) {
            return $q;
        }
        else if ($this->hasRole(Role::SCHOOL_OWNER)) {
            $ids = $this->schools()->union($this->managedSchools())->pluck('schools.id');
            return $q->whereIn('school_id', $ids);
        }
        else {
            $ids = $this->schools()->pluck('schools.id');
            return $q->whereIn('school_id', $ids);
        }
    }
  
    public function students() {
        return $this->hasMany(Student::class);
    }

    public function staff() {
        return $this->hasMany(Staff::class);
    }

    public function payables() {
        return $this->hasMany(Payable::class);
    }

    public function hasRole($role_names, $school_id = null) {
        $q = $this->roles();
        if ($school_id) {
            $q = $q->where('school_id', $school_id);
        }
        if (!is_array($role_names)) return $q->where('name', $role_names)->exists();
        else return $q->whereIn('name', $role_names)->exists();
    }

    public function scopeIntersectsSchoolsWith($query, $user) {
        if ($user->hasRole(Role::ADMIN)) return self::query();
        else {
            $ids = $user->schools()->pluck('schools.id');
            return $query->whereHas('schools', function ($q) use ($ids) {
                return $q->whereIn('schools.id', $ids);
            });
        }
    }

    public static function boot() {
        $hashPasswordHandler = function ($model) {
            if ($model->password) {
                $model->password = bcrypt($model->password);
            }
        };

        $setRememberTokenHandler = function ($model) {
            $model->remember_token = str_random(10);
        };

        self::creating($hashPasswordHandler);
        self::updating($hashPasswordHandler);
        self::creating($setRememberTokenHandler);
    }
}
