<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enseignant;
use App\Http\Requests\EnsStoreRequest;

class MyController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Enseignant=Enseignant::all();
        return view('admin.enseignant.affichage')->with('enseignant',$Enseignant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enseignant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnsStoreRequest $request)
    {
        $validated = $request->validated();

        $Enseignant=new Enseignant;
        $Enseignant->Nom=$request->Nom;
        $Enseignant->Prenom=$request->Prenom;
        $Enseignant->NomUtilisateur=$request->NomUtilisateur;
        $Enseignant->MotDePasse=$request->MotDePasse;
        $Enseignant->ConfirmMotDePasse=$request->ConfirmMotDePasse;
        $Enseignant->Module=$request->Module;
        $Enseignant->save();

        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function modifier(){
        $Enseignant=Enseignant::all();
        return view('admin.enseignant.modifier')->with('enseignant',$Enseignant);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Enseignant=Enseignant::find($id);
        $Enseignant->Nom=$request->Nom;
        $Enseignant->Prenom=$request->Prenom;
        $Enseignant->NomUtilisateur=$request->NomUtilisateur;
        $Enseignant->MotDePasse=$request->MotDePasse;
        $Enseignant->ConfirmMotDePasse=$request->ConfirmMotDePasse;
        $Enseignant->Module=$request->Module;
        $Enseignant->save();

        return redirect()->back();
    }
    public function supprimer(){
        $Enseignant=Enseignant::all();
        return view('admin.enseignant.supprimer')->with('enseignant',$Enseignant);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Enseignant=Enseignant::find($id);
        $Enseignant->delete();
        return redirect()->back();

        //
    }
}
