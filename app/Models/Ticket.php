<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'show_id',
        'admin_id',
        'ticket_no',
        'show_date',
        'seat_no',
        'price',
        'hall_no',
    ];

    /**
     * Get the show associated with the ticket.
     */
    public function show()
    {
        return $this->belongsTo(Show::class);
    }

    /**
     * Get the admin associated with the ticket.
     */
    public function admin()
    {
        return $this->belongsTo(AdminModel::class);
    }
}
