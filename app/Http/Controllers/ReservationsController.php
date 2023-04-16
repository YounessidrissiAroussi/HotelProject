<?php

namespace App\Http\Controllers;
use App\Models\Reservations;
use App\Http\Requests\StoreReservationsRequest;
use App\Http\Requests\UpdateReservationsRequest;
use App\Models\Clients;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('websitepages.reservation');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationsRequest $request)
    {
        $Client = new Clients();
        $Client->Nom = $request->Nom;
        $Client->save();
        
        $reservations = new Reservations();
        $reservations->DateDepart = $request->DateDepart;
        $reservations->Adults = $request->Adults;
        $reservations->Enfants = $request->Enfants;
        $reservations->Client_id = $Client->id;
        $reservations->save();
            return redirect('/Reserver')->with('success','Reservation success fully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservations $reservations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationsRequest $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservations $reservations)
    {
        //
    }
}
