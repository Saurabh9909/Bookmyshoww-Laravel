<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookingDetailsModel extends Model
{
    protected $table = 'bookingdetails';

    /**
     * Get the movie associated with the booking.
     */
    public function movie()
    {
        return $this->belongsTo(MovieModel::class, 'movie_id');
    }

    /**
     * Get the multiplex associated with the booking.
     */
    public function multiplex()
    {
        return $this->belongsTo(MultiplexModel::class, 'multiplex_id');
    }

    /**
     * Get the user associated with the booking.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
