<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class medicines extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['med_name','med_company','med_expiry','med_cat'];
}
