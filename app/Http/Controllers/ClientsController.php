<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        if(request('search1')){
            $clients = Clients::where('CIN' , 'like' , '%'.request('search1').'%')->orwhere('Nom', 'like' , '%'.request('search2').'%')->get();
        }else{
            $clients = Clients::orderByDesc('created_at')->get();
        }
        return view('clients.index',compact('clients'));

    }
   
    public function create()
    {
        return view('clients.create');
    }


    public function store(Request $request)
    {
        Clients::create($request->all());
        return redirect('/clients')->with('success', 'Clients Bien Ajouté ');
    }


    public function show($id)
    {
        return view("clients.show",["Clients"=>Clients::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view("clients.edit",["Clients"=>Clients::findOrFail($id)]);
    }


    public function update(Request $request,$id)
    {
        $updateData = Clients::find($id);
        $updateData->update($request->all());
        return redirect("/Clients")->with('success', 'Clients modifié avec succès');
    }


    public function destroy(Request $request, $id)
    {
        $updateData = Clients::find($id);
        $updateData->delete($request->all());
        return redirect('/Clients')->with('success','Clients supprimer avec succès');
    }
}
