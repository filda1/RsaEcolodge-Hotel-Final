<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail2;
use Illuminate\Support\Facades\Mail;
use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use App\Hotelpicture;
use App\Roompicture;
use Datetime;

class ChangeController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index (Request $request, $id)
    {
        
       // Enviar email =======>
       $date = reserve::where('id_room',$id )->first();
 
        $name ='Cancel reserve Rsaecolodge'; 
        $message = 'NAME:'.Auth::user()->name.',' . ' '.'EMAIL:'.Auth::user()->email.','.' '.'CHECKIN:'. $date->checkin.','. ' '.'CHEKOUT:'.$date->checkout.','. ' ' .'RESERVE:'.$date->name_reserve ; 
        
      // Email A empresa/admin
      Mail::to('rsaeco@yahoo.com')->send(new Demoemail2($name,$message));
      
      // Email User
      $email_individuo= Auth::user()->email;
      Mail::to($email_individuo)->send(new Demoemail2($name,$message));


      //Elimino el quarto en reserva table BD
      reserve::where('id_room',$id)->delete();


      //Activo el quarto en room table BD
      $n_room = room::find($id);
      $n_roomeng = roomeng::find($id);
      $person= $n_room->person;
      $personeng= $n_roomeng->person;
       room::where('id',$id )
             ->update(['available' => 0, 'vacancies' => $person ]); 

             roomeng::where('id',$id )
             ->update(['available' => 0, 'vacancies' => $personeng ]);

                        
     return redirect(route('home'));
       
    }

}
