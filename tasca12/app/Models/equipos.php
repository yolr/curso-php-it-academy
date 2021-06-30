<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\partido;

class equipos extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function partidos(){

        return $this->hasMany(partido::class);
    }
}
