<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservas Hotel</title>
    {{ HTML::style('css/bootstrap.css'); }}
       <link href='/css/style.css' type="text/css" rel="stylesheet"> 
</head>


<body>
<header >
    <a href="/">  <img src="/usuarios.png" align="left"style="width:42px;height:42px;border:0"> </a>
    <h4   align="right"><a href="/logout">Cerrar sesión</a></h4>
 </header>
	<div style="width:150px;height:200px;" > 
		<table>
			<tr>
				<td><a href="/reservas/find"> Agregar Reserva</a></td>
			</tr>
			<tr>
				<td>Listar Reservas </td>
			</tr>
		</table>
	</div>
	<div  style="padding: 1em 2em; margin: 1em 25%;">
	<h1   align="center" style="color:#6f3a2a;">Lista de Reservas</h1>
  
  <table class="table table-striped">
    <tr>
        <th>Cliente</th>
        <th>Habitación</th>
        <th>Número de Personas</th>
        <th>Abono</th>
        <th>Inicio</th>
        <th>Salida</th>
    </tr>
    @if ($reservations!=null){
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $reservation->identity_document }}</td>
            <td>{{ $reservation->room_number }}</td>
            <td>{{ $reservation->people_amount }}</td>
            <td>{{ $reservation->advance }}</td>
            <td>{{ $reservation->start_date }}</td>
            <td>{{ $reservation->end_date }}</td>
            <td><button class="btn btn-primary btn-lg"  data-toggle="modal" data-target=".bs-example-modal-lg">
            {{HTML::link('reservas/update/'.$reservation->client_id,'Actualizar Reserva')}}
            </button>
            </td>
            <td><button class="btn btn-primary btn-lg"  data-toggle="modal" data-target=".bs-example-modal-lg">
            {{HTML::link('reservas/delete/'.$reservation->client_id,'Borrar Reserva')}}
            </button></td>

        </tr>
        @endforeach
    }@else{
        <td>No se han hecho reservas.</td>
    }@endif
	 </table>
	</div>
</body>

</html>