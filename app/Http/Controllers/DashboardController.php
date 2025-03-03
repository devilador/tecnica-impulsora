<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Retornar la vista con los usuarios
        return view('dashboard', compact('users'));
    }
}
