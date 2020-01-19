<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Mail\Demoemail3;
use Illuminate\Support\Facades\Mail;

use App\Room;
use App\Roomeng;
use App\Reserve;
use App\User;



class PaymentController extends Controller
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


    public function paymentProcess()
    {
    	
	$person = Input::get ( 'persona');
	$children = Input::get ( 'children');
	$baby = Input::get ( 'baby');
	$person_extraroom = Input::get ( 'persona_extraroom');
	$person_extraroom2 = Input::get ( 'persona_extraroom2');
	$total = Input::get ( 'total');
	$iva = Input::get ( 'iva');
	$totalfinal = Input::get ( 'totalfinal');
			  
	
	//$checkin = Input::get ( 'checkini');
	//$checkout = Input::get ( 'checkouti');

	$checkin = Input::get ( 'checkin');
	$checkout = Input::get ( 'checkout');

	$time = strtotime($checkin);
	$time2 = strtotime($checkout);
	$newformat = date('Y-m-d',$time);
	$newformat2 = date('Y-m-d',$time2);

	$id_extraroom = Input::get ( 'id_extraroom');
	$price_extraroom = Input::get ( 'price_extraroom');
	$name_extraroom = Input::get ( 'name_extraroom');
	$checkin_extraroom = Input::get ( 'checkin_extraroom'); 
	$checkout_extraroom = Input::get ( 'checkout_extraroom'); 
	$time_extraroom  = strtotime($checkin_extraroom );
	$time2_extraroom  = strtotime($checkout_extraroom );
	$newformat_extraroom  = date('Y-m-d',$time_extraroom );
	$newformat2_extraroom  = date('Y-m-d',$time2_extraroom );

	
	$id_extraroom2 = Input::get ( 'id_extraroom2');
	$price_extraroom2 = Input::get ( 'price_extraroom2');
	$name_extraroom2 = Input::get ( 'name_extraroom2');
	$checkin_extraroom2 = Input::get ( 'checkin_extraroom2'); 
	$checkout_extraroom2 = Input::get ( 'checkout_extraroom2'); 
	$time_extraroom2  = strtotime($checkin_extraroom2);
	$time2_extraroom2  = strtotime($checkout_extraroom2 );
	$newformat_extraroom2  = date('Y-m-d',$time_extraroom2 );
	$newformat2_extraroom2  = date('Y-m-d',$time2_extraroom2 );
	
	

	 $end = Input::get ( 'end');
	  $fin= (int)$end;

	  //$uniqid = uniqid();
	  $uniqid = Input::get ('uniqid');

	  $amount = round($totalfinal*100);

////////////////////////////// STRIPE /////////////////////////////////////////////////////////////
	  // Set your secret key: remember to change this to your live secret key in production
		// See your keys here: https://dashboard.stripe.com/account/apikeys
		\Stripe\Stripe::setApiKey("sk_test_3RTyudVkKAzEVzkFg8uxSUgB00AZEFQXVa");
		// Token is created using Checkout or Elements!
		// Get the payment token ID submitted by the form:
		$token = $_POST['stripeToken'];
		$charge = \Stripe\Charge::create([
		    'amount' => $amount,
		    'currency' => 'eur',
		    'description' => 'Reserve',
		    'source' => $token,
    ]);
//////////////////////////////// STRIPE ////////////////////////////////////////////////////////////	

	for ($i =0; $i<$fin; $i++){
	  
	   $y = (string)$i;
	   $id_room = Input::get ( $y );
	   $dataDB = room::where('id',$id_room)->first();

	   $name_room= $dataDB->name_room;
	   $price_room= $dataDB->price;

	   $post = new reserve;
	   $post->name_reserve = $uniqid."_". $name_room;
	   //$post->id_user = Auth::user()->id; 
	   $post->id_room =  $id_room ;
	   $post->id_hotel = 1 ;
	   $post->checkin = $newformat;
	   $post->checkout = $newformat2;
	   $post->price = $price_room;
	   $post->total = $totalfinal ;
	   $post->person = $person;
	   $post->children =Auth::user()->id;  // ===========> User ID
	   //$post->cancel = "" ;
	   $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;
	 
   
	   $post->save();

	   // Change Activation in room table
	   // Discount total person in vacancies ,room table
	   $change = room::find($id_room);
	   $change->available = 1 ;
	   $change->vacancies = 0 ;       
	   $change->save();

	   roomeng::where('id', $id_room )
	   ->update(['available' => 1, 'vacancies' => 0 ]);     
	  
	}

	if (($id_extraroom !== 0) && ($id_extraroom2 !== 0)){

	   $namedataDB = room::where('id',5)->first();
		  
	   $post = new reserve;
	   //$post->name_reserve = $uniqid."_".$name_extraroom ;
	   $post->name_reserve = $uniqid."_"."Quarto Individual";
	   
	   //$post->id_user = Auth::user()->id;
	   $post->id_room =  $id_extraroom ;
	   $post->id_hotel = 1 ;
	   $post->checkin = $newformat;
	   $post->checkout = $newformat2;
	   $post->price = $price_extraroom;
	   $post->total = $totalfinal ;
	   $post->person = $person;
	   $post->children = Auth::user()->id;  // ===========> User ID
	   //$post->cancel = ""
	   $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

	   
	   $post->save();


	  
	   
	   // Change Activation in room table
	   // Discount total person in vacancies ,room table


	   room::where('id', $id_extraroom)
	   ->update(['available' => 1, 'vacancies' => 0 ]); 

	   roomeng::where('id', $id_extraroom)
	   ->update(['available' => 1, 'vacancies' => 0 ]); 

	   $namedataDB2 = room::where('id',6)->first();
	   $post2 = new reserve;
	   //$post2->name_reserve = $uniqid."_".$name_extraroom2;
	   $post2->name_reserve = $uniqid."_"."Quarto Individual Superior";
	   //$post2->id_user = Auth::user()->id;
	   $post2->id_room =  $id_extraroom2 ;
	   $post2->id_hotel = 1 ;
	   $post2->checkin = $newformat;
	   $post2->checkout = $newformat2;
	   $post2->price = $price_extraroom2;
	   $post2->total = $totalfinal;
	   $post2->person = $person;
	   $post2->children = Auth::user()->id; // ===========> User ID
	   //$post2->cancel = "" ;
	   $post2->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

	   
	   $post2->save();

	   
	   
	   // Change Activation in room table
	   // Discount total person in vacancies ,room tab
	 
	   room::where('id', $id_extraroom2 )
				   ->update(['available' => 1, 'vacancies' => 0 ]); 

	 roomeng::where('id', $id_extraroom2 )
				   ->update(['available' => 1, 'vacancies' => 0 ]); 


	}
	elseif( (($id_extraroom !== 0) && ($id_extraroom2== 0))  ) {

	   $namedataDB = room::where('id',$id_extraroom)->first();
		
	   $post = new reserve;
	   //$post->name_reserve = $uniqid."_".$namedataDB->$name_room;
	   $post->name_reserve = $uniqid."_"."Quarto Individual";
	   
	   //$post->id_user = Auth::user()->id;
	   $post->id_room =  $id_extraroom ;
	   //$post->id_usuario = 1 ;
	   $post->id_hotel = 1 ;
	   $post->checkin = $newformat;
	   $post->checkout = $newformat2;
	   $post->price = $price_extraroom;
	   $post->total = $totalfinal;
	   $post->person = $person;
	   $post->children = Auth::user()->id;   // ===========> User ID
	   //$post->cancel = "" ;
	   $post->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

	   
	   $post->save();

   
	   // Change Activation in room table
	   // Discount total person in vacancies ,room table
	   $change = room::find($id_extraroom);
	   $change->available = 1 ;
	   $change->vacancies = 0 ;       
	   $change->save();

	   roomeng::where('id', $id_extraroom )
	   ->update(['available' => 1, 'vacancies' => 0 ]); 
			 
					  
	}
	elseif( (($id_extraroom2 !== 0) && ($id_extraroom == 0))  ) {


	   $namedataDB2 = room::where('id',$id_extraroom2)->first();
	

	   $post2 = new reserve;
	   $post2->name_reserve = $uniqid."_"."Quarto Individual Superior";
	   //$post2->id_user = Auth::user()->id;
	   $post2->id_room =  $id_extraroom2 ;
	   $post2->id_hotel = 1 ;
	   $post2->checkin = $newformat;
	   $post2->checkout = $newformat2;
	   $post2->price = $price_extraroom2;
	   $post2->total = $totalfinal;
	   $post2->person = $person;
	   $post2->children = Auth::user()->id;  // ===========> User ID
	   //$post2->cancel = "" ;
	   $post2->info = "CHILDREN:"." ".$children.",". " ". "BABY:". " ". $baby;

	   
	   $post2->save();

	   
		// Change Activation in room table
	   // Discount total person in vacancies ,room table
	   $id_extraroom2 = Input::get ( 'id_extraroom2');
	   $muda = room::find($id_extraroom2);
	   $muda->available = 1 ; 
	   $muda->vacancies = 0 ;      
	   $muda->save();    
	   
	   roomeng::where('id', $id_extraroom2 )
	   ->update(['available' => 1, 'vacancies' => 0 ]); 

	}
	
	reserve::where ( 'id_room', null )   
				   ->delete();

	$count = reserve::where ( 'name_reserve', 'LIKE', '%' . $uniqid . '%' )->count();

 
	for ($i =0; $i<$count; $i++){

	  

	   $first = reserve::where ( 'name_reserve', 'LIKE', '%' . $uniqid . '%' )->get();

	   //$id_individuo= $first->id_user;
	   $id_individuo= Auth::user()->id;
	   $email_individuo= Auth::user()->email;

	   $currentuser = User::find($id_individuo);
		$name_user = $currentuser->name;
		$email_user = $currentuser->email;
		

	   $A =  $first[$i]->name_reserve. ","." "."CHECKIN :" .$checkin.","." "." CHECKOUT:".
	   $checkout.","." "."TOTAL:".$totalfinal."€".","." "."SUB-TOTAL:".$total.""."€".","." "."IVA(5%):".$iva."€".",". " ". "Nº ADULTS:".$person.",". " ".$first[$i]->info.",".
	   " "."PRICE:". $first[$i]->price.""."€" .",". " "."NAME:".$name_user.",". " "."EMAIL:".$email_user;

	   // Email Empresa/Admin
	   $message = $A;
	   $name = $uniqid;
	   Mail::to('rsaeco@yahoo.com')->send(new Demoemail3($uniqid,$message));

		 // Email User
		 $message1 = $A;
		 $name1 = $uniqid;
		 Mail::to($email_individuo)->send(new Demoemail3($uniqid,$message1));
	}

       return redirect(route('welcome'));

    }
}