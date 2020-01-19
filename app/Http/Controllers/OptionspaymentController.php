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



class OptionspaymentController extends Controller
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

    public function save(Request $request)
    {
      
      $persona = $request->persona;
      $children = $request->children;
      $baby = $request->baby;
      $persona_extraroom = $request->persona_extraroom;
      $persona_extraroom2 = $request->persona_extraroom2;
      $iva = $request->iva;
      $infoiva = $request->infoiva;
      $total = $request->total;
      $totalfinal = $request->totalfinal;
      $end = $request->end;
      $lang = $request->lang;
      
       $checkin= $request->checkini;
       $checkout= $request->checkouti;

      $time = strtotime($checkin);
      $time2 = strtotime($checkout);
      $newformat = date('Y-m-d',$time);
      $newformat2 = date('Y-m-d',$time2);

      $id_extraroom= $request->id_extraroom;
      //$price_extraroom= $request->price_extraroom;
      //$name_extraroom= $request->name_extraroom;
      $checkin_extraroom= $request->checkin_extraroom;
      $checkout_extraroom= $request->checkout_extraroom;
      $time_extraroom  = strtotime($checkin_extraroom );
      $time2_extraroom  = strtotime($checkout_extraroom );
      $newformat_extraroom  = date('Y-m-d',$time_extraroom );
      $newformat2_extraroom  = date('Y-m-d',$time2_extraroom );

      
      $id_extraroom2= $request->id_extraroom2;
      //$price_extraroom2= $request->price_extraroom2;
      //$name_extraroom2= $request->name_extraroom2;
      $checkin_extraroom2= $request->checkin_extraroom2;
      $checkout_extraroom2= $request->checkout_extraroom2;
      $time_extraroom2  = strtotime($checkin_extraroom2);
      $time2_extraroom2  = strtotime($checkout_extraroom2 );
      $newformat_extraroom2  = date('Y-m-d',$time_extraroom2 );
      $newformat2_extraroom2  = date('Y-m-d',$time2_extraroom2 );
      
      $uniqid = uniqid();
        $fin= (int)$end;

        if( $lang=="pt" ){

          if( ($request->options ==0)){
            // Cash
   
            $data = room::where ( 'vacancies', 'LIKE', '%' . 2 . '%' )
            ->where ( 'available', 'LIKE', '%' . 0 . '%' )
            ->get();

            $dataroom1 = room::where( 'id', $id_extraroom )   
            ->first();
            $dataroom2 = room::where( 'id', $id_extraroom2 )   
            ->first();

        $name_extraroom = $dataroom1->name_room;
        $name_extraroom2 = $dataroom2->name_room;
        $person_roomindividual = 1;
        $price_extraroom = $dataroom1->price;
        $price_extraroom2 = $dataroom2->price;
           
            
            return view('invoice',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
    , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
    , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual','uniqid','totalfinal','iva','infoiva'));
  
  
           
           }
           else{
           // Credit Card

           
           $data = room::where ( 'vacancies', 'LIKE', '%' . 2 . '%' )
           ->where ( 'available', 'LIKE', '%' . 0 . '%' )
           ->get();

           $dataroom1 = room::where( 'id', $id_extraroom )   
           ->first();
           $dataroom2 = room::where( 'id', $id_extraroom2 )   
           ->first();

           $name_extraroom = $dataroom1->name_room;
           $name_extraroom2 = $dataroom2->name_room;
           $person_roomindividual = 1;
           $price_extraroom = $dataroom1->price;
           $price_extraroom2 = $dataroom2->price;

           return view('stripe',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
           , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
           , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual','uniqid','totalfinal','iva','infoiva'));
         


           }
  
        }
        else{  // ENGLISH IDIOMA

          if( ($request->options ==0)){
            // Cash
   
            $data = roomeng::where ( 'vacancies', 'LIKE', '%' . 2 . '%' )
            ->where ( 'available', 'LIKE', '%' . 0 . '%' )
            ->get();

            $dataroom1 = roomeng::where( 'id', $id_extraroom )   
            ->first();
            $dataroom2 = roomeng::where( 'id', $id_extraroom2 )   
            ->first();

            $name_extraroom = $dataroom1->name_room;
            $name_extraroom2 = $dataroom2->name_room;
            $person_roomindividual = 1;
            $price_extraroom = $dataroom1->price;
            $price_extraroom2 = $dataroom2->price;
           
            
           return view('invoice',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
        , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
        , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual','uniqid','totalfinal','iva','infoiva'));
  
  
           
           }
           else{
           // Credit Card

           $data = roomeng::where ( 'vacancies', 'LIKE', '%' . 2 . '%' )
           ->where ( 'available', 'LIKE', '%' . 0 . '%' )
           ->get();

           $dataroom1 = roomeng::where( 'id', $id_extraroom )   
           ->first();
           $dataroom2 = roomeng::where( 'id', $id_extraroom2 )   
           ->first();

           $name_extraroom = $dataroom1->name_room;
           $name_extraroom2 = $dataroom2->name_room;
           $person_roomindividual = 1;
           $price_extraroom = $dataroom1->price;
           $price_extraroom2 = $dataroom2->price;

               
           return view('stripe',compact('data','persona', 'children', 'baby', 'persona_extraroom', 'persona_extraroom2', 'total', 'checkin', 'checkout', 'time', 'time2'
           , 'newformat', 'newformat2', 'id_extraroom', 'price_extraroom', 'name_extraroom', 'checkin_extraroom', 'checkout_extraroom', 'time_extraroom', 'time2_extraroom', 'newformat_extraroom'
           , 'newformat2_extraroom', 'id_extraroom2', 'price_extraroom2', 'name_extraroom2', 'checkin_extraroom2', 'checkout_extraroom2', 'time_extraroom2', 'time2_extraroom2', 'newformat_extraroom2', 'newformat2_extraroom2', 'end','fin','person_roomindividual','uniqid','totalfinal','iva','infoiva'));
         


           }


        }

     
         
 
         //return  $person;
       
   
   
    }
   
}
