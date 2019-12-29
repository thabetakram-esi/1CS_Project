<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cours;
use App\Http\Requests\Enscours;
class MyController extends Controller
{
 
    public function index(){
       $title="My website";
        return view('welcome')->with('title',$title);
      
}

public function espace_admin(){
    return view('admin.espace_admin');
}
public function espace_ens(){
    return view('Ens.espace_enseignant');
}
public function espace_etd(){
    return view('Etd.espace_etudiant');
}

public function ajouter_crs(){
    return view('Ens.AjouterCours');
}
public function store(Enscours $request){
    $validated = $request->validated();

        $Cours=$request->file('Cours') ;
        $cours_name=$Cours-> getClientOriginalName();
        $cours_sans_espace= str_replace(CHR(32),"",$cours_name);
        $Cours_new_name=time().$cours_sans_espace;
        $Cours->move('uploads/Cours',$Cours_new_name);
        $ajoutCours=Cours::create([
            'Nom'=>$request->Nom,'date'=>$request->Date,'Cours'=>'uploads/Cours/'.$Cours_new_name
        ]);
        return view ('Ens.AjouterCours');
    
            

}

public function consulter(){
    $Cours=Cours::all();
    return view('Etd.Cours')->with('Cours',$Cours);
}
}
