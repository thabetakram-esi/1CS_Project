@extends('layouts.mainapp')





@section('content')




<table class="table table-hover table-dark table-responsive table-bordered" >
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom utilisateuf</th>
            <th scope="col">Niveau D'étude </th>

          </tr>
        </thead>
        <tbody>
            @foreach ($etudiant as $etu)
                
            
          <tr>
          <th scope="col">{{$etu->Nom}}</th>
            <th scope="col">{{$etu->Prenom}}</th>
            <th scope="col">{{$etu->NomUtilisateur}}</th>
            <th scope="col">{{$etu->NiveauEtude}}</th>
          </tr>
          @endforeach
    
        </tbody>
      </table>
      




@stop










