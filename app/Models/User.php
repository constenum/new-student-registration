<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_number',
        'first_name',
        'preferred_name',
        'middle_name',
        'last_name',
        'dob',
        'street',
        'unit_number',
        'city',
        'state',
        'zip',
        'mailing_street',
        'mailing_unit_number',
        'mailing_city',
        'mailing_state',
        'mailing_zip',
        'cell_phone',
        'does_live_with_biological_parent',
        'parent_status',
        'primary_household_street',
        'primary_household_unit_number',
        'primary_household_city',
        'primary_household_state',
        'primary_household_zip',
        'primary_household_phone',
        'contact_1_title',
        'contact_1_first_name',
        'contact_1_last_name',
        'contact_1_relation',
        'contact_1_email',
        'contact_1_cell',
        'contact_1_work_phone',
        'contact_2_title',
        'contact_2_first_name',
        'contact_2_last_name',
        'contact_2_relation',
        'contact_2_email',
        'contact_2_cell',
        'contact_2_work_phone',
        'secondary_household_street',
        'secondary_household_unit_number',
        'secondary_household_city',
        'secondary_household_state',
        'secondary_household_zip',
        'secondary_household_phone',
        'contact_3_title',
        'contact_3_first_name',
        'contact_3_last_name',
        'contact_3_relation',
        'contact_3_email',
        'contact_3_cell',
        'contact_3_work_phone',
        'contact_4_title',
        'contact_4_first_name',
        'contact_4_last_name',
        'contact_4_relation',
        'contact_4_email',
        'contact_4_cell',
        'contact_4_work_phone',
        'photo_publication',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
