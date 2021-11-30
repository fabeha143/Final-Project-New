<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicines_category extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['med_cat_name','med_cat_description'];
}
