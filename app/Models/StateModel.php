<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateModel extends Model
{
    use HasFactory;

    protected $table = "state";

    public function country()
    {
        return $this->belongsTo(CountryModel::class,'country_id','id');
    }
    public function cities()
    {
        return $this->hasMany(CityModel::class, 'state_id','id');
    }
}
