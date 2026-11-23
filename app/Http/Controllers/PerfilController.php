<?php

namespace App\Http\Controllers;

class PerfilController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(?int $id = null)
    {
        return ($id ? "Perfil del usuario " . $id : "Mi perfil");
    }
}
