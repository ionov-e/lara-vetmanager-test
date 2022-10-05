<?php

namespace App\Http\Controllers;

use App\Services\VetApiService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $clients = (new VetApiService(Auth::user()))->getClients();
        return view('dashboard', ['clients' => $clients]);
    }
}
