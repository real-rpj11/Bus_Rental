<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Booking extends Model
{
    protected $table = "booking";
    protected $primaryKey = "id";
    protected $fillable = [
        "name",
        "start-date",
        "end-date",
        "bus-type",
        "number_of_passenger",
        "price",
        "status"
    ];

    public function getBookingData(){
        
    }

    use HasFactory;

}
