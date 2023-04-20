<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Reservations;

class homecontroller extends Controller
{
    public function index()
    {
        $clients = Clients::all();
        $Reservations = Reservations::all();
        return view('application.home.index',compact('clients','Reservations'));
    }
}
