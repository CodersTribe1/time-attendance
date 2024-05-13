<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraineeInfo extends Model
{
    use HasFactory;
    protected $table = "trainees_info";
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact_num',
        'email',
        'sex',
        'bithday',
        'uniqueid',
        'photo',
        'grade_completed',
        'nationality',
        'civil_status',
        'scholarship',
        'training_status',
        'client_classification',
        'age',
        'batch_number',
        'street',
        'barangay',
        'monicipality',
        'district',
        'province',
    ];
}
