@extends('layouts/app1')

 
@include('layouts/head7')


@section('head')

<style>

</style>  


<body>

<br><br>
<section>


<div class="container">
<br><br>
<section>
<div class="container">

<div class="row" style="max-width:3800px;"
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong>http://rsaecolodge.pt</strong>
                        <br>
                        Roça Santo Antonio, Sao Tome Island
                        <br>
                        GPS: 6PMG+P9 Santo António
                        <br>
                        <abbr title="Phone">P:</abbr>(+239) 998 01 70 / (+239) 998 66 52
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>{{$checkin}}/ {{$checkout}}</em>
                        
                    </p>
                    <p>
                        <em></em>
                        
                    </p>
                    <p>
                        <em>Ref #: {{$uniqid}}</em>
                    </p>
                </div>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
            <br><br><br>
                <div class="text-left">
                                             
                <img src="" alt="" width="180" height="150">
                    <h1></h1><br>
                </div>
                <br><br><br<br><br><br>
                </span><span>
                <div class="row">
          
        <form action="/reserve" method="POST" role="reserve" >
           {{ csrf_field() }}
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Bedroom</th>
                            <th >Person</th>
                            <th class="text-center" >Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
             @if(($fin!==0) && isset($data))
                    <tbody>
         
                    @for ($i =0; $i<$end; $i++)
                        <tr>
                            <td class="col-md-9"><em>{{$data[$i] ->name_room}}</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> {{$data[$i] ->person}}x </td>
                            <td class="col-md-1 text-center">€{{$data[$i] ->price}} </td>
                            <td class="col-md-1 text-center">€{{$totalfinal}}</td>
                        </tr>
                       
                        <input  type='hidden' value={{$data[$i]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{$checkin}} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 

                    @endfor
                   
              @endif
             @if(($name_extraroom !== 0))

                     <tr>
                            <td class="col-md-9"><em> {{$name_extraroom}}</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> {{$person_roomindividual}}x </td>
                            <td class="col-md-1 text-center">€{{($price_extraroom)}}</td>
                            <td class="col-md-1 text-center">€{{$totalfinal}}</td>
                        </tr>

                        
                        <input  type='hidden' value={{$id_extraroom}} name=" id_extraroom"  style="width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value= {{($price_extraroom)}}  name="price_extraroom"  style="width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value= {{ $name_extraroom }}   name="name_extraroom"  style="width:20px; 
                                  height:5px;"/>

                                              
                          <input type='hidden' value={{$checkin}}   name="checkin"  style="width:1px;height:1px;"/> 
                                        
                           <input  type='hidden' value={{$checkout}}  name="checkout"  style="  width:20px; 
                                            height:5px;"/> 

                          <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                        
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="width:20px; 
                                  height:5px;"/> 

             @endif

             @if(($id_extraroom2 !== 0))

                     <tr>
                          <td class="col-md-9"><em>  {{$name_extraroom2}} </em></h4></td>
                          <td class="col-md-1" style="text-align: center"> {{$person_roomindividual}}x</td>
                          <td class="col-md-1 text-center">€{{($price_extraroom2)}}</td>
                          <td class="col-md-1 text-center">€{{$totalfinal}}</td>
                    </tr>

                    <input  type='hidden' value={{$id_extraroom2}} name=" id_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value={{($price_extraroom2)}} name=" price_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value={{ $name_extraroom2 }}   name="name_extraroom2"  style="  width:20px; 
                                  height:5px;"/>

                             <input type='hidden' value={{$checkin}}  name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                            height:5px;"/> 
                                 
                             <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                      
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 


             @endif


                     <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>€{{$total}}</strong>
                            </p>
                            <p>
                                <strong>€{{$iva}} ({{$infoiva}} )</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>€{{$totalfinal}}</strong></h4></td>
                            <td>   </td>
                          
                        </tr>     
                    </tbody>
                    
                </table>
                <input  type='hidden' value={{ $total}}  name='total'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value= {{ $totalfinal }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $iva }} name='iva'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $uniqid }} name='uniqid'  style=" width:20px; height:5px;"/> 
                
                <input type='hidden' value={{$checkin}} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                <input  type='hidden' value={{$checkout}} name="checkout"  style="width:20px;height:5px;"/> 
                             
                
                </form>
                <br>
                
            </div><br>
            </section>

<br><br> 

<!-- Stripe -->
<div class="content">
                <div class="title m-b-md">
                <div class="row">
                <div class="text-center">
              
                    <h2></h2>
                </div>
                
                </div>
             
                <div class="links">          
                <form action="/payment" method="POST">
                    {{ csrf_field() }}

            @if(($fin!==0) && isset($data))
                  
         
                    @for ($i =0; $i<$end; $i++)
                      
                       
                        <input  type='hidden' value={{$data[$i]  ->id}}  name={{ (string)$i }}  style="  width:20px; 
                                  height:5px;"/> 
                                  
                               <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 

                               <input type='hidden' value={{$checkin}} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>

                                                  
                              <input  type='hidden' value={{ $end}}  name="end"  style="  width:20px; 
                                  height:5px;"/> 

                    @endfor
                   
              @endif
            
             @if(($name_extraroom !== 0))
       
                        <input  type='hidden' value={{$id_extraroom}} name=" id_extraroom"  style="width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value= {{($price_extraroom)}}  name="price_extraroom"  style="width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value= {{$name_extraroom}}   name="name_extraroom"  style="width:20px; 
                                  height:5px;"/>

                                              
                          <input type='hidden' value={{$checkin}}   name="checkin"  style="width:1px;height:1px;"/> 
                                        
                           <input  type='hidden' value={{$checkout}}  name="checkout"  style="  width:20px; 
                                            height:5px;"/> 

                          <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                        
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="width:20px; 
                                  height:5px;"/> 

             @endif
             @if(($id_extraroom2 !== 0))

                     
                    <input  type='hidden' value={{$id_extraroom2}} name=" id_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value={{($price_extraroom2)}} name=" price_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="  width:20px; 
                                  height:5px;"/>

                             <input type='hidden' value={{$checkin}}  name="checkin"  style="width:1px;height:1px;"/> 
                                        
                              <input  type='hidden' value={{$checkout}} name="checkout"  style="  width:20px; 
                                            height:5px;"/> 
                                 
                             <input  type='hidden' value={{ $children}}  name="children"  style="  width:20px; 
                                  height:5px;"/> 

                              <input  type='hidden' value={{ $baby}}  name="baby"  style="  width:20px; 
                                  height:5px;"/>
                                      
                            <input  type='hidden' value={{ $persona }}  name='persona'  style="  width:20px; 
                                  height:5px;"/> 


             @endif

                <input  type='hidden' value={{ $total}}  name='total'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value= {{ $totalfinal }}   name='totalfinal'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $iva }} name='iva'  style=" width:20px; height:5px;"/> 
                <input  type='hidden' value={{ $uniqid }} name='uniqid'  style=" width:20px; height:5px;"/> 
                
                <input type='hidden' value={{ $checkin }} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                <input  type='hidden' value={{ $checkout }} name="checkout"  style="width:20px;height:5px;"/> 
                <input  type='hidden' value={{ $persona }}  name='persona'  style="width:20px;height:5px;"/> 
                <input  type='hidden' value={{ $name_extraroom }}   name="name_extraroom"  style="width:20px;height:5px;"/>
                <input  type='hidden' value={{ $name_extraroom2 }}   name="name_extraroom2"  style="width:20px;height:5px;"/>
                
                
                      <script
                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key="pk_test_ePsTKshleU0JoEW7rOOh29gM00FrctsOvg"
                        data-amount={{ round($totalfinal*100)}} 
                        data-name="RSA Ecolodge"
                        data-description="Reserve"
                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                        data-locale="auto"
                        data-currency="eur">
                      </script>
                    </form>
                </div>
            </div>
        </div>
 
            </section>
            <br><br><br><br><br>
            <div class="container">
                    <h1 style="text-align:left;">
                        Thank you for your order.
                    </h1>
                    
                </div>

</body>
<br><br> <br><br> <br><br> <br><br> <br><br> <br><br> <br><br> 
@section('footer')

@endsection