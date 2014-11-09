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
    <h1   align="center" style="color:#6f3a2a;">Realizar Reserva</h1>
 </header>
 <div style="width:150px;height:200px;" > 
  <table>
    <tr>
    <td>Agregar Reserva</td>
    </tr>
    <tr>
    <td><a href="/reservas/show">Listar Reservas</a></td>
    </tr>
  </table>
  </div>
	    
	<div class="container" style="padding: 0em 0em;margin: 0em 5%;">
		<div class="panel panel-default" style="text-aling: left;padding: 1em 0em; margin: 0em 5%;">
		
    	   <div class="panel-body" style="text-aling: left;" >
				<div  style="padding: 0,5em 0em; margin: 0em 35%;">
					<form action="/reservas/finds" method="get">
						<label>Buscar Cliente</label>
							<div class="form-group">
    							<label for="Names" class="col-sm-6 control-label">Identificacion del cliente</label>
    								<div class="col-sm-6">
    									<div class="form-control">
      									<input type="text" name="identity_document"/><br/>
    									</div>
    								</div>
  							</div>

  								<div class="form-group">
    							
    								<div class="col-sm-6">
    									<div class="form-control">
      									 <input type="submit"  value="Buscar Cliente"/>
    									</div>
    								</div>
  							</div>
						
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>