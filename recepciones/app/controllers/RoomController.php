<?php
class Roomcontroller extends BaseController {

public function showRoom()
    {
      // Mostramos la vista show.blade.php 
      $room = DB::table('rooms')->get();

        if($room!=null){
          return View::make('habitaciones.show')->with('rooms', $room);
        }

       return Redirect::to ('habitaciones/add'); 
        
     // return "hola";
    }
public function addRoom()
    {
               // Mostramos la vista add.blade.php 
        return View::make('habitaciones.add');
        //return "hola";
    }

public function post_addRoom(){
  // create the validation rules ------------------------
  $rules = array(
    'room_number'             => 'required|numeric|unique:rooms,room_number',             // just a normal required validation
    'floor'             => 'required|numeric',             // just a normal required validation
    'type'             => 'required',             // just a normal required validation
    'state'             => 'required',             // just a normal required validation
    'price'            => 'required'  // required and must be unique in the ducks table
    
  );

  // do the validation ----------------------------------
  // validate against the inputs from our form
  $validator = Validator::make(Input::all(), $rules);

  // check if the validator failed -----------------------
  if ($validator->fails()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('habitaciones/add')->withErrors($validator);

  } else {
     
       
            $room = new Room;
            $room->room_number        =Input::get('room_number');
            $room->floor              =Input::get('floor');
            $room->type               =Input::get('type');
            $room->state              =Input::get('state');
            $room->double_beds        =Input::get('double_beds');
            $room->single_beds        =Input::get('single_beds');
            $room->auxiliary_beds     =Input::get('auxiliary_beds');
            $room->price              =Input::get('price');
            $room->additional_features=Input::get('additional_features');
            $room->save();

        return Redirect::to ('habitaciones/show');
}
}
  
    public function updateRoom(){
      return "No Existen Habitaciones";
    }  

    public function get_updateRoom($room_id)
    {
    $room = DB::table('rooms')->where('room_id', $room_id)->first();

    if($room==null)
    {
           return Redirect::to('habitaciones/show');

    }
    
         // Mostramos la vista update.blade.php 
       return View::make('habitaciones.update')-> with('room',$room);
     
     //return "hello";      
    }

    public function post_updateRoom($room_id){

   $room = DB::table('rooms')->where('room_id', $room_id)->first();

    if($room==null)
    {
           return Redirect::to('habitaciones/show');

        }

  // create the validation rules ------------------------
  $rules = array(
    'room_number'             => 'required|numeric|unique:rooms,room_number',             // just a normal required validation
    'floor'             => 'required|numeric',             // just a normal required validation
    'type'             => 'required',             // just a normal required validation
    'state'             => 'required',             // just a normal required validation
    'price'            => 'required'  // required and must be unique in the ducks table
    
  );

  // do the validation ----------------------------------
  // validate against the inputs from our form
  $validator = Validator::make(Input::all(), $rules);

  // check if the validator failed -----------------------
  if ($validator->fails()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('habitaciones/add')->withErrors($validator);

  } else {
     
      
        DB::table('rooms')
            ->where('room_id', $room_id)
            ->update(array('room_number' => Input::get('room_number'),
                            'floor'=>Input::get('floor'),
                            'type'=>Input::get('type'),
                            'state'=>Input::get('state'),
                            'double_beds'=>Input::get('double_beds'),
                            'single_beds'=>Input::get('single_beds'),
                            'auxiliary_beds'=>Input::get('auxiliary_beds'),
                            'price'=>Input::get('price'),
                            'additional_features'=>Input::get('additional_features')));
          
                return Redirect::to('habitaciones/show');
      }
}

public function deleteRoom($room_id){

 $room = DB::table('rooms')->where('room_id', $room_id)->first();

    if($room==null)
    {
     return Redirect::to('habitaciones/show');

        }
        DB::table('rooms')->where('room_id', $room_id)->delete();

       return Redirect::to('habitaciones/show');
}

}