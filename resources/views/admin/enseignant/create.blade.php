@extends('layouts.mainapp')




@section('content')

<div class="panel panel-default">
        <div class="panel-heading">
            <h2>Ajouter Enseignant </h2>  
        </div>

        <div class="text-center">
                        @if(count($errors)> 0 )

                        <ul class="list-group">

                                @foreach ($errors->all() as $err)
                                    <li class="list-group-item text-danger">
                                            {{$err}}
                                    </li>
                                @endforeach
                        </ul>

                         @endif
        
        <div class="panel-body">
         
                <form action="/EspaceAdministrateur/enseignant/store" method="post">
                    {{ csrf_field() }} 
                    <br> 

                    <div class="input-group mb-3">
                        
                            <input type="text" class="form-control" name="Nom" placeholder="Nom" >
                    </div>   
                    <div class="input-group mb-3">
                            <input type="text" class="form-control"  name = "Prenom" placeholder="Prenom">
                    </div>  
        
            <div class="input-group mb-3">
                    <input type="text" class="form-control" name="NomUtilisateur" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2">@example.com</span>
                    </div>
            </div>
            <div class="form-group">

                            <input type="password" class="form-control"  name = "MotDePasse" placeholder="Mot de passe">
                     
            </div>
                    <div class="input-group mb-3">
                            <input type="password" class="form-control"  name = "ConfirmMotDePasse" placeholder="Confirm votre  Mot de passe">
                    </div> 
                    <div class="input-group mb-3">
                            <input type="text" class="form-control"  name = "Module" placeholder="Module ">
                    </div> 
              
                <div class="form-group">
                            <div class="text-center">

                                <button class="btn btn-success" type="submit">Ajouter </button>
                            </div>

                </div>
                </form>
        </div>
    </div>
    </div>



@stop