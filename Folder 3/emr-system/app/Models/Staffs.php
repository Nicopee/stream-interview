<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staffs extends Model
{
    use HasFactory,SoftDeletes;

    public $table ="staffs";

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'firstname', 'lastname', 'created_at', 'updated_at'
    ];


}
