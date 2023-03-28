<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Appointments;
use App\Models\MedicalRecords;


class Patients extends Model
{
    use HasFactory,SoftDeletes;



    public $table ="patients";

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'firstname', 'lastname', 'created_at', 'updated_at'
    ];

    public function appointments(){
        $this->hasMany(Appointments::class);
    }

    public function medicalRecords(){
        $this->hasMany(MedicalRecords::class);
    }


}
