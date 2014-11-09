<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes Hotel</title>
     <link href='/css/style.css' type="text/css" rel="stylesheet"> 
     {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/bootstrap-theme.css'); }}
        {{ HTML::style('css/style.css'); }}
        {{ HTML::style('js/bootstrap.js'); }}
</head>


<body>


<header >
    <a href="/">  <img src="/usuarios.png" align="left" style="width:35px;height:35px;border:0"> </a>
   <h4   align="right"><a href="/logout">Cerrar sesión</a></h4>
    <h1   align="center" style="color:#6f3a2a;">Clientes</h1>

 </header> 
 <div id="linea"></div>

    <div class="container" style="padding: 0em 0em;margin: 0em 5%;">
        <div class="panel panel-default" style="text-aling: left;padding: 1em 0em; margin: 0em 5%;">
            <div class="panel-body" style="text-aling: left;" >


                <div class="tabbable tabs-left">
            <!--lista panel vertical-->
            <ul class="nav nav-tabs">
                 <li >
                    <a href="/clientes/show" >
                        Listar Clientes
                    </a>
                </li> 
                 <li class="active">
                    <a href="/clientes/add" >
                        Agregar Clientes
                    </a>
                </li> 
            </ul>
            <!--contenido -->
            <div class="tab-content">
                <!--editores y crear una cartilla-->
                <div class="tab-pane active" id="panel_crear_cartilla">
                    <br>
              
						<form method="POST">

							<div class="form-group">
    							<label for="Names" class="col-sm-4 control-label">Nombres</label>
    								<div class="col-sm-8">
      									<input type="text" class="form-control" id="Names" name="first_name" placeholder="ej. Pepito ">
                        @if ($errors->has('first_name')) <p class="help-block">{{ $errors->first('first_name') }}</p> @endif
    								</div>
  							</div>

  							<div class="form-group">
    							<label for="Last_Names" class="col-sm-4 control-label">Apellidos</label>
    								<div class="col-sm-8">
      									<input type="text" class="form-control" id="Last_Names" name="last_name" placeholder="ej.  Perez">
                         @if ($errors->has('last_name')) <p class="help-block">{{ $errors->first('last_name') }}</p> @endif
    								</div>
  							</div>

							<div class="form-group">
    							<label for="document" class="col-sm-4 control-label">Documento de Identidad </label>
									<div class="col-sm-8">
      									<input type="number" class="form-control" id="document" name="identity_document" placeholder="ej. 104900---">
                         @if ($errors->has('identity_document')) <p class="help-block">{{ $errors->first('identity_document') }}</p> @endif
      								</div>
  							</div>

							<div class="form-group">
    							<label for="birth" class="col-sm-4 control-label">Fecha de nacimiento</label> 
		    						<div class="col-sm-8">
      									<input type="date" class="form-control" id="birth" name="birth_date" placeholder="ej. 25/12/1990">
                         @if ($errors->has('birth_date')) <p class="help-block">{{ $errors->first('birth_date') }}</p> @endif
      								</div>
      						</div>	
							<div class="form-group">
    							<label for="nacionalidad" class="col-sm-4 control-label">Nacionalidad</label>
    								<div class="col-sm-8">
                    <div class="form-control">
                    
                    @if(count($pais_selector)>0)
                     
                    {{Form::select('pais', $pais_selector, array_values($pais_selector)[0]),Input::old('pais')}}
                    @endif
                     @if ($errors->has('nationality')) <p class="help-block">{{ $errors->first('nationality') }}</p> @endif
                    </div>
									</div>	
							</div>		
							<div class="form-group">
    							<label for="profesion" class="col-sm-4 control-label">profession</label> 
		    						<div class="col-sm-8">
      									<input type="txt" class="form-control" id="profesion" name="profession" plaholder="ej. Docente">
      								</div>
      						</div>
							<div class="form-group">
    							<label for="residencia" class="col-sm-4 control-label">Ciudad de Residencia</label>
    								<div class="col-sm-8">
									    <div class="form-control">
                       	@if(count($location_selector)>0)
                        {{Form::select('location', $location_selector, array_values($location_selector)[0]),Input::old('location')}}
                        @endif
                         @if ($errors->has('city_residence')) <p class="help-block">{{ $errors->first('city_residence') }}</p> @endif
                      </div>  
									</div>	
							</div>
							
							<div class="form-group">
    							<label for="telephone" class="col-sm-4 control-label">Telefono fijo</label> 
		    						<div class="col-sm-8">
      									<input type="txt" class="form-control" id="telephone" name="fixed_telephone"/>
                         @if ($errors->has('fixed_telephone')) <p class="help-block">{{ $errors->first('fixed_telephone') }}</p> @endif
      								</div>
      						</div>
							
							<div class="form-group">
    							<label for="email" class="col-sm-4 control-label">Correo electronico</label> 
		    						<div class="col-sm-8">
      									<input type="email" class="form-control" id="email" type="text" name="email"/>
                         @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
      								</div>
      						</div>	

							<div class="form-group">
    							<label for="telephone" class="col-sm-4 control-label">Telefono movil</label> 
		    						<div class="col-sm-8">
      									<input type="number" class="form-control" id="telephone" name="mobile_phone"/>
                         @if ($errors->has('mobile_phone')) <p class="help-block">{{ $errors->first('mobile_phone') }}</p> @endif
      								</div>
      						</div>

      						<div class="form-group">
    							<div class="col-sm-offset-2 col-sm-10">
      							<button type="submit" class="btn btn-default">Ingresar Cliente</button>
    							</div>
  							</div>
						</form>
	  			</div>
            </div>
        </div>

        <!-- cerrar tab -->
                </div>
            </div>
        </div>

        <br>
<br>
<br>

 <!-- Pie de Pagina -->
        <div class="footer">
            Hoteles Santa Elena Todos los derechos reservados.
        </div>
        <!-- Fin pie de pagina  -->
         <script src="https://code.jquery.com/jquery.js"></script>
        {{ HTML::script('js/bootstrap.js'); }}
</body>

</html>