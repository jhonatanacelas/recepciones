<?php
class Reservationcontroller extends BaseController {

public function showReservation()
    {
      // Mostramos la vista show.blade.php 
      $reservation =  DB::table('reservations')
                      ->join('rooms', 'reservations.room_id', '=', 'rooms.room_id')
                      ->join('clients', 'reservations.client_id', '=', 'clients.client_id')
                      ->select( 'reservations.client_id',
                                'reservations.people_amount',
                                'reservations.advance',
                                'reservations.start_date',
                                'reservations.end_date',
                                'rooms.room_number',
                                'clients.identity_document'
                              )
                      ->get();
        if($reservation!=null){
          return View::make('reservas.show')->with('reservations', $reservation);
        }
        return Redirect::to ('reservas/find'); 
        
      //return "hola";
    } 

public function findClient(){
  return View::make('reservas.find');
}

 

public function get_findClient(){
    $identity_document=Input::get('identity_document');

    $client = DB::table('clients')
            ->join('locations', 'clients.city_residence', '=', 'locations.location_id')
            ->select('clients.client_id','clients.first_name', 'clients.last_name','clients.identity_document',
              'locations.location_name','clients.profession','clients.fixed_telephone','clients.mobile_phone','clients.email','clients.birth_date')
            ->where('clients.identity_document', $identity_document)
            ->get();


            foreach ($client as $client ) {
              # code...
                $cl=$client;

            }
    if($client==null)
    {
      return Redirect::to('clientes/add');

    }
    $reservation = DB::table('reservations')
    ->join('clients', 'clients.client_id', '=', 'reservations.client_id')
    ->join('rooms', 'rooms.room_id', '=', 'reservations.room_id')
    ->select('reservations.reservation_id','reservations.start_date', 'reservations.end_date',
    'reservations.additional_features', 'rooms.room_number', 'rooms.price')
   ->where('clients.identity_document', $identity_document)->get();
         // return $cl;
      return View::make('reservas.add',array('foundClient'=>$cl,'reservations'=>$reservation));
       
     
}

public function post_findClient(){
  return 'hello';
}

public function postAddReservation(){

       
            $reservation = new Reservation;
            $reservation->client_id=Input::get('client_id');
            $reservation->room_id=1;  
            $reservation->extend_reservation=Input::get('extend_reservation');
            $reservation->start_date=Input::get('start_date');
            $reservation->end_date=Input::get('end_date');
            $reservation->move_bags=Input::get('move_bags');
            $reservation->destination=Input::get('destination');
            $reservation->people_amount=Input::get('people_amount');
            $reservation->advance=Input::get('advance');
            $reservation->overcharge=Input::get('overcharge');
            $reservation->vehicle=Input::get('vehicle');
            $reservation->additional_features=Input::get('additional_features');
            $reservation->user_id=1;
            $reservation->origin_id=1;
            $reservation->save();

        return Redirect::to ('reservas/find');
}
  
    public function updateReservation(){
      return "No Existen Reservas";
    }  

    public function addForm($client_id){
      $rooms=DB::table('rooms')->select('room_id', 'room_number', 'state')->where('state', 'Disponible')->get();
      $rooms_selector=array();

      if($rooms!=null){
          foreach ($rooms as $roomss) { 
              $rooms_selector[$roomss->room_id]=$roomss->room_number;
          }
      }
      return View::make('reservas.form', array('idCliente'=>$client_id, 'dRooms'=>$rooms_selector));
    }
    public function postAddForm(){
       
            $reservation = new Reservation;
            $reservation->client_id=Input::get('client_id');
            $reservation->room_id=Input::get('rooms');  
            $reservation->extend_reservation=Input::get('extend_reservation');
            $reservation->start_date=Input::get('start_date');
            $reservation->end_date=Input::get('end_date');
            $reservation->move_bags=Input::get('move_bags');
            $reservation->destination=Input::get('destination');
            $reservation->people_amount=Input::get('people_amount');
            $reservation->advance=Input::get('advance');
            $reservation->overcharge=Input::get('overcharge');
            $reservation->vehicle=Input::get('vehicle');
            $reservation->additional_features=Input::get('additional_features');
            $reservation->user_id=1;
            $reservation->save();

            DB::table('rooms')->where('room_id', Input::get('rooms'))
                              ->update(array('state'=>'Proceso'));

        return Redirect::to ('reservas/form/{id}');
}


    public function get_updateReservation($reservation_id)
    {
    $reservation = DB::table('reservations')->where('reservation_id', $reservation_id)->first();

    if($reservation==null)
    {
           return Redirect::to('reservas/show');

    }

      $rooms=DB::table('rooms')->select('room_id', 'room_number', 'state')->where('state', 'Disponible')->get();
      $rooms_selector=array();

      if($rooms!=null){
          foreach ($rooms as $roomss) { 
              $rooms_selector[$roomss->room_id]=$roomss->room_number;
          }
      }

    
         // Mostramos la vista update.blade.php 
       return View::make('reservas.update', array('reservation'=>$reservation, 
                                                  'dRooms'=>$rooms_selector));
     
     //return "hello";      
    }

    public function post_updateReservation($reservation_id){

      $reservation = DB::table('reservations')->where('reservation_id', $reservation_id)->first();

      if($reservation==null){      
        return Redirect::to('reservas/show');
      }

      DB::table('rooms')->where('room_id', $reservation->room_id)
                              ->update(array('state'=>'Disponible'));

          
      DB::table('reservations')->where('reservation_id', $reservation_id)->update(array(
                                'destination'=>Input::get('destination'),
                                'source'=>Input::get('source'),
                                'extend_reservation'=>Input::get('extend_reservation'),
                                'room_id'=>Input::get('rooms'),
                                'start_date'=>Input::get('start_date'),
                                'end_date'=>Input::get('end_date'),
                                'advance'=>Input::get('advance'),
                                'overcharge'=>Input::get('overcharge'),
                                'vehicle'=>Input::get('vehicle'),
                                'additional_features'=>Input::get('additional_features')));
      DB::table('rooms')->where('room_id', Input::get('rooms'))
                              ->update(array('state'=>'Proceso'));
        return Redirect::to('reservas/show');
    }


public function deleteReservation($reservation_id){

 $reservation = DB::table('reservations')->where('reservation_id', $reservation_id)->first();

    if($reservation==null)
    {
     return Redirect::to('reservas/show');

        }
        DB::table('reservations')->where('reservation_id', $reservation_id)->delete();

       return Redirect::to('reservas/show');
}

}