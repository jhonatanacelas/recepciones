
	<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       {{ HTML::style('css/bootstrap.css'); }}
       <link href='/css/style.css' type="text/css" rel="stylesheet"> 

       <title>Habitaciones Hotel</title>
</head>


<body>
<header >
   <a href="/">  <img src="/usuarios.png" align="left"style="width:42px;height:42px;border:0"> </a>
    <h4   align="right"><a href="/logout">Cerrar sesión</a></h4>
    <h1   align="center" style="color:#6f3a2a;">Habitaciones</h1>
 </header>
	     <div style="width:150px;height:200px;" > 
	         <div style="width:150px;height:200px;float:left;margin:0 7px 7px 7px;">
				      <a href="/habitaciones/add"> Agregar Habitacion</a></br>
				      <a href="/habitaciones/show">Listar Habitaciones </a>
			     </div>
        </div>

	<div class="container" style="padding: 0em 0em;margin: 0em 5%;">
		<div class="panel panel-default" style="text-aling: left;padding: 1em 0em; margin: 0em 5%;">
		
       <div class="panel-body" style="text-aling: left;" >
  					<table class="table table-striped">
    					<tr>
        					<th>Numero Habitacion</th>
        					<th>Piso</th>
       					 	<th>Tipo Habitacion</th>
          					<th>Estado Habitacion</th>
        					<th>Numero de camas Dobles</th>
        					<th>Numero de camas Sencillas</th>
        					<th>Camas auxiliares</th>
        					<th>Precio de la habitacion</th>
        					<th>Caracteristicas Adicionales</th>
    					</tr>
    				@foreach ($rooms as $room)
    					<tr>
        					<td >{{ $room->room_number }}</td>
        					<td>{{ $room->floor }}</td>
        					<td>{{ $room->type }}</td>
				        	<td>{{ $room->state }}</td>
        					<td>{{ $room->double_beds}}</td>
        					<td>{{ $room->single_beds}}</td>
        					<td>{{ $room->auxiliary_beds }}</td>
                  			<th>{{$room->price}}</th>
                  			<th>{{$room->additional_features}}</th>
        					<td><button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">
                     {{HTML::link('/habitaciones/update/'.$room->room_id,'Actualizar habitacion')}}
                   
                       
                      </button>
                  </td>
   		     				<td>
                  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">
                      {{HTML::link('habitaciones/delete/'.$room->room_id,'Borrar habitacion')}}
                    </button>
                  </td>
    					</tr>
   					@endforeach

	 </table>
	</div>
</div>
</div>
	
	
	
</body>

</html>