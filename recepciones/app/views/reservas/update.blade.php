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
	<div style="padding: 0,5em 0em; margin: 0em 35%;">
		<h1>Actualizar datos de Reserva</h1>
	</div>
	<div  style="padding: 0,5em 0em; margin: 0em 35%;">
	<h1>Actualizar Reserva</h1>
	{{Form::open()}}

					  <div class="form-group" style=" float: left; width: 48%;">
                        <label>Destino:</label>
                          <div >
                            <div class="form-control">
                            	{{ Form::text ('destination', $reservation->destination) }} <br />
                            	</div>
                          </div>
                        </div>

			  <div class="form-group" style=" float: left; width: 48%;">
                        <label>Procedencia<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                            	{{ Form::text ('source', $reservation->source) }} <br />
                            </div>
                         </div>
                 </div>
	
					<div class="form-group" style=" float: left; width: 48%;">
                        <label>Extender Reserva<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
								{{ Form::select ('extend_reservation', array('Si'=>'Si', 'No'=>'No'),$reservation->extend_reservation) }} <br />
							</div>
					</div>
				</div>


	 
	  <div class="form-group" style=" float: left; width: 48%;">
                        <label>Sacar maletas antes de la 1 de la tarde:<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
							 {{ Form::select ('move_bags', array('Si'=>'Si', 'No'=>'No'), $reservation->move_bags) }} <br />
							</div>
					</div>
				</div>

					 <div class="form-group" style=" float: left; width: 48%;">
                        <label>Número de personas por habitación: <span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
									{{ Form::text ('people_amount', $reservation->people_amount) }} <br />
	
							</div>
						</div>
					</div>

	 <div class="form-group" style=" float: left; width: 48%;">
                        <label>Seleccionar Habitacion<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
	{{ Form::select('rooms', $dRooms, array_values($dRooms)[0]),Input::old('rooms')}} <br />
	
						</div>
				</div>
		</div>
	
			<div class="form-group" style=" float: left; width: 48%;">
                        <label>Fecha de Inicio <span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">

	 {{ Form::date ('start_date', $reservation->start_date) }} 
	 						</div>
						</div>
				</div>
	Fecha de Salida: 
		<div class="form-group" style=" float: left; width: 48%;">
                        <label>Fecha de Salida <span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
						{{Form::date('end_date',$reservation->end_date)}}
						</div>
					</div>
				</div>
	 <div class="form-group" style=" float: left; width: 48%;">
                        <label>Abono <span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
						{{ Form::text ('advance', $reservation->advance) }} <br />
						</div>
				</div>
			</div>
	So
				<div class="form-group" style=" float: left; width: 48%;">
                        <label>Sobrecosto </label>
                          <div >
                            <div class="form-control">
					{{ Form::text ('overcharge', $reservation->overcharge) }} <br />
						</div>
					</div>
				</div>

	
	<div class="form-group" style=" float: left; width: 48%;">
                        <label>Vehículo <span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
				{{ Form::checkbox ('vehicle', $reservation->vehicle) }} <br />
					</div>
				</div>
			</div>
	
	<div class="form-group" style=" float: left; width: 48%;">
                        <label>Características Adicionales</label>
                          <div >
                            <div class="form-control">
	{{ Form::text ('additional_features', $reservation->additional_features) }} <br />
	</div>
</div>
</div>
	<div class="form-group" style=" float: left; width: 48%;">
                        
                            <div class="form-control">
	{{Form::submit('Actualizar habitacion')}}
	</div>
</div>
	{{Form::close()}}
	</div>
</body>

</html>