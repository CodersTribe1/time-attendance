<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilitatorInfo extends Model
{
    use HasFactory;
    protected $table = "facilitators_info";
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact_num',
        'email',
        'sex',
        'birthday',
        'uniqueid',
        'photo',
        'civil_status',
        'nationality',
        'age',
        'department',
        'street',
        'barangay',
        'monicipality',
        'district',
        'province',
    ];
}
