<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'username'  => 'admin',
            'lastname'  => 'Gonzales',
            'usertype'=> 'Administrador',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));

        User::create(array(
            'username'  => 'recepcion',
            'lastname'  => 'Perez',
            'usertype'=> 'Recepcionista',
            'password' => Hash::make('r123') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}



