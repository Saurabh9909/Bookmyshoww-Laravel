<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table = 'show';

    protected $fillable = [
        'show_start_time',
        'show_end_time',
        'language',
        'show_type'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
