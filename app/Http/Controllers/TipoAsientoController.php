<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoAsiento;
class TipoAsientoController extends Controller
{
    //
    public function asientos(){
        
        $asientos=TipoAsiento::all();
        //echo $asientos;
        return view("tipoAsientos", compact("asientos"));
    }
}
