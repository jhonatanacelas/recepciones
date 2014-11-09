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

	<div style="padding: 0,5em 0em; margin: 0em 35%;text-aling: center;">
		<h1 style="color:#6f3a2a;">Registrar Reserva</h1>
	</div>

	            <div class="container" style="text-align: center;" >
                         
            <div class="panel panel-default" style="padding: 0em 0em; margin: 0em 5%;">

                <div class="panel-body" style="text-aling: left;" >


		<form method="POST">
      <div  style="padding: 0,5em 0em; margin: 0em 35%;">
      <div class="form-group" style=" float: left; width: 48%;">
        <label>Destino</label>
        <div >
          <input type="text" name="destination"/><br/>
        </div>
      </div>
                       <div class="form-group" style=" float: left; width: 48%;">
                        <label>Procedencia</label>
                          <div >
                            
                          <input type="text" name="source"/>
                          
                          </div>
                    </div>
  
    </div>
			
 
              <div class="form-group" style="display:none;">
                  <label>Id Cliente<span class="requerido">*</span></label>
                  <div >
                            <div class="form-control">
                           <input type="number" name="client_id" value='{{$idCliente}}'/>
                            </div>
                          </div>
                    </div>

              <div class="form-group" style=" float: left; width: 48%;">
                        <label>Extender Reserva<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                            <select name="extend_reservation">
                                <option value="yes">Si</option>
                                <option value="no">No</option>
                            </select>
                            </div>
                          </div>
              </div>

                   <div class="form-group" style=" float: left; width: 48%;">
                        <label>Sacar Maletas Antes de la 1 de la Tarde?<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                            <select name="move_bags">
                                 <option value="yes">Si</option>
                                    <option value="no">No</option>
                            </select>
                            </div>
                          </div>
                    </div>

                <div class="form-group" style=" float: left; width: 48%;">
                        <label>Nùmero de Personas por Habitaciòn<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                           <input type="number" name="people_amount"/>
                            </div>
                          </div>
                    </div>
			     <div class="form-group" style=" float: left; width: 48%;">
                        <label>Seleccionar Habitación <span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                        @if(count($dRooms)>0)
                     
                        {{Form::select('rooms', $dRooms, array_values($dRooms)[0]),Input::old('rooms')}}
                          @endif
                            </select>
                            </div>
                          </div>
                    </div>
	          <div class="form-group" style=" float: left; width: 48%;">
                        <label>Fecha de Inicio<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                           <input type="date" name="start_date"/>
                            </select>
                            </div>
                          </div>
                    </div>
		                   <div class="form-group" style=" float: left; width: 48%;">
                        <label>Fecha Final<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                           <input type="date" name="end_date"/>
                            </select>
                            </div>
                          </div>
                    </div>
			
                    <div class="form-group" style=" float: left; width: 48%;">
                        <label>Abono<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                           <input type="text" name="advance"/><br/>
                            </select>
                            </div>
                          </div>
                    </div>
                      <div class="form-group" style=" float: left; width: 48%;">
                        <label>Sobrecosto</label>
                          <div >
                            <div class="form-control">
                         <input type="text" name="overcharge"/><br/>
                            </select>
                            </div>
                          </div>
                    </div>
			
            <div class="form-group" style=" float: left; width: 48%;">
                        <label>Vehículo<span class="requerido">*</span></label>
                          <div >
                            <div class="form-control">
                         <input type="checkbox" value="vehicle" name="vehicle"/>
                            </select>
                            </div>
                          </div>
                    </div>
		         <div class="form-group" style=" float: left; width: 48%;">
                        <label>Características Adicionales</label>
                          <div >
                            <div class="form-control">
                         <input type="text" name="additional_features"/>
                            </select>
                            </div>
                          </div>
                    </div>

			  <div class="form-group" style=" float: right; width: 48%;">
                       
                          <div >
                            <div class="form-control">
                              <button type="select" class="btn btn-default">Finalizar Reserva</button>
                            </select>
                            </div>
                          </div>
                    </div>
			
		</form>
        </div>
</div>
</div>


</body>

</html>