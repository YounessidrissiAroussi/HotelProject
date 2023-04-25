<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreReservationsRequest;
use App\Http\Requests\UpdateReservationsRequest;
use App\Models\Reservations;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{

    public function index()
    {
        if(request('search1')){
            $Reservations = DB::table('reservations')
            ->join('Clients', 'Reservations.Client_id', '=', 'Clients.id')
            ->where('Clients.Nom', 'like', '%'.request('search1').'%')
            ->select('Reservations.*', 'Clients.Nom as client_Nom')
            ->get();
        }else{
            $Reservations = DB::table('reservations')
            ->join('Clients', 'Reservations.Client_id', '=', 'Clients.id')
            ->select('Reservations.*', 'Clients.Nom as client_Nom')
            ->get();
            // $Reservations = Reservations::all();

        }
        return view('reservations.index',compact('Reservations'));
    }


    public function create()
    {
        return view('reservations.create',["Clients"=>Clients::all()]);
    }

    public function ajouter()
    {
        return view('websitepages.reservation');
    }


    public function store(Request $request)
    {
        Reservations::create($request->all());
        return redirect('/reservations')->with('success', 'Reservations Bien Ajouté ');
    }

    public function add(StoreReservationsRequest $request)
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

    public function show($id)
    {
        return view("reservations.show",["Reservations"=>Reservations::findOrFail($id),]);
    }


    public function edit($id)
    {
        return view("reservations.edit",["Reservations"=>Reservations::findOrFail($id),"Clients"=>Clients::all()]);
    }

    public function valide($id)
    {
        $updateData = Reservations::find($id);
        $updateData->status=1;
        $updateData->update();
        return redirect("home")->with('success', "Reservations Numéro $updateData->id bien valider");
    }


    public function update(Request $request,$id)
    {
        $updateData = Reservations::find($id);
        $updateData->update($request->all());
        return redirect("/Reservations")->with('success', 'Reservations modifié avec succès');
    }
    
    public function destroy(Request $request, $id)
    {
        $updateData = Reservations::find($id);
        $updateData->delete($request->all());
        return redirect('/Reservations')->with('success','Reservations supprimer avec succès');
    }
    public function delete(Request $request, $id)
    {
        $updateData = Reservations::find($id);
        $updateData->delete($request->all());
        return redirect('/home')->with('success','Reservations supprimer avec succès');
    }
}
