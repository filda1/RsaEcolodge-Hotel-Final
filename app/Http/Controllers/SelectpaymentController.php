<?php

namespace App\Http\Controllers;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail3;
use Illuminate\Support\Facades\Mail;

class SelectpaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function save()
    {
         // $hotel = Input::get ( 'hotel' );


         // OJO con fechas poner en : //config/database.php
         // 'mysql' => [
         // 'strict' => false,

         $person = Input::get ( 'persona');
         $children = Input::get ( 'children');
         $baby = Input::get ( 'baby');
         $person_extraroom = Input::get ( 'persona_extraroom');
         $person_extraroom2 = Input::get ( 'persona_extraroom2');
         $total = Input::get ( 'total');
         $totalfinal = Input::get ( 'totalfinal');
         $iva = Input::get ( 'iva');
         $infoiva = Input::get ( 'infoiva');
         $lang = Input::get ( 'lang');
                   
         
         $checkin = Input::get ( 'checkini');
         $checkout = Input::get ( 'checkouti');

         $time = strtotime($checkin);
         $time2 = strtotime($checkout);
         $newformat = date('Y-m-d',$time);
         $newformat2 = date('Y-m-d',$time2);

         

         $id_extraroom = Input::get ( 'id_extraroom');
         $price_extraroom = Input::get ( 'price_extraroom');
         //$name_extraroom = Input::get ( 'name_extraroom');
         $checkin_extraroom = Input::get ( 'checkin_extraroom'); 
         $checkout_extraroom = Input::get ( 'checkout_extraroom'); 
         $time_extraroom  = strtotime($checkin_extraroom );
         $time2_extraroom  = strtotime($checkout_extraroom );
         $newformat_extraroom  = date('Y-m-d',$time_extraroom );
         $newformat2_extraroom  = date('Y-m-d',$time2_extraroom );

         
         $id_extraroom2 = Input::get ( 'id_extraroom2');
         $price_extraroom2 = Input::get ( 'price_extraroom2');
         //$name_extraroom2 = Input::get ( 'name_extraroom2');
         $checkin_extraroom2 = Input::get ( 'checkin_extraroom2'); 
         $checkout_extraroom2 = Input::get ( 'checkout_extraroom2'); 
         $time_extraroom2  = strtotime($checkin_extraroom2);
         $time2_extraroom2  = strtotime($checkout_extraroom2 );
         $newformat_extraroom2  = date('Y-m-d',$time_extraroom2 );
         $newformat2_extraroom2  = date('Y-m-d',$time2_extraroom2 );
         
         $end = Input::get ( 'end');
           $fin= (int)$end;

         if($lang=="pt"){

            $dataroom1 = room::where( 'id', $id_extraroom )   
                      ->first();
            $dataroom2 = room::where( 'id', $id_extraroom2 )   
                      ->first();

                  $name_extraroom = $dataroom1->name_room;
                  $name_extraroom2 = $dataroom2->name_room;

         
         return view('selectpayment',compact('person', 'children', 'baby', 'person_extraroom', 'person_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
         , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
         , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','lang','totalfinal','iva','infoiva'));

      

         }
         
         if($lang=="en"){

        /*$dataroom1 = roomeng::where( 'id', $id_extraroom )   
            ->first();
        $dataroom2 = roomeng::where( 'id', $id_extraroom2 )   
            ->first();*/

            $dataroom10 = roomeng::where( 'id', $id_extraroom )   
            ->first();
             $dataroom20 = roomeng::where( 'id', $id_extraroom2 )   
            ->first();

        $name_extraroom = $dataroom10->name_room;
        $name_extraroom2 = $dataroom20->name_room;


        return view('selectpayment',compact('person', 'children', 'baby', 'person_extraroom', 'person_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
      , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
       , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','lang','totalfinal','iva','infoiva'));
        
              

         }


        

   
    }
   
}
