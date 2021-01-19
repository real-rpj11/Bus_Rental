<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = "buses";
    protected $fillable = [
        "name",
        "driverlicense",
        "contactnumber",
        "salary",
        "status"
    ];

    use HasFactory;
}
