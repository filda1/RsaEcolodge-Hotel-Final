@extends('layouts/app1')
@include('layouts/head8')
@section('head')
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

      <!--Datepicker -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
           $('.date').datepicker({  
             
               format: 'dd-mm-yyyy',       
		           endDate: '+ 0d',
               //clearBtn: true,
               startDate: '0d'          
            
            });  
        
    </script> 


     <script>
       // Limpia datapicker, al presionar btn Search
      $("#reset-date").click(function(){
    $('.date').val("").datepicker("update");
})
    </script>
 <style> 

.fill { 
    min-height: 0%;
    height: 0%;
}
.search-slt{
    display: block;
    width: 100%;
    font-size: 0.875rem;
    line-height: 1.5;
    color: #55595c;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
.wrn-btn{
    width: 100%;
    font-size: 16px;
    font-weight: 400;
    text-transform: capitalize;
    height: calc(3rem + 2px) !important;
    border-radius:0;
}
@media (min-width: 992px){
    .search-sec{
        position: relative;
        top: 111px;
        background: rgba(26, 70, 104, 0.51);
    }
}

@media (max-width: 992px){
    .search-sec{
        background: #1A4668;
    }
}

   .product_view .modal-dialog{max-width: 1050px; width: 65%;}
        .pre-cost{text-decoration: line-through; color: #a5a5a5;}
        .space-ten{padding: 10px 0;}

        *,
*::before,
*::after {
  box-sizing: border-box;
}

img {
  display: block;
}

.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.gallery.pop {
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.gallery figure {
  -ms-flex-preferred-size: 33.333%;
      flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}
.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}
.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}
.popup figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;
}
.popup figure img {
  position: relative;
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}
.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}
.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}
.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
          filter: blur(15px) contrast(2);
}
.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.popup .close svg {
  width: 100%;
  height: 100%;
}

  }
}

 </style>
</head>

@section('main-content')
<body> 

 <br>
 <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fa fa-leaf" style="color:#47775D;"></i></a>
            </div>
            <!-- Galeria, dentro de modal 
            <h3 ><a data-toggle="modal" data-target="#product_view">  {{ __('messages.TituloPrincipal1') }}</a></h3>-->  
            <h3 ><a href="{{ route('environment') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;">  {{ __('messages.TituloPrincipal1') }}</a></h3>
            
            <div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
     
       <!-- Galeria, dentro de modal -->   
        <div class="row justify-content-center">
    <div class="col-md-8">
       <div class="row">
            <a href="{{url('/storage/'. $posts[5]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[5]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[6]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[6]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[7]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[7]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[8]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[8]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[9]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[9]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[10]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[10]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[11]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[11]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[12]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[12]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[13]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[13]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
    </div>
</div>
	</div>
</div>
</div>
</div>
</div>
      <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building" style="color:#47775D;"></i></a>
            </div>
            <h3><a href="{{ route('services') }}"  style="color:#191919;font-family:Century Gothic;font-weight:bold;">{{ __('messages.TituloPrincipal2') }}</a></h3>
        
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
            <a class="m-auto"  href="{{ route('hotels') }}" ><i class="far fa-check-circle" style="color:#47775D;"></i></a>
            </div>
            <h3><a href="{{ route('hotels') }}"  style="color:#191919;font-family:Century Gothic;font-weight:bold;">{{ __('messages.TituloPrincipal3') }}</a></h3>
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>  </div>
    </div>
   
    
			@if(isset($data))
			<p> </b></p>
     
         <div> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  <h4> <a style="color:#D6DC1D; ;font-family:Century Gothic;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ({{ __('messages.de') }}  {{ $checkin}} {{ __('messages.a') }} {{  $checkout }})</a></h4></div>
         
        <div class="col">
			<table class="table">
				<tbody style="height: 50px; overflow:auto;">    
        <!-- <form action="/reserve" method="POST" role="reserve" > --> 
        <form action="/selectpayment" method="POST">
     {{ csrf_field() }}
        @for ($i =0; $i<$end; $i++)
          <tr>
         
                             <td class="no" style="font-weight:bold;font-family:Century Gothic;"> {{$data[$i]  ->id}}</td>
                           
                                <td class="text-left"><h3>
                                <a  href="{{ route('hotels')}}" style="color:#b18350;font-weight:bold;font-family:Century Gothic;">
                              {{$data[$i] ->name_room}} &nbsp; &nbsp;  <i class="fa fa-bed" style='font-size:24px; color:#b18350;'></i>&nbsp;  <i class="fa fa-bed" style='font-size:24px; color:#b18350;'></i>
                                </a>            
                                </h3>
                                <a style="color:#90ee90;font-family:Century Gothic;font-size:14px">
                               <div>{{$data[$i] ->bed1}},&nbsp; {{$data[$i] ->person}}x <i class="fa fa-user" style='font-size:16px;color:#47775D;'></i></div>
                               </a>
                               <label style="font-family:Century Gothic;font-size:16px">
                                 {{$data[$i] ->descripcion}}</label>
                               <br>
                               <h6 style="color:green;font-family:Century Gothic;font-size:16px ">{{$data[$i] ->serviceespecial1}}</h6>
                               <h6 style="color:green;font-family:Century Gothic;font-size:16px">{{$data[$i] ->serviceespecial2}}</h6>
                          
                               <h6 style="color:gray;font-family:Century Gothic;font-size:16px">*{{$data[$i] ->include}}</h6>
                               <h6 style="color:black;font-family:Century Gothic;font-size:16px">✓ {{$data[$i]->infoprice2}}</h6>
                               <h6 style="color:black;font-family:Century Gothic;font-size:16px">✓ {{$data[$i] ->info1}}</h6>
                               <h6 style="color:red;font-family:Century Gothic;font-size:14px">{{$data[$i] ->alert1}}</h6>
                               <!-- {{($data[$i] ->price[0])}} -->   
                               

                               <input  type='hidden' value={{$data[$i]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{$persona}}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{ $checkin}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ $checkout}}  name="checkouti"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 
                            </td>
                            <td class="unit">
                            </td>
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$data[$i] ->price}} €
                            <br><br>
                            <h6 style="color:gray;font-family:Century Gothic;font-size:16px">*{{$data[$i] ->infoprice1}}</h6>
                             
                            </td>
                            @guest
                            <td class="total" ><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a></td>
                            @else
                            <td class="total"><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</button></td>
                            @endguest>
                        </tr>
            @endfor
           
				</tbody>
			</table>
      @endif
      @if(isset($extra_room))
			<table class="table">
				<thead style="height: 20px; overflow:auto;">
        <tr>
        <th> </th>
                <th class="text-left"></th>                          
                <th class="text"></th>
                 <th class="text"></th>
                <th class="text"></th>
        </tr>
				</thead>
				<tbody style="height: 50px; overflow:auto;">    
          <tr >
                            <td class="no" style="color:#191919;font-family:Century Gothic;font-weight:bold;" > {{$extra_room ->id}}</td>
                            <td class="text-left"><h3>
                                <a  href="{{ route('hotels')}}" style="color:#b18350;font-weight:bold;font-family:Century Gothic;">
                                {{$extra_room ->name_room}} &nbsp;&nbsp;<i class="fa fa-bed" style='font-size:24px; style="color:#47775D;'></i>&nbsp;
                                </a>            
                                </h3>
                                <a style="color:#90ee90;font-family:Century Gothic;font-size:14px">
                               <div>{{$extra_room ->bed1}}, &nbsp;  {{$extra_room ->person}}x <i class="fa fa-user" style='font-size:16px;color:#47775D'></i></div>
                               </a> 
                               <label style="font-family:Century Gothic;font-size:16px">
                               {{$extra_room ->descripcion}} </label>
                               <br>
                               <h6 style="color:green; font-family:Century Gothic;font-size:16px">{{$extra_room ->serviceespecial1}}</h6>
                               <h6 style="color:green; font-family:Century Gothic;font-size:16px">{{$extra_room ->serviceespecial2}}</h6>
                          
                               <h6 style="color:gray; font-family:Century Gothic;font-size:16px">*{{$extra_room ->include}}</h6>
                               <h6 style="color:black; font-family:Century Gothic;font-size:16px">✓ {{$extra_room->infoprice2}}</h6>
                               <h6 style="color:black; font-family:Century Gothic;font-size:16px">✓ {{$extra_room ->info1}}</h6>
                               <h6 style="color:red; font-family:Century Gothic;font-size:14px">{{$extra_room ->alert1}}</h6>
                               

                               
                              <input  type='hidden' value={{$extra_room ->id}} name=" id_extraroom"  style="width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value= {{($extra_room ->price)}}  name="price_extraroom"  style="width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value= {{$extra_room ->name_room}}   name="name_extraroom"  style="width:20px; 
                                  height:5px;"/>

                              

                             <!-- <input type='hidden'  value={{ $checkin}}  name="checkin_extraroom"  style="width:20px;height:5px;"/> 
                                        
                          <input type='hidden'  value={{ $checkout}}  name="checkout_extraroom"  style="width:20px height:5px;"/> -->  
                          <input type='hidden' value={{ $checkin}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                           <input  type='hidden' value={{ $checkout}}  name="checkouti"  style="  width:20px; 
                                            height:5px;"/> 

                          <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                  
                                  <!-- <input  type='hidden' value={{ $persona }}  name='persona_extraroom'  style="width:20px; 
                                  height:5px;"/>  -->        
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="width:20px; 
                                  height:5px;"/> 
                            </td>
                            <td class="unit">
                            </td>
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra_room ->price}} €
                            <br><br>
                            <h6 style="color:gray;font-family:Century Gothic;font-size:16px">*{{$extra_room ->infoprice1}}</h6>
                             
                            </td>
                            @guest
                            <td class="total"><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a></td>
                            @else
                            <td class="total"><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</button></td>
                            @endguest
                        </tr>
                      
       <tr></tr>                
      @endif
      @if(isset($extra_room2))
                        <tr >
                            <td class="no" style="color:#191919;font-family:Century Gothic;font-weight:bold;"> {{$extra_room2 ->id}}</td>
                            <td class="text-left"><h3>
                                <a  href="{{ route('hotels')}}" style="color:#b18350;font-weight:bold;font-family:Century Gothic;">
                                {{$extra_room2 ->name_room}}   &nbsp; &nbsp;  <i class="fa fa-bed" style='font-size:24px; style="color:#47775D;'></i>&nbsp; 
                                </a>            
                                </h3>
                                <a style="color:#90ee90;font-family:Century Gothic;font-size:14px">
                               <div>{{$extra_room2 ->bed1}}, &nbsp; {{$extra_room2 ->person}}x <i class="fa fa-user" style='font-size:16px;color:#47775D'></i></div>

                               <label style="color:#191919;font-family:Century Gothic;font-size:16px">
                               {{$extra_room ->descripcion}} </label>
                               <br>
                               <h6 style="color:green;font-family:Century Gothic;font-size:16px">{{$extra_room2 ->serviceespecial1}}</h6>
                               <h6 style="color:green;font-family:Century Gothic;font-size:16px">{{$extra_room2->serviceespecial2}}</h6>
                          
                               <h6 style="color:gray;font-family:Century Gothic;font-size:16px">*{{$extra_room2 ->include}}</h6>
                               <h6 style="color:black;font-family:Century Gothic;font-size:16px">✓ {{$extra_room2->infoprice2}}</h6>
                               <h6 style="color:black;font-family:Century Gothic;font-size:16px">✓ {{$extra_room2 ->info1}}</h6>
                               <h6 style="color:red;font-family:Century Gothic;font-size:14px">{{$extra_room2 ->alert1}}</h6>
                             
                             
                               <input  type='hidden' value={{$extra_room2 ->id}} name=" id_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value={{($extra_room2 ->price)}} name=" price_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value={{$extra_room2 ->name_room}}   name="name_extraroom2"  style="  width:20px; 
                                  height:5px;"/>

                          

                           <!-- <input type='hidden' value={{ $checkin}}  name="checkin_extraroom2"  style="width:20px;height:5px;"/> 
                                        
                             <input type='hidden' value={{ $checkout}}  name="checkout_extraroom2"  style="width:20px;height:5px;"/>  -->  
                             <input type='hidden' value={{ $checkin}}  name="checkini"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{ $checkout}}  name="checkouti"  style="  width:20px; 
                                            height:5px;"/> 
                                 
                             <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                      <!-- <input  type='hidden' value={{ $persona }}  name='persona_extraroom2'  style="  width:20px; 
                                  height:5px;"/>  -->  
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
                                                   

                            </td>
                            <td class="unit">
                            </td>
                            <td class="qty" style="color:green;font-family:Century Gothic;font-size:16px">{{$extra_room2 ->price}} €
                            <br><br>
                            <h6 style="color:gray;font-family:Century Gothic;font-size:16px">*{{$extra_room2 ->infoprice1}}</h6>
                             
                            </td>
                            @guest
                            <td class="total"><a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a></td>
                            @else
                            <td class="total"><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</button></td>
                            @endguest
                        </tr>
        @else
       <tr></tr>               
        @endif
				</tbody>
			</table>  
      <div class="row">
     
      <div class="col">

          <div class="float-right"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                  
         </div>
          <div class="float-right" style="color:red;font-family:Century Gothic;font-size:16px" ><p>

                  <div style="display: none">
	                    {{ $total = 0 }}
                  </div>

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 

            @for ($i = 0; $i <$end; $i++)
          
            <div style="display: none"> {{ $total +=$data[$i] ->price }}</div>
            
            @endfor
            
            @if( (isset($extra_room2 ->price )) && (isset($extra_room ->price )))
            
            Sub-Total: {{ $total + $extra_room ->price + $extra_room2 ->price }} €<br>
            IVA: {{ ($total + $extra_room ->price + $extra_room2 ->price)*$iva }} € ({{$infoiva}}) <br>
            Total: {{ ($total + $extra_room ->price + $extra_room2 ->price) + (($total + $extra_room ->price + $extra_room2 ->price)*$iva )}} €
            
            <input  type='hidden' value={{  ( $total + $extra_room->price + $extra_room2 ->price) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room ->price + $extra_room2 ->price) + (($total + $extra_room ->price + $extra_room2 ->price)*$iva )}} name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room ->price + $extra_room2 ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
            @endif

            @if ( (isset($extra_room ->price)) && (!isset($extra_room2 ->price )) ) 


           
            Sub-Total: {{$total + $extra_room ->price }} €<br>
            IVA: {{ ($total + $extra_room ->price)*$iva }} € ({{$infoiva}}) <br>

            Total: {{ ($total + $extra_room ->price) + (($total + $extra_room ->price)*$iva)}} €
            <input  type='hidden' value={{  ($total + $extra_room ->price) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room ->price) + (($total + $extra_room ->price)*$iva)}}  name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 

            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  

            @endif
           
            @if ( (!isset($extra_room ->price)) && (isset($extra_room2 ->price )) ) 
            
            
            Sub-Total: {{ $total + $extra_room2 ->price }} €<br>
            IVA:  {{ ($total + $extra_room2 ->price)*$iva}} € ({{$infoiva}}) <br>
            Total: {{ ($total + $extra_room2 ->price) + (($total + $extra_room2 ->price)*$iva) }} € 

            <input  type='hidden' value={{  ($total + $extra_room2 ->price) }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ ($total + $extra_room2 ->price) + (($total + $extra_room2 ->price)*$iva) }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total + $extra_room2 ->price)*$iva }} name='iva'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  

            <input type='hidden'  value={{ app()->getLocale() }}  name="lang"  style="width:20px height:5px;"/> 
            
            @endif 

              
            @if ( (!isset($extra_room ->price)) && (!isset($extra_room2 ->price) ) ) 

            @if ( ($total == 0) or (!isset($total)) )
            @else
           
            Sub-Total: {{$total }} €<br>
            IVA: {{ ($total)*$iva}} € ({{$infoiva}}) <br>
            Total: {{ $total + (($total)*$iva )}} €</span>
            
            
            <input  type='hidden' value={{$total }}  name='total'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value= {{ $total + (($total)*$iva )}}  name='totalfinal'  style=" width:20px; height:5px;"/> 
            <input  type='hidden' value={{ ($total)*$iva }}  name='iva'  style=" width:20px; height:5px;"/>
            <input  type='hidden' value={{ $infoiva }}  name='infoiva'  style=" width:20px; height:5px;"/>  
           

            @endif
           
            <input  type='hidden' value={{  ($total) }}  name='total'  style=" width:20px; height:5px;font-family:Century Gothic;font-size:16px"/> 
            @endif 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     
      </div>
      
</div>
      </div>
             
            <div  class=" pull-right">
            @if ( ($total == 0) or (!isset($total)) )

            @else
            @guest
           
            <span class="pull-right">
             <a href="{{ route('login') }}" class="btn btn-xs btn-success pull-right" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</a>
               </span>            
              @else
              <span class="pull-right">
                 <button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:16px">{{ __('messages.Reserva') }}</button>  
                 </span>                
             @endguest

            @endif 
            <div>
     
      </form>
		</div>
		</div>
    </div>  
      <br><br><br>
      <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url({{url('/storage/'. $posts[2]->picturehotel )}});"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo1') }}</h2>
          <p class="lead mb-0" style="font-family:Century Gothic;">{{ __('messages.Cuerpo1') }}</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url({{url('/storage/'. $posts[3]->picturehotel )}});"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo2') }}</h2>
          <p class="lead mb-0" style="font-family:Century Gothic;">{{ __('messages.Cuerpo2') }}</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url({{url('/storage/'. $posts[4]->picturehotel )}});"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo3') }}</h2>
          <p class="lead mb-0" style="font-family:Century Gothic;">{{ __('messages.Cuerpo3') }}</p>
        </div>
      </div>
    </div>


    
  </section>


</body>
<br><br><br>

@endsection
@section('footer')
@endsection


