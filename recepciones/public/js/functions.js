function delete() {
    var x;
    if (confirm("Press a button!") == true) {
     x={{HTML::link('clientes/delete/'.$client->client_id,'Borrar cliente')}};
    } else {
    	
    }
    document.getElementById("demo").innerHTML = x;
}
