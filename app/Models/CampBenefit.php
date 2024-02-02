<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampBenefit extends Model
{
    use HasFactory;

    //untuk defind field yg bisa di isi di table ini
    protected $fillable = ['camp_id','name'];
}
