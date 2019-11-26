@extends('layouts.mainapp')





@section('content')




<table class="table table-hover table-dark table-responsive table-bordered" >
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom utilisateuf</th>
            <th scope="col">Module </th>

          </tr>
        </thead>
        <tbody>
            @foreach ($enseignant as $ens)
                
            
          <tr>
          <th scope="col">{{$ens->Nom}}</th>
            <th scope="col">{{$ens->Prenom}}</th>
            <th scope="col">{{$ens->NomUtilisateur}}</th>
            <th scope="col">{{$ens->Module}}</th>
          </tr>
          @endforeach
    
        </tbody>
      </table>
      




@stop










