<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id = null)
    {
        return view('components.perfil', ['id' => $id]);
    }
}
