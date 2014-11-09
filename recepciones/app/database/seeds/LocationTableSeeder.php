<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class LocationTableSeeder extends Seeder {
    public function run(){
        Location::create(array(
            'location_name'  => 'Bogota',
            'location_type'  => '3'

            ));

         Location::create(array(
            'location_name'  => 'Tunja',
            'location_type'  => '3'

            ));

        Location::create(array(
            'location_name'  => 'Cali',
            'location_type'  => '3'

            ));

        Location::create(array(
            'location_name'  => 'Barranquilla',
            'location_type'  => '3'

            ));

        Location::create(array(
            'location_name'  => 'Cartagena',
            'location_type'  => '3'

            ));           
        Location::create(array(
            'location_name'  => 'Santa Marta',
            'location_type'  => '3'

            ));

         Location::create(array(
            'location_name'  => 'Bucaramanga',
            'location_type'  => '3'

            ));

        Location::create(array(
            'location_name'  => 'Cucuta',
            'location_type'  => '3'

            ));

        Location::create(array(
            'location_name'  => 'Villavicencio',
            'location_type'  => '3'

            ));

        Location::create(array(
            'location_name'  => 'Medellin',
            'location_type'  => '3'

            )); 

        Location::create(array(
            'location_name'  => 'Colombia',
            'location_type'  => '1'

            ));

         Location::create(array(
            'location_name'  => 'Chile',
            'location_type'  => '1'

            ));

        Location::create(array(
            'location_name'  => 'Brasil',
            'location_type'  => '1'

            ));

        Location::create(array(
            'location_name'  => 'Peru',
            'location_type'  => '1'

            ));

        Location::create(array(
            'location_name'  => 'Venezuela',
            'location_type'  => '1'

            )); 

    }
}
