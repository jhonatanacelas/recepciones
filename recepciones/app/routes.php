<?php

// Nos mostrará el formulario de login.
Route::get('login', 'AuthController@showLogin');

// Validamos los datos de inicio de sesión.
Route::post('login', 'AuthController@postLogin');

// Nos indica que las rutas que están dentro de él sólo serán mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function()
{
    // Esta será nuestra ruta de bienvenida.
    Route::get('/', function()
    {
        return View::make('hello');
    });
    // Esta ruta nos servirá para cerrar sesión.
    Route::get('logout', 'AuthController@logOut');

   
    Route::get('/reservas/show', 'ReservationController@showReservation');
    Route::get('/reservas/find', 'ReservationController@findClient');
    Route::get('/reservas/finds', 'ReservationController@get_findClient');
    Route::get('/reservas/form/{id}', 'ReservationController@addForm');
    Route::post('/reservas/form/{id}', 'ReservationController@postAddForm');
    Route::get('/reservas/add', 'ReservationController@addReservation');
    Route::post('/reservas/add', 'ReservationController@postAddReservation');
    Route::get('/reservas/delete/{id}', 'ReservationController@deleteReservation');
    Route::get('/reservas/update', 'ReservationController@updateReservation');
    Route::get('/reservas/update/{id}', 'ReservationController@get_updateReservation');
    Route::post('/reservas/update/{id}', 'ReservationController@post_updateReservation');
    Route::get('/clientes/show/{id}','Clientcontroller@showClient');
    Route::get('/usuarios/show', 'UsuariosController@showUsuarios');
    Route::get('/inventarios/show', 'InventarioController@showInventario');
    Route::get('/habitaciones/show', 'RoomController@showRoom');
    Route::get('/habitaciones/add', 'RoomController@addRoom');
    Route::get('/habitaciones/update', 'RoomController@updateRoom');
    Route::post('/habitaciones/add', 'RoomController@post_addRoom');
    Route::get('/habitaciones/delete/{id}', 'RoomController@deleteRoom');
    Route::get('/habitaciones/update', 'RoomController@updateRoom');
    Route::get('/habitaciones/update/{id}', 'RoomController@get_updateRoom');
    Route::post('/habitaciones/update/{id}', 'RoomController@post_updateRoom');
    Route::get('/facturacion/show', 'FacturacionController@showfacturacion');
    Route::get('/clientes/show', 'Clientcontroller@showClient');
    Route::get('/clientes/add', 'ClientController@addClient');
    Route::post('/clientes/add', 'ClientController@post_addClient');
    Route::get('/clientes/delete/{id}', 'ClientController@deleteClient');
    Route::get('/clientes/update/{id}', 'ClientController@updateClient');
    Route::post('/clientes/update/{id}', 'ClientController@post_updateClient');

    
});