<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludar extends Controller
{
    public function Saludar($nombre){
        
        return "Hola $nombre";
    }
}
