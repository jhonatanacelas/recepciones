<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes Hotel</title>
    <link href='/css/style.css' type="text/css" rel="stylesheet"> 
     {{ HTML::style('css/bootstrap.css'); }}
</head>

 
<body>
<header >
    <a href="/">  <img src="/usuarios.png" align="left"style="width:42px;height:42px;border:0"> </a>
    <h4   align="right"><a href="/logout">Cerrar sesión</a></h4>
 </header>
	
	

	<div style="width:150px;height:200px;float:left;margin:0 7px 7px 7px;">
				<a href="/clientes/add"> Agregar Cliente</a></br>
				<a href="/clientes/show">Listar Cliente </a>
			</div>
	 <div class="container" style="text-align: center;" >
                    <h2 style=" color: #6f3a2a;">Actualizar Cliente</h2>
    			
            <div class="panel panel-default" style="padding: 0em 0em; margin: 0em 5%;">

                <div class="panel-body" style="text-aling: left;" >
       
						<form method="POST">

							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Nombres</label>
    								<div class="col-sm-8">
    									<div class="form-control">
      								 		{{ Form::text ('first_name', $client->first_name) }}
      								  	</div>
    								</div>
  							</div>

  							<div class="form-group">
    							<label for="Last_Names" class="col-sm-4 control-label">Apellidos</label>
    								<div class="col-sm-8">
    								<div class="form-control">
      									 {{ Form::text ('last_name', $client->last_name) }}
      									 </div>
      								</div>
  							</div>

							<div class="form-group">
    							<label for="document" class="col-sm-4 control-label">Documento de Identidad </label>
									<div class="col-sm-8">
									<div class="form-control">
      									{{ Form::text ('identity_document', $client->identity_document) }}
      								</div>
      								</div>
  							</div>

							<div class="form-group">
    							<label for="birth" class="col-sm-4 control-label">Fecha de nacimiento</label> 
		    						<div class="col-sm-8">
      									<div class="form-control">
      									{{ Form::date ('birth_date', $client->birth_date) }} 
      									</div>
      								</div>
      						</div>	
							<div class="form-group">
                  <label for="nacionalidad" class="col-sm-4 control-label">Nacionalidad</label>
                    <div class="col-sm-8">
                    <div class="form-control">
                    
                    @if(count($pais_selector)>0)
                     
                    {{Form::select('pais', $pais_selector, array_values($pais_selector)[0]),Input::old('pais')}}
                    @endif
                  
                    </div>
                  </div>  
              </div>	
							<div class="form-group">
    							<label for="profesion" class="col-sm-4 control-label">profession</label> 
		    						<div class="col-sm-8">
      									<div class="form-control">
      									{{ Form::text ('profession', $client->profession) }}
      									</div>
      								</div>
      						</div>
							<div class="form-group">
                  <label for="residencia" class="col-sm-4 control-label">Ciudad de Residencia</label>
                    <div class="col-sm-8">
                      <div class="form-control">
                        @if(count($location_selector)>0)
                        {{Form::select('location', $location_selector, array_values($location_selector)[0]),Input::old('location')}}
                        @endif
                      </div>  
                  </div>  
              </div>

							
							<div class="form-group">
    							<label for="telephone" class="col-sm-4 control-label">Telefono fijo</label> 
		    						<div class="col-sm-8">
      									<div class="form-control">
      									{{ Form::text ('fixed_telephone', $client->fixed_telephone) }}
      									</div>
      								</div>
      						</div>
							
							<div class="form-group">
    							<label for="email" class="col-sm-4 control-label">Correo electronico</label> 
		    						<div class="col-sm-8">
      									<div class="form-control">
      									{{Form::text('email',$client->email)}}
      									<div class="form-control">
      								</div>
      						</div>	

							<div class="form-group">
    							<label for="telephone" class="col-sm-4 control-label">Telefono movil</label> 
		    						<div class="col-sm-8">
		    						<div class="form-control">
      									{{ Form::text ('mobile_phone', $client->mobile_phone) }}
      									<div class="form-control">
      								</div>
      						</div>

      						<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      							<button type="submit" class="btn btn-default">Actualizar cliente</button>
    							</div>
  							</div>
						</form>
	  			</div>
            </div>
        </div>
         <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('js/bootstrap.js'); }}



	</div>
</body>

</html>