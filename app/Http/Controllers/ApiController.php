<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    public function listVenteApi(){
        $ventes = Vente::all();

        return response()->json([
            'status' => true,
            'ventes' => $ventes
        ]);
    }


}
