<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointments extends Model
{
     use HasFactory;
    public $timestamps = false;
    protected $fillable = ['patient_name','patient_dob','appointment_date' , 'appointment_time','department','doctor_name'];
    public function doctors()
    {
        return $this->belongsTo(doctor::class, 'doctor_name', 'id');
    }
    public function departments()
    {
        return $this->belongsTo(departments::class, 'department', 'id');
    }
}
