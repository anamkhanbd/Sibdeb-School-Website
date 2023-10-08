<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singup extends Model
{
    use HasFactory;
    protected $table =  "singups" ;
    protected $primaryKey = "singup-id	";
}
