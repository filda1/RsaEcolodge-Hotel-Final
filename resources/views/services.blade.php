@extends('layouts/app1')

 
@include('layouts/head4')
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
    font-size: 18px;
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


@media (min-width: 738px) {

/* show 3 items */
.carousel-inner .active,
.carousel-inner .active + .carousel-item,
.carousel-inner .active + .carousel-item + .carousel-item,
.carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
    display: block;
}

.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
.carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
    transition: none;
}

.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  position: relative;
  transform: translate3d(0, 0, 0);
}

.carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: absolute;
    top: 0;
    right: -95%;
    z-index: -1;
    display: block;
    visibility: visible;
}

/* left or forward direction */
.active.carousel-item-left + .carousel-item-next.carousel-item-left,
.carousel-item-next.carousel-item-left + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
.carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(-100%, 0, 0);
    visibility: visible;
}

/* farthest right hidden item must be abso position for animations */
.carousel-inner .carousel-item-prev.carousel-item-right {
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    display: block;
    visibility: visible;
}

/* right or prev direction */
.active.carousel-item-right + .carousel-item-prev.carousel-item-right,
.carousel-item-prev.carousel-item-right + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
.carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
    position: relative;
    transform: translate3d(50%, 0, 0);
    visibility: visible;
    display: block;
    visibility: visible;
}

}


/* Bootstrap Lightbox using Modal */

#profile-grid { overflow: auto; white-space: normal; } 
#profile-grid .profile { padding-bottom: 40px; }
#profile-grid .panel { padding: 0 }
#profile-grid .panel-body { padding: 15px }
#profile-grid .profile-name { font-weight: bold; }
#profile-grid .thumbnail {margin-bottom:1px;}
#profile-grid .panel-thumbnail { overflow: hidden; }
#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}

</style>  



<body>
<div class="container">
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fa fa-leaf" style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('environment') }}"style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal1') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building" style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('services') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal2') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('hotels') }}"><i class="far fa-check-circle" style="color:#47775D;"> </i></a>
            </div>
          
            <h3 ><a href="{{ route('hotels') }}" style="color:#191919;font-family:Century Gothic;font-weight:bold;" >  {{ __('messages.TituloPrincipal3') }}</a></h3>
      
            
          </div>
        </div>
        </div>
        
 
  </section>
  </section>

<div>
  <img class="" src="{{url('/storage/'. $posts[72]->picturehotel )}}" alt="slide 7" width="700">

  </div>
  <br>

<div>
<h4><p style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo_Instalacion') }}</p></h4><br>
<h5><label style="color:green; font-family:Century Gothic;font-size:18px">{{ __('messages.CasaPrincipal') }}</label><label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCasaPrincipal') }}</label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.CasaComboio') }}</label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCasaComboio') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Recepcomloja') }}</label><label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cRecepcomloja') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Restaurante/Bar') }}</label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cRestaurante/Bar') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Saladeestar') }} </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cSaladeestar') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Piscina') }} </label> <label style="font-family:Century Gothic;font-size:18px"> –{{ __('messages.cPiscina') }} </label></h5>
<hr>







  <div class="container">
      <div class="row">
          <!-- <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="" data-toggle="modal" data-target="#product_viewS2"></i>
            </div>
            <h3  ><a data-toggle="modal" data-target="#product_viewS2" style="color:#7AAC8F;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Galeria') }}...</a></h3>
            <div class="modal fade product_view" id="product_viewS2">
    <div class="modal-dialog">
        <div class="modal-content">
      
        <div class="row justify-content-center">
    <div class="col-md-8">
    <br>
        <div class="row">
            <a href="{{url('/storage/'. $posts[54]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[54]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[55]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[55]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[56]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[56]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[57]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[57]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[58]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[58]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[59]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[59]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[60]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[60]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[61]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[61]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[62]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[62]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <br>
    </div>
</div>
</div>
</div>
</div> -->   
          

<div class="col" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
        
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[54]->picturehotel )}}" alt="slide 1"  width="700">
                    </a>

                    <div class="carousel-caption" style="right: -190%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[54]->info }}</p>
                </div>

                  </div>
               
                </div>
                
              
            </div>

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[55]->picturehotel )}}" alt="slide 2" width="700"> 
                    </a>

                    <div class="carousel-caption" style="right: -152%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[55]->info }}</p>
                </div>
                  </div>
                </div>
            </div>


            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[56]->picturehotel )}}" alt="slide 2" width="700"> 
                    </a>

                    <div class="carousel-caption" style="right: -152%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[56]->info }}</p>
                </div>
                  </div>
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[57]->picturehotel )}}" alt="slide 3" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[57]->info }}</p>
                </div>
                  </div>
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[58]->picturehotel )}}" alt="slide 4" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[58]->info }}</p>
                </div>
                  </div>
                </div>
            </div>

            <div class="carousel-item col-md-3  ">
              <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[59]->picturehotel )}}" alt="slide 5" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[59]->info }}</p>
                </div>
                  </div>
                </div>
            </div>
      
           
            
            <div class="carousel-item col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[60]->picturehotel )}}" alt="slide 7" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;">{{$posts[60]->info }}</p>
                </div>
                  </div>
                </div>
            </div>

             <div class="carousel-item col-md-3 " >
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[61]->picturehotel )}}" alt="slide 8" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[61]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

              <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 9" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[62]->picturehotel )}}" alt="slide 9" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[62]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>


            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 10" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[73]->picturehotel )}}" alt="slide 10" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[73]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[74]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[74]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[75]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[75]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[76]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[76]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>


            <div class="carousel-item col-md-3  active ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[82]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[82]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[77]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[77]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[78]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[78]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[79]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[79]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3   ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[80]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[80]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[81]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[81]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>


          

           

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


</div>
</div>
</div>

<br>
<h4><p style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo_Servicio') }} </p></h4><br>
<h5><label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Lavandaria') }} </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cLavandaria') }} </label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Serviçodequartos') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cServiçodequartos') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Wi-figratuito') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cWi-figratuito') }} </label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Organizaçãodeeventos') }}   </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cOrganizaçãodeeventos') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Transfersaeroporto') }} </label> <label style="font-family:Century Gothic;font-size:18px"> –{{ __('messages.cTransfersaeroporto') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Aluguerdeviaturas') }}   </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cAluguerdeviaturas') }} </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Estacionamento gratuito') }}  </label><br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Check-inde') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCheck-inde') }} </label> <br><br>
<label style="color:green;font-family:Century Gothic;font-size:18px">{{ __('messages.Check-outde') }}  </label> <label style="font-family:Century Gothic;font-size:18px"> – {{ __('messages.cCheck-outde') }} </label></h5><br>
</div> 
</div>
</body>

@section('footer')

<script language="javascript">
$('#myCarousel').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 1;
    var totalItems = $('.carousel-item').length;
  
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});



@endsection