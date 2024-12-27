<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplexModel extends Model
{
    use HasFactory;
    protected $table= 'multiplex';

    public function ticketPrices()
    {
        return $this->hasMany(TicketpriceModel::class);
    }
}
