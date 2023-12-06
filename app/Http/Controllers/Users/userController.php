<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function AgregarUsusario()
    {
        
    }

    public function ModificarUsusario()
    {

    }

    public function VerUsuario()
    {
        return response()->json([
            "hola"=>"hola muando"],201
            );
    }

    public function EliminarUsuario()
    {
        
    }

}
