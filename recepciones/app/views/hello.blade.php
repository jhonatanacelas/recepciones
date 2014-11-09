<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modulos Hotel</title>
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
 </header> 
 <div id="linea"></div>

	
	
    <div class="container" style="text-align: center;" >
        <h1 id='titulo2'style="text-align: center; color:#6f3a2a;">Modulos del sistema de Administracion Hoteles Santa Elena </h1> 
            <div class="panel panel-default" style="padding: 0,5em 2em; margin: 5em 20%;">

                <div class="panel-body" >
                    <table> 
	                   <tr> 
	 	                <td width=200><a href="/reservas/find"><img src="/reservas.png" class='icons-menu' ></a> <p>Reservas</p></td> 
                        <td width=200><a href="/usuarios/show"><img src="/usuarios.png" class='icons-menu' ></a><p>Usuarios</p> </td> 
                        <td width=200><a href="/inventarios/show"><img src="/inventario.png" class='icons-menu' ></a><p>Inventarios</p> </td> 
   	                    </tr>
	                   <tr>
		                  <td width=200><a href="/habitaciones/show"><img src="/habitaciones.png" class='icons-menu' ></a> <p>Habitaciones</p></td> 
                          <td width=200><a href="/facturacion/show"><img src="/facturacion.png"  class='icons-menu' ></a><p>Facturacion</p> </td> 
                          <td width=200><a href="/clientes/show"><img src="/clientes.png"  class='icons-menu' ></a><p>Clientes</p> </td> 
    	
	                    </tr> 
                    </table>

                 </div>
            </div>
    </div>

    <!-- Pie de Pagina -->
        <div class="footer">
            Hoteles Santa Elena Todos los derechos reservados.
        </div>
        <!-- Fin pie de pagina  -->

</body>
</html>