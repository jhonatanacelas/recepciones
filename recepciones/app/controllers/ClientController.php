<?php
class Clientcontroller extends BaseController {

public function showClient()
    {
               // Mostramos la vista show.blade.php 
        $client = DB::table('clients')
            ->join('locations', 'clients.city_residence', '=', 'locations.location_id')
            ->select('clients.client_id','clients.first_name', 'clients.last_name','clients.identity_document',
              'locations.location_name','clients.birth_date','clients.profession','clients.fixed_telephone','clients.mobile_phone','clients.email')
            ->get();
            if($client!=null){
             return View::make('clientes.show')->with('clients', $client);

            }
             return Redirect::to ('clientes/add')->with('message','tenemos problemas'); 
        
        //return "hola";
    }

  

public function addClient()
    {

      $pais = DB::table('locations')          
            ->select('location_id','location_name')->where('location_type', '1')->get();
            $pais_selector= array();

            if($pais!=null){
              foreach ($pais as $paiss) {
                $pais_selector[$paiss->location_id]=$paiss->location_name;
              }
            }
      $locations = DB::table('locations')          
            ->select('location_id','location_name')->where('location_type', '3')->get();
               // Mostramos la vista add.blade.php 
      $location_selector = array();

      if ($locations!=null) {
        # code...
        foreach($locations as $location) {
    $location_selector[$location->location_id] = $location->location_name; // I assume name attribute contains client name here
}
       // return View::make('clientes.add')->with('locations', $location);;
        return View::make('clientes.add', array( 'location_selector' => $location_selector,'pais_selector'=>$pais_selector));
      }
         return Redirect::to ('clientes/show')->with('message','tenemos problemas'); 
    }

public function post_addClient(){


// create the validation rules ------------------------
 
  $rules = array(
    'first_name'             => 'required',             // just a normal required validation
    'last_name'              => 'required',             // just a normal required validation
    'identity_document'      => 'required|unique:clients',             // just a normal required validation
    'birth_date'             => 'required',             // just a normal required validation
    'nationality'            => 'required',  // required and must be unique in the ducks table
    'city_residence'         => 'required'
    
  );

  // do the validation ----------------------------------
  // validate against the inputs from our form
  $validator = Validator::make(Input::all(), $rules);


  // check if the validator failed -----------------------
  if ($validator->passes()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('clientes/add')->withErrors($validator);

  } else {


       
            $client = new Client;
            $client->first_name         = Input::get('first_name');
            $client->last_name          = Input::get('last_name');
            $client->identity_document  = Input::get('identity_document');
            $client->birth_date         =Input::get('birth_date');
            $client->profession         =Input::get('profession');
            $client->fixed_telephone    =Input::get('fixed_telephone');
            $client->mobile_phone       =Input::get('mobile_phone');
            $client->email              =Input::get('email');
            $client->nationality        =Input::get('pais');
            $client->city_residence     =Input::get('location');
            $client->user_id            =1;
            $client->save();

        return Redirect::to ('clientes/show');
      }
}

    public function updateClient($client_id)
    {
      $client = DB::table('clients')->where('client_id', $client_id)->first();

    if($client==null)
    {
           return Redirect::to('clientes/show');

        }

        $pais = DB::table('locations')          
            ->select('location_id','location_name')->where('location_type', '1')->get();
            $pais_selector= array();

            if($pais!=null){
              foreach ($pais as $paiss) {
                $pais_selector[$paiss->location_id]=$paiss->location_name;
              }
            }
      $locations = DB::table('locations')          
            ->select('location_id','location_name')->where('location_type', '3')->get();
               // Mostramos la vista add.blade.php 
      $location_selector = array();

      if ($locations!=null) {
        # code...
        foreach($locations as $location) {
    $location_selector[$location->location_name] = $location->location_name; // I assume name attribute contains client name here
}
         // Mostramos la vista update.blade.php 
        //return View::make('clientes.update')-> with('client',$client);
        return View::make('clientes.update',array('client'=>$client,'location_selector'=>$location_selector,'pais_selector'=>$pais_selector));//-> with('client',$client);

     
     //return "hello";      
    }
}
    public function post_updateClient($client_id){

   $client = DB::table('clients')->where('client_id', $client_id)->first();

    if($client==null)
    {
           return Redirect::to('clientes/show');

        }
        $date=date('Y-m-d');
        // create the validation rules ------------------------
  $rules = array(
    'first_name'             => 'required|Alpha',             // just a normal required validation
    'last_name'             => 'required|Alpha',             // just a normal required validation
    'identity_document'             => 'required|Min:8|Max:11|unique:clients,identity_document',             // just a normal required validation
    'birth_date'             => 'required|date',             // just a normal required validation
    'email'            => 'required|email',  // required and must be unique in the ducks table
    'nationality'             => 'required',
    'city_residence'             => 'required',
    'fixed_telephone' =>'Max:7',
    'mobile_phone' =>'Min:10|Max:10'
  );

  // do the validation ----------------------------------
  // validate against the inputs from our form
  $validator = Validator::make(Input::all(), $rules);

  // check if the validator failed -----------------------
  if ($validator->fails()) {

    // get the error messages from the validator
    $messages = $validator->messages();

    // redirect our user back to the form with the errors from the validator
    return Redirect::to('clientes/add')->withErrors($validator);

  } else {

      
        DB::table('clients')
            ->where('client_id', $client_id)
            ->update(array('first_name' => Input::get('first_name'),
                            'last_name' => Input::get('last_name'),
                            'identity_document' => Input::get('identity_document'),  
                            'birth_date' => Input::get('birth_date'),
                            'profession'=>Input::get('profession'),
                            'email'=>Input::get('email'),
                            'fixed_telephone'=>Input::get('fixed_telephone'),
                            'mobile_phone'=>Input::get('mobile_phone'),
                            'nationality'=>Input::get('pais'),
                            'city_residence'=>Input::get('location')
                            ));
        //return Redirect::route('clientes/show')->with('message', 'cliente actualizado');
                return Redirect::to('clientes/show');
      }
    }


public function deleteClient($client_id){

 $client = DB::table('clients')->where('client_id', $client_id)->first();

    if($client==null)
    {
     return Redirect::to('clientes/show');

        }
        DB::table('clients')->where('client_id', $client_id)->delete();

       return Redirect::to('clientes/show');
}

}