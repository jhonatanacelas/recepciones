<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
       {{ HTML::style('css/bootstrap.css'); }}
        {{ HTML::style('css/bootstrap-theme.css'); }}
        {{ HTML::style('css/style.css'); }}
        {{ HTML::style('js/bootstrap.js'); }}

       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <title>Clientes Hotel</title>
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
                 <li class="active">
                    <a href="/clientes/show" >
                        Listar Clientes
                    </a>
                </li> 
                 <li>
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

  					<table class="table table-striped">
        					<tr>
            					<th>Nombre</th>
            					<th>Apellido</th>
           					 	<th>Documento identidad</th>
              					<th>Ciudad de residencia</th>
            					<th>Profesion</th>
            					<th>Telefono Fijo</th>
            					<th>Celular</th>
                                <th>Email</th>
                                <th>Actualizar</th>
                                <th>Eliminar</th>
        					</tr>
        				@foreach ($clients as $client)
        					<tr>
            					<td >{{ $client->first_name }}</td>
            					<td>{{ $client->last_name }}</td>
            					<td>{{ $client->identity_document }}</td>
    				        	<td>{{ $client->location_name }}</td>
            					<td>{{ $client->profession }}</td>
            					<td>{{ $client->fixed_telephone }}</td>
            					<td>{{ $client->mobile_phone }}</td>
                                <td>{{Form::label('email', $client->email);}}</td>
            					<td><button class="btn btn-default " >
                                    {{HTML::link('/clientes/update/'.$client->client_id,'Actualizar cliente')}}
                                    </button>
                                </td>
       		     				<td>
                                    <button class="btn btn-default ">
                                    {{HTML::link('clientes/delete/'.$client->client_id,'Borrar cliente')}}
                                    </button>
                                </td>
        					</tr>
       					@endforeach
	           </table>
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