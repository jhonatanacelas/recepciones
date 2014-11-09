<?php

/**
* Agregamos un usuario nuevo a la base de datos.
*/
class ClientTableSeeder extends Seeder {
    public function run(){
        Client::create(array(
            'first_name'  => 'Fernando',
            'last_name'  => 'Anzola',
            'identity_document'=> '1049636770',
            'birth_date' => '1993-12-25',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-1231',
            'mobile_phone'=>'3208916758',
            'email'=>'mail@mail.com',
            'city_residence'=>9,
            'nationality'=>12,
            'user_id'=>1

        ));


	 Client::create(array(
            'first_name'  => 'Diego',
            'last_name'  => 'Maldonado',
            'identity_document'=> '1049345770',
            'birth_date' => '1994-2-20',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-1671',
            'mobile_phone'=>'3208998873',
            'email'=>'diego@mail.com',
            'city_residence'=>3,
            'nationality'=>11,
            'user_id'=>1

        ));

         Client::create(array(
            'first_name'  => 'Jhonatan',
            'last_name'  => 'Acelas',
            'identity_document'=> '1053425789',
            'birth_date' => '1994-6-29',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-4521',
            'mobile_phone'=>'3190827632',
            'email'=>'acelas@mail.com',
            'city_residence'=>4,
            'nationality'=>12,
            'user_id'=>1

        ));

         Client::create(array(
            'first_name'  => 'Lorena',
            'last_name'  => 'Medina',
            'identity_document'=> '1012345770',
            'birth_date' => '1992-11-5',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-1111',
            'mobile_phone'=>'3201235123',
            'email'=>'medina@mail.com',
            'city_residence'=>5,
            'nationality'=>13,
            'user_id'=>1

        ));


     Client::create(array(
            'first_name'  => 'Juan',
            'last_name'  => 'Martinez',
            'identity_document'=> '1087654770',
            'birth_date' => '1984-4-26',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-1981',
            'mobile_phone'=>'3200927364',
            'email'=>'juan@mail.com',
            'city_residence'=>6,
            'nationality'=>14,
            'user_id'=>1

        ));

         Client::create(array(
            'first_name'  => 'Sebatian',
            'last_name'  => 'Rincon',
            'identity_document'=> '1053423489',
            'birth_date' => '1994-11-10',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-5981',
            'mobile_phone'=>'31919873645',
            'email'=>'sebastian@mail.com',
            'city_residence'=>1,
            'nationality'=>11,
            'user_id'=>1

        ));

        //
            Client::create(array(
            'first_name'  => 'Pablo',
            'last_name'  => 'Perez',
            'identity_document'=> '1057654389',
            'birth_date' => '1974-6-9',
            'profession' =>'Docente',
            'fixed_telephone'=>'123-4121',
            'mobile_phone'=>'3123875049',
            'email'=>'pablo@mail.com',
            'city_residence'=>8,
            'nationality'=>15,
            'user_id'=>1

        ));

         Client::create(array(
            'first_name'  => 'Carlos',
            'last_name'  => 'Gonzales',
            'identity_document'=> '1087465770',
            'birth_date' => '1996-1-15',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-1121',
            'mobile_phone'=>'3209837421',
            'email'=>'Carlos@mail.com',
            'city_residence'=>6,
            'nationality'=>11,
            'user_id'=>1

        ));


     Client::create(array(
            'first_name'  => 'Juliam',
            'last_name'  => 'Torres',
            'identity_document'=> '1092837450',
            'birth_date' => '1991-2-22',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-1475',
            'mobile_phone'=>'3209364758',
            'email'=>'torres@mail.com',
            'city_residence'=>1,
            'nationality'=>11,
            'user_id'=>1

        ));

         Client::create(array(
            'first_name'  => 'Manuel',
            'last_name'  => 'Rodriguez',
            'identity_document'=> '1076394489',
            'birth_date' => '1990-7-19',
            'profession' =>'Estudiante',
            'fixed_telephone'=>'123-2341',
            'mobile_phone'=>'3193459233',
            'email'=>'manuel@mail.com',
            'city_residence'=>3,
            'nationality'=>13,
            'user_id'=>1

        ));
    }
}