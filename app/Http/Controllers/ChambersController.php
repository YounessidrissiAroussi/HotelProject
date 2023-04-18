<?php

namespace App\Http\Controllers;

use App\Models\Chambers;
use App\Http\Requests\StoreChambersRequest;
use App\Http\Requests\UpdateChambersRequest;
use Illuminate\Support\Facades\File;
use App\Models\Images;

class ChambersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chambers = Chambers::all();
        return view('application.chambers.index',compact('chambers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('application.chambers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChambersRequest $request)
    {
        $request->validate([
            'NChambre' => 'required|min:1|integer|unique:chambers',
            'titre' => 'required',
            'Description' => 'required',
            'prix' => 'required|integer',
            'url' => 'required',
        ]);

        $chambers = new Chambers();
        $chambers->NChambre = $request->NChambre;
        $chambers->titre = $request->titre;
        $chambers->Description = $request->Description;
        $chambers->prix = $request->prix;
        $chambers->save();
        if($request->hasfile('url')){
            foreach($request->file('url') as $image){
                $name = $image->store('Images','public');
                $image->move($name);  
                $data[] = $name;
            }
        }
            $images = new Images();
            $images->chamber_id = $chambers->id;
            $images->url = json_encode($data);
            $images->save();
                return redirect('/Chambers/Ajouter')->with('success' , 'Chambers a bien Ajouter avec success');
    }

    public function show(Chambers $chambers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chambers $chambers)
    {
        return view('application.chambers.edit',compact('chambers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChambersRequest $request, Chambers $chambers)
    {
        $request->validate([
            'NChambre' => 'required|min:1|integer',
            'titre' => 'required',
            'Description' => 'required',
            'prix' => 'required|integer',
            // 'url' => 'required',
        ]);
            $chambers->NChambre = $request->NChambre;
            $chambers->titre = $request->titre;
            $chambers->Description = $request->Description;
            $chambers->prix = $request->prix;
            // $chambers->images = $request->url;
        $chambers->update();
        return redirect('/Chambers')->with('success','Chambers Modifier avec success...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chambers $chambers)
    {
        foreach($chambers->images as $image){
            $data = json_decode($image->url);
                $chambers->delete();
                for($i = 0; $i < count($data); $i++){
                    File::delete('storage/'.$data[$i]);   
                }
        }
        return redirect('/Chambers')->with('success', 'Vous avez Supprimer');
    }
}
