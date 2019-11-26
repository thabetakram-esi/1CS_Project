<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <a class="navbar-brand" href="{{ url('/EspaceAdministrateur') }}">
                        Home
                </a>
               
                </div>
            </div>
        </nav>

        <main class="py-4">
                <div class="colg-lg-8">
                    @foreach ($enseignant as $ens)
                        
                    
                        <form action="{{route('enseignant.update',['id'=>$ens->id])}}" >
                                <div class="form-row">
                                  <div class="col">
                                  <input type="text" class="form-control" value="{{$ens->Nom}}" name="Nom">
                                  </div>
                                  <div class="col">
                                    <input type="text" class="form-control" value="{{$ens->Prenom}}" name="Prenom">
                                  </div>
                                  <div class="col">
                                        <input type="text" class="form-control" value="{{$ens->NomUtilisateur}}" name="NomUtilisateur">
                                      </div>
                                      <div class="col">
                                            <input type="password" class="form-control" value="{{$ens->MotDePasse}}" name="MotDePasse">
                                          </div>
                                          <div class="col">
                                                <input type="password" class="form-control" value="{{$ens->ConfirmMotDePasse}}" name="ConfirmMotDePasse">
                                              </div>
                                          <div class="col">
                                                <input type="text" class="form-control" value="{{$ens->Module}}" name="Module">
                                              </div>
                                              <button class="btn btn-primary"  >modifier </button>

                                </div>
                              </form>
                              <br>
                              @endforeach

                    </div>
        </main>

    </div>
</body>
</html>