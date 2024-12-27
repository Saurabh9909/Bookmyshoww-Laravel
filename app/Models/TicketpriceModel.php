<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketpriceModel extends Model
{
    use HasFactory;
    protected $table='ticketprice';

    public function movie()
    {
        return $this->belongsTo(MovieModel::class,'movie_id','id');
    }
    public function multiplex()
    {
        return $this->belongsTo(MultiplexModel::class,'multiplex_id','id');
    }
}
