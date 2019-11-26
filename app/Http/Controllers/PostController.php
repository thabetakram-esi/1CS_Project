<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use App\Etudiant;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UserStoreRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::flash('success','Hey!!');
        $Etudiants=Etudiant::all();
        return view('admin.etudiant.affichage')->with('etudiant',$Etudiants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etudiant.create');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
    public function messages()
    {
        return [
            'Nom.required' => 'A name is required',
            'Prenom.required'  => 'A firstname is required',
            'NomUtilisateur.required'  => 'A username is required',
            'MotDePasse.required'  => 'A password is required',
            'ConfirmMotDePasse.required'  => 'A cofirmation password is required',
            'NiveauEtude.required'  => 'A grade study is required'

        ];
    }
    public function store(UserStoreRequest $request)
    {

        $validated = $request->validated();

        $Etudiant=new Etudiant;
        $Etudiant->Nom=$request->Nom;
        $Etudiant->Prenom=$request->Prenom;
        $Etudiant->NomUtilisateur=$request->NomUtilisateur;
        $Etudiant->MotDePasse=$request->MotDePasse;
        $Etudiant->ConfirmMotDePasse=$request->ConfirmMotDePasse;
        $Etudiant->NiveauEtude=$request->NiveauEtude;
        $Etudiant->save();
        Session::flash('success',' you successfully create a new student');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Etudiant=Etudiant::find($id);
        $Etudiant->Nom=$request->Nom;
        $Etudiant->Prenom=$request->Prenom;
        $Etudiant->NomUtilisateur=$request->NomUtilisateur;
        $Etudiant->MotDePasse=$request->MotDePasse;
        $Etudiant->ConfirmMotDePasse=$request->ConfirmMotDePasse;
        $Etudiant->NiveauEtude=$request->NiveauEtude;
        $Etudiant->save();
        Session::flash('success',' you successfully update that student');
        return redirect()->back();
        
    }
    public function modifier (){
        $Etudiants=Etudiant::all();
        return view('admin.etudiant.modifier')->with('etudiant',$Etudiants);;

    }
    public function supprimer(){
        $Etudiants=Etudiant::all();
        return view('admin.etudiant.supprimer')->with('etudiant',$Etudiants);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Etudiant=Etudiant::find($id);
        $Etudiant->delete();
        return redirect()->back();
    }


}
