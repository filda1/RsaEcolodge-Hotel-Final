@extends('layouts/app1')

 
@include('layouts/head7')
@section('head')


<style>

.search-sec{
    padding: 2rem;
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

</style>  


<body>

<br><br>
<section>
<div class="container">

<div class="row" style="max-width:3000px;"
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
            </div>
            <div class="row">
                <div class="text-center">
                    <img src="" alt="" width="180" height="150">
                    <h1></h1>
                </div>
                <br><br><br<br><br><br>
                </span>
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

                            <input  type='hidden' value= {{$name_extraroom}}   name="name_extraroom"  style="width:20px;height:5px;"/>

                                              
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

             @if(($name_extraroom2 !== 0))

                     <tr>
                          <td class="col-md-9"><em>  {{$name_extraroom2}} </em></h4></td>
                          <td class="col-md-1" style="text-align:center"> {{$person_roomindividual}}x</td>
                          <td class="col-md-1 text-center">€{{($price_extraroom2)}}</td>
                          <td class="col-md-1 text-center">€{{$totalfinal}}</td>
                    </tr>

                    <input  type='hidden' value={{$id_extraroom2}} name=" id_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 
                                
                              <input  type='hidden' value={{($price_extraroom2)}} name=" price_extraroom2"  style="  width:20px; 
                                  height:5px;"/> 

                            <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="width:20px;height:5px;"/>

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
                
                <input type='hidden' value={{ $checkin }} name="checkin"  style="width:1px;height:1px;"/> 
                                        
                <input  type='hidden' value={{ $checkout }} name="checkout"  style="  width:20px;height:5px;"/> 
                <input  type='hidden' value={{$name_extraroom}}   name="name_extraroom"  style="width:20px;height:5px;"/>
                <input  type='hidden' value={{$name_extraroom2}}   name="name_extraroom2"  style="width:20px;height:5px;"/>
                
                <br>
                <div align="left"><button type="submit" class="btn btn-success btn-xs" style="background-color: #47775D;font-family:Century Gothic;font-size:15px">CONTINUE</button></div>
                </form>
                <br>
                
            </div><br>
            <br><br><br><br><br><br><br><br><br><br>
            <div>
                    <h1 style="text-align:center;">
                       
                    </h1>
                    
                </div>
        
 
            </section>


</body>

@section('footer')
@endsection