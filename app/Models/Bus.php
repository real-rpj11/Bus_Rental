<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $table = "buses";
    protected $fillable = [
        "bus_name",
        "number_of_passenger",
        "price/day"
    ];

    use HasFactory;
}
