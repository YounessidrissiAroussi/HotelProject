<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Clients;
// use App\Helpers\Helper;
use App\Models\User;


class homecontroller extends Controller
{
    public function index()
    {
        $users = Reservations::select(DB::raw("COUNT(*) as count"), DB::raw("DAY(DateDepart) as day"))
            ->whereYear('DateDepart', date('Y'))
            ->groupBy(DB::raw("DAY(DateDepart), DAY(DateDepart)"))
            ->pluck('count', 'day');
        $labels = $users->keys();
        $data = $users->values();

        $client = Clients::select(DB::raw("COUNT(*) as countt"), DB::raw("DAY(created_at) as days"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("DAY(created_at), DAY(created_at)"))
            ->pluck('countt', 'days');
        $labelss = $client->keys();
        $dataa = $client->values();

        $Reservations = DB::table('reservations')
            ->join('Clients', 'Reservations.Client_id', '=', 'Clients.id')
            ->select('Reservations.*', 'Clients.Nom as client_Nom')
            ->where('status', 0)
            ->get();


        return view('home.index',compact('Reservations','labelss', 'dataa','labels', 'data'));
    }
}
