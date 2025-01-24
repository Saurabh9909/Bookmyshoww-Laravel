<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    use HasFactory;

    protected $table = "movie";

    public function ticketPrices()
    {
        return $this->hasMany(TicketpriceModel::class);
    }

    public function bookingDetails()
    {
        return $this->hasMany(BookingDetailsModel::class, 'movie_id');
    }
}
