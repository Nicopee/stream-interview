<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Patients;

class Appointments extends Model
{
    use HasFactory,SoftDeletes;


    public $table ="appointments";

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'clinical_notes','appointment_date','appointment_time','staff_id','patient_id','status', 'created_at', 'updated_at'
    ];

    public function patient(){
        $this->belongsTo(Patients::class);
    }
}
