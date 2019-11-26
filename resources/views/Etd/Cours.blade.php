@extends('layouts.etdapp')




@section('content')


<div class="wrapper">
		<section class="panel panel-primary">
			<div class="panel-heading">
            <h3>	Les Cours existants </h3>
            <br>
            </div>
            
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<th>Nom</th>
						<th>Date d'insertion </th>
						<th>Action</th>
					</thead>

					<tbody>
                        @foreach ($Cours as $crs)
                            
                        
						<tr>
							<td>{{ $crs->Nom }}</td>
							<td>{{ $crs->date }}</td>
							<td>
                            <a href="{{$crs->Cours}}"
                            download="{{$crs->Cours}}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-download">
									télecharger
								</i>
								</button>
							</a>
							</td>
                        </tr>
                        @endforeach
					</tbody>
				</table>
			</div>
		</section>
	</div>


@stop