<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['doc_fname','doc_lname','doc_date_of_birth' , 'doc_gender','doc_phone','doc_email','doc_address','doc_files','doc_biography','doc_department'];
    public function departments()
    {
        return $this->belongsTo(departments::class, 'doc_department', 'id');
    }
}
