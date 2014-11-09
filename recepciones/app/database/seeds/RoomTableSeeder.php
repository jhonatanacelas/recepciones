<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class RoomTableSeeder extends Seeder {
    public function run(){
        Room::create(array(
            'room_number'  => '101',
            'floor'  => '1',
            'type'=> 'Ejecutiva',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>0,
            'auxiliary_beds'=>0,
            'price'=>55000,
            'additional_features'=>''
        ));
         Room::create(array(
            'room_number'  => '102',
            'floor'  => '1',
            'type'=> 'Estándar',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>1,
            'auxiliary_beds'=>0,
            'price'=>35000,
            'additional_features'=>''
        ));
          Room::create(array(
            'room_number'  => '103',
            'floor'  => '1',
            'type'=> 'Ejecutiva',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>0,
            'auxiliary_beds'=>0,
            'price'=>65000,
            'additional_features'=>''
        ));

          Room::create(array(
            'room_number'  => '201',
            'floor'  => '2',
            'type'=> 'Estándar',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>2,
            'auxiliary_beds'=>0,
            'price'=>45000,
            'additional_features'=>''
        ));
         Room::create(array(
            'room_number'  => '202',
            'floor'  => '2',
            'type'=> 'Estándar',
            'state' => 'Disponible',
            'double_beds'=>0,
            'single_beds'=>3,
            'auxiliary_beds'=>0,
            'price'=>35000,
            'additional_features'=>''
        ));
          
        

          Room::create(array(
            'room_number'  => '301',
            'floor'  => '3',
            'type'=> 'Estándar',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>2,
            'auxiliary_beds'=>0,
            'price'=>45000,
            'additional_features'=>''
        ));
         Room::create(array(
            'room_number'  => '302',
            'floor'  => '3',
            'type'=> 'Estándar',
            'state' => 'Disponible',
            'double_beds'=>0,
            'single_beds'=>3,
            'auxiliary_beds'=>0,
            'price'=>35000,
            'additional_features'=>''
        ));
          Room::create(array(
            'room_number'  => '303',
            'floor'  => '3',
            'type'=> 'Ejecutiva',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>0,
            'auxiliary_beds'=>0,
            'price'=>65000,
            'additional_features'=>''
        ));
            Room::create(array(
            'room_number'  => '401',
            'floor'  => '4',
            'type'=> 'Ejecutiva',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>0,
            'auxiliary_beds'=>0,
            'price'=>55000,
            'additional_features'=>''
        ));
         Room::create(array(
            'room_number'  => '402',
            'floor'  => '4',
            'type'=> 'Estándar',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>1,
            'auxiliary_beds'=>0,
            'price'=>35000,
            'additional_features'=>''
        ));
          Room::create(array(
            'room_number'  => '403',
            'floor'  => '4',
            'type'=> 'Ejecutiva',
            'state' => 'Disponible',
            'double_beds'=>1,
            'single_beds'=>0,
            'auxiliary_beds'=>0,
            'price'=>65000,
            'additional_features'=>''
        ));
        
    }
}