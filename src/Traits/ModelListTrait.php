<?php

namespace CollegePortal\Models\Traits;

use CollegePortal\Models\User;
use CollegePortal\Models\School;
use CollegePortal\Models\Role;
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
use CollegePortal\Models\Image;
use CollegePortal\Models\ImageType;

trait ModelListTrait
{
    /**
     * Returns a list of all Model class names besides BaseModel
     *
     * @return array
     */
    public static function models()
    {
        return [
            User::class,
            School::class,
            Role::class,
            Staff::class,
            Student::class,
            Faculty::class,
            Program::class,
            Course::class,
            Session::class,
            Semester::class,
            Department::class,
            UserHasRole::class,
            ChargeableService::class,
            Chargeable::class,
            ProgramCredit::class,
            Payable::class,
            CourseDependency::class,
            IntentType::class,
            Intent::class,
            Image::class,
            ImageType::class
        ];
    }
}
