@extends('layouts.ensapp')




@section('content')


<div class="panel panel-default">
        <div class="panel-heading">
            <h2>Ajouter Cours </h2>  
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
         
                <form enctype="multipart/form-data" action="{{route('cours.ajout')}}" method="post">
                    {{ csrf_field() }} 
                    <br> 

                    <div class="input-group mb-3">
                        
                            <input type="text" class="form-control" name="Nom" placeholder="Nom Du Cours" >
                    </div>   
                    <div class="input-group mb-3">
                    <input type="text" class="form-control"  name = "Date" value="{{date('Y-m-d H:i')}}">
                    </div>  
                    <input id="input-b1"   name="Cours" type="file" class="file" data-browse-on-zone-click="true">

    
              
                <div class="form-group">
                        <br>

                            <div class="text-center">

                                <button class="btn btn-success" type="submit">Ajouter </button>
                            </div>

                </div>
                </form>
        </div>
    </div>
    </div>

@stop