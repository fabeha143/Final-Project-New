<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['pat_fname','pat_lname','pat_phone','pat_admission_date','pat_gender','pat_category','pat_email','pat_address','pat_date_of_birth'];
}
