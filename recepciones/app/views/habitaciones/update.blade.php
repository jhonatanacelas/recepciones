<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Habitaciones Hotel</title>
    <link href='/css/style.css' type="text/css" rel="stylesheet"> 
     {{ HTML::style('css/bootstrap.css'); }}
</head>

 
<body>
<header >
    <a href="/">  <img src="/usuarios.png" align="left"style="width:42px;height:42px;border:0"> </a>
    <h4   align="right"><a href="/logout">Cerrar sesión</a></h4>
    <h1   align="center" style="color:#6f3a2a;">Actualizar Habitaciones</h1>
 </header>
	     <div style="width:150px;height:200px;" > 
	         <div style="width:150px;height:200px;float:left;margin:0 7px 7px 7px;">
				      <a href="/habitaciones/add"> Agregar Habitacion</a></br>
				      <a href="/habitaciones/show">Listar Habitaciones </a>
			     </div>
        </div>

	<div class="container" style="padding: 0em 0em;margin: 0em 5%;">
		<div class="panel panel-default" style="text-align: left;padding: 1em 0em; margin: 0em 5%;">
		
       <div class="panel-body" style="text-align: left;" >
<form method="POST">
							

			 				<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Número de Habitación </label>
    								<div class="col-sm-8">
    									<div class="form-control">
			 					{{ Form::text ('room_number', $room->room_number) }}
			 					</div>
			 						</div>
			 				</div>
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Piso de la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
    								{{Form::text('floor',$room->floor)}}
    								</div>
    								</div>
			 				</div>
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Tipo de  Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
    								{{Form::select('type', array('Ejecutiva'=>'Ejecutiva', 'Estándar'=>'Estándar'))}}
										</div>
									</div>
							</div>
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Estado de la Habitación </label>
    								<div class="col-sm-8"> 
									<div class="form-control">		
											{{Form::select('state', array('Disponible' =>'Disponible', 'Ocupado'=>'Ocupado', 'Proceso'=>'En proceso de reserva'))}}
                            </div>
									</div>
							</div>
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Camas dobles en la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
											{{Form::text('double_beds',$room->double_beds)}}							
								</div>
									</div>
							</div>		
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Camas sencillas en la Habitación </label>
    								<div class="col-sm-8">  
    									<div class="form-control">
										 {{Form::text('single_beds',$room->single_beds)}}							
										 </div>
                            		</div>
							</div>
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Camas auxiliares en la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
												 {{Form::text('auxiliary_beds',$room->auxiliary_beds)}}							
                           </div>
									</div>
							</div>		
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Precio de la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
								{{Form::text('price',$room->price)}}							
                           				</div>
									</div>
							</div>
									
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">caracteristicas adicionales </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
												{{Form::text('additional_features',$room->additional_features)}}
										</div>

									</div>
							
							<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      								<button type="submit" class="btn btn-default">Actualizar Habitacion</button>
    							</div>
  							</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>