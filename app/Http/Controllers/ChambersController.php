<?php

namespace App\Http\Controllers;

use App\Models\Chambers;
use App\Http\Requests\StoreChambersRequest;
use App\Http\Requests\UpdateChambersRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class ChambersController extends Controller
{
    public function index()
    {
        if(request('search1')){
            $chambers = Chambers::where('NChambre' , 'like' , '%'.request('search1').'%')->get();
        }else{
            $chambers = Chambers::all();
        }
        return view('chambers.index',compact('chambers'));
    }


    public function create()
    {
        return view('chambers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'NChambre' => 'required|min:1|integer|unique:chambers',
            'titre' => 'required',
            'Description' => 'required',
            'prix' => 'required|integer',
            'images' => 'required',
        ]);
        $chambers = new Chambers();
        $chambers->NChambre = $request->NChambre;
        $chambers->titre = $request->titre;
        $chambers->Description = $request->Description;
        $chambers->prix = $request->prix;
        if($request->hasfile('images')){
            foreach($request->file('images') as $image){
                $name = $image->store('Images','public');
                $image->move($name);
                $data[] = $name;
            }
        }
        $chambers->images = json_encode($data);
        $chambers->save();
        return redirect('/chambers')->with('success' , 'Chambers a bien Ajouter avec success');
    }


    public function show($id)
    {
        return view("chambers.show",["chambers"=>Chambers::findOrFail($id)]);
    }


    public function edit($id)
    {
        return view("chambers.edit",["chambers"=>Chambers::findOrFail($id)]);
    }


    public function update(Request $request, $id)
    {
        $updateData = Chambers::find($id);
        $updateData->update($request->all());
        return redirect("chambers")->with('success', 'Chambers modifié avec succès');
    }


    public function destroy(Request $request, $id)
    {
        $updateData = Chambers::find($id);
        $updateData->delete($request->all());
        return redirect('/chambers')->with('success','Chambers supprimer avec succès');
    }
}
