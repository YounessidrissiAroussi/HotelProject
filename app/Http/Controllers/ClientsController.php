<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Http\Requests\StoreClientsRequest;
use App\Http\Requests\UpdateClientsRequest;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request('search1')){
           $clients = Clients::where('CIN' , 'like' , '%'.request('search1').'%')->get();
        }else{
            $clients = Clients::all();
        }
         return view('application.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('application.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientsRequest $request)
    {
        $request->validate([
            'CIN' => 'required|min:4|max:9|unique:clients',
            'Nom' => 'required|min:3|max:20',
            'Phone' => 'required|min:3|max:10',
            'Email' => 'required|email|unique:clients',
            'type' => 'required',
        ]);
        Clients::create([
            "CIN" => $request->CIN,
            "Nom" => $request->Nom,
            "Phone" => $request->Phone,
            "Email" => $request->Email,
            "type" => $request->type,
        ]);
            return redirect('/Clients/Ajouter')->with('success','Client Ajouter avec success...');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clients $clients)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clients $clients)
    {
        return view('application.clients.edit',compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientsRequest $request, Clients $clients)
    {
        $request->validate([
            'CIN' => 'required|min:4|max:9|unique:clients',
            'Nom' => 'required|min:3|max:20',
            'Phone' => 'required|min:3|max:10',
            'Email' => 'required|email|unique:clients',
            'type' => 'required',
        ]);
            $clients->CIN = $request->CIN;
            $clients->Nom = $request->Nom;
            $clients->Phone = $request->Phone;
            $clients->Email = $request->Email;
            $clients->type = $request->type;
        $clients->update();
        return redirect('/Clients')->with('success','Client Modifier avec success...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clients $clients)
    {
        $clients->delete();
        return redirect('/Clients')->with('success','Client à Supprimer');
    }
}
