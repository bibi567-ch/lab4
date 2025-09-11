<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoEvaChinoController extends Controller
{
    public function index(): string
    {
        return "Hola, soy Eva Chino";
    }
}
