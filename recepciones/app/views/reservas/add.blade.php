<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       {{ HTML::style('css/bootstrap.css'); }}
       <link href='/css/style.css' type="text/css" rel="stylesheet"> 

       <title>Reservas Hotel</title>
</head>


<body>
<header >
   <a href="/">  <img src="/usuarios.png" align="left"style="width:42px;height:42px;border:0"> </a>
    <h4   align="right"><a href="/logout">Cerrar sesión</a></h4>
 </header>
	    <div style="width:150px;height:200px;" > 
             <div style="width:150px;height:200px;float:left;margin:0 7px 7px 7px;">
                      <a href="/reservas/find"> Agregar Reservas</a></br>
                      <a href="/reservas/show">Listar Reservas </a>
                 </div>
        </div>

 <div class="container" style="text-align: center;" >
                         <h2 style="color: #6f3a2a;">Informacion del Cliente</h2>
            <div class="panel panel-default" style="padding: 0em 0em; margin: 0em 5%;">

                <div class="panel-body" style="text-aling: left;" >


	<div class="form-group" style=" float: left; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Nombres</label>
        <div class="col-sm-5">
            <div class="form-control">
                {{$foundClient->first_name}}
            </div>
        </div>
    </div>
     <div class="form-group" style=" float: right; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Documento de Identidad</label>
        <div class="col-sm-5">
            <div class="form-control">
                {{ Form::label ('identity_document', $foundClient->identity_document) }}
            </div>
        </div>
    </div>
    <div class="form-group" style=" float: left; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Apellidos</label>
        <div class="col-sm-5">
            <div class="form-control">
               <label>{{$foundClient->last_name }}</label>
            </div>
        </div>
    </div>
    <div class="form-group" style=" float: right; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Fecha de Nacimiento</label>
        <div class="col-sm-5">
            <div class="form-control">
                {{ Form::label ('birth_date', $foundClient->birth_date) }}
            </div>
        </div>
    </div>

    <div class="form-group" style=" float: left; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Nacionalidad</label>
        <div class="col-sm-5">
            <div class="form-control">
             
             {{$foundClient->location_name }}
            </div>
        </div>
    </div>

    <div class="form-group" style=" float: left; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Ciudad de Residencia</label>
        <div class="col-sm-5">
            <div class="form-control">
               {{$foundClient->location_name }}
            </div>
        </div>
    </div>

    <div class="form-group" style=" float: right; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">Profesión</label>
        <div class="col-sm-5">
            <div class="form-control">
                {{ Form::label ('profession', $foundClient->profession) }}
            </div>
        </div>
    </div>

    <div class="form-group" style=" float: left; width: 48%;">
        <label for="Names" class="col-sm-2 control-label">E-Mail</label>
        <div class="col-sm-5">
            <div class="form-control">
                {{ Form::label ('email', $foundClient->email) }}
            </div>
        </div>
    </div>

   
    

        </div>

     </div>
 </div>
                

	<div class="container" style="padding: 0,5em 0em; margin: 0em 11%">
        <div class="panel panel-default" style="text-aling: left;padding: 1em 0em; margin: 0em 5%;">
        <h2  style="color: #6f3a2a;">Historial de reservas del cliente</h2>
       <div class="panel-body" style="text-aling: left;" >
                    <table class="table table-striped">
    <tr>
        <th>Fecha de Inicio</th>
        <th>Fecha de Salida</th>
        <th>Habitación Reservada</th>
        <th>Adicionales</th>
        <th>Costo por Día</th>

    </tr>
    @if ($reservations!=null){
	    @foreach ($reservations as $reservation)
	    <tr>
	        <td>{{ $reservation->start_date }}</td>
          <td>{{ $reservation->end_date }}</td>
          <td>{{ $reservation->room_number }}</td>
	        <td>{{ $reservation->additional_features }}</td>
          <td>{{ $reservation->price }}</td>
	        <td>-{{HTML::link('reservas/update/'.$reservation->reservation_id,'Actualizar Reserva')}}</td>
	        <td>-{{HTML::link('reservas/delete/'.$reservation->reservation_id,'Borrar Reserva')}}</td>

	    </tr>
	    @endforeach
	}@else{
		<td>"No se han hecho reservas.</td>
	}@endif

	 </table>
	</div>
</div>
</div>

    

			  <div class="form-group" style=" float: right; width: 48%;">
                       
                          <div >
                            <div class="form-control">
                              {{HTML::link('/reservas/form/'.$foundClient->client_id,'Agregar Reserva')}}
                            </select>
                            </div>
                          </div>
                    </div>
			
		
     


</body>

</html>