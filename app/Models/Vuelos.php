<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelos extends Model
{
    use HasFactory;
    protected $table = 'Vuelos';
    protected $primaryKey= 'numeroVuelo';
    public $timestamps = false;
    
}
