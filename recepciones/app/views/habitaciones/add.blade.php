
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
 </header>
  			<div style="width:150px;height:200px; float:left;" > 
	        		<div style="width:150px;height:200px;float:left;margin:0 7px 7px 7px;">
				      <a href="/habitaciones/add"> Agregar Habitacion</a></br>
				      <a href="/habitaciones/show">Listar Habitaciones </a>
			     	</div>
        	</div>
	
		
	 <div class="container" style="text-align: center;" >
                    <h2 style="color: #6f3a2a;">Registrar Habitacion </h2>
    			
            <div class="panel panel-default" style="padding: 0em 0em; margin: 0em 5%;">

                <div class="panel-body" style="text-aling:left;" >
       
		<form method="POST">

							<div class="form-group"  style=" float: left;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Número de Habitación </label>
    								<div class="col-sm-8">    									
			 								<input type="text" name="room_number"/>
			 						</div>
			 				</div>
			 				<div class="form-group" style=" float: right;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Camas dobles en la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
										 <input type="text" name="double_beds"/>
									</div>
									</div>
							</div>
							<div class="form-group" style=" float: left;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Piso de la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
    								<input type="text" name="floor"/>
    								</div>

    								</div>
			 				</div>
			 				<div class="form-group" style=" float: right;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Camas sencillas en la Habitación </label>
    								<div class="col-sm-8">  
    									<div class="form-control">
										 <input type="text" name="single_beds"/>
										 </div>
									</div>
							</div>
							<div class="form-group" style=" float: left;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Tipo de  Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
										<select name="type">
											<option value="Ejecutiva">Ejecutiva</option>
											<option value="Estándar">Estándar</option>
										</select>
										</div>
									</div>
							</div>
							<div class="form-group" style=" float: right;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Camas auxiliares en la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
										<input type="text" name="auxiliary_beds"/>
										</div>
									</div>
							</div>
							<div class="form-group" style=" float: left;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Estado de la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
										<select name="state">
											<option value="Disponible">Disponible</option>
											<option value="Ocupada">Ocupada</option>
											<option value="Proceso">En proceso de Reserva</option>
										</select>
										</div>
									</div>
							</div>
									
							
									
							<div class="form-group" style=" float: right;width: 48%;">
    							<label for="Names" class="col-sm-4 control-label">Precio de la Habitación </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
										<input type="text" name="price"/>
									</div>
									</div>
							</div>
									
							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Caracteristicas adicionales </label>
    								<div class="col-sm-8"> 
    									<div class="form-control">
											<input type="text" name="additional_features"/><br/>
											</div>
									</div>
							</div>
							<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
    								<div class="form-control">
      								<button type="submit" class="btn btn-default">Ingresar Habitacion</button>
      								</div>
    							</div>
  							</div>
		</form>
	</div> 
	</div>
	</div>

</body>

</html>