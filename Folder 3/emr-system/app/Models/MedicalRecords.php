<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalRecords extends Model
{
    use HasFactory,SoftDeletes;

    public $table ="medical_records";

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'patient_id','staff_id','lab_test_id','medical_condition','treatment','visit_outcome','symptoms', 'created_at', 'updated_at'
    ];
}
