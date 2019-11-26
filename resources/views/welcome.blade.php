@extends('view')





@section('content')

    Mon projet IGL {{date('Y-m-d H:i:s')}}
    <br> 
    <p> <a class="btn btn-primary btn-lg" role="button" href="/EspaceAdministrateur">Espace Administrateur</a> 
        <a class="btn btn-success btn-lg" role="button" href="/EspaceEnseignant">Espace Enseignant</a>
        <a class="btn btn-dark btn-lg" role="button" href="/EspaceEtudiant">Espace Etudiant</a>
    
    
    </p>
    



@stop 