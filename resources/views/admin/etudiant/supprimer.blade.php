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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                </div>
            </div>
        </nav>

        <main class="py-4">
                <div class="colg-lg-8">
                    @foreach ($etudiant as $etu)
                        
                    
                        <form action="{{route('etudiant.destroy',['id'=>$etu->id])}}" >
                                <div class="form-row">
                                  <div class="col">
                                  <input type="text" class="form-control" value="{{$etu->Nom}}" name="Nom">
                                  </div>
                                  <div class="col">
                                    <input type="text" class="form-control" value="{{$etu->Prenom}}" name="Prenom">
                                  </div>
                                  <div class="col">
                                        <input type="text" class="form-control" value="{{$etu->NomUtilisateur}}" name="NomUtilisateur">
                                      </div>
                                      <div class="col">
                                            <input type="password" class="form-control" value="{{$etu->MotDePasse}}" name="MotDePasse">
                                          </div>
                                          <div class="col">
                                                <input type="password" class="form-control" value="{{$etu->ConfirmMotDePasse}}" name="ConfirmMotDePasse">
                                              </div>
                                          <div class="col">
                                                <input type="text" class="form-control" value="{{$etu->NiveauEtude}}" name="NiveauEtude">
                                              </div>
                                              <button class="btn btn-danger"  >supprimer </button>

                                </div>
                              </form>
                              <br>
                              @endforeach

                    </div>
        </main>

    </div>
</body>
</html>