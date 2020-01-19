@extends('layouts/app1')

<style>
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



@include('layouts/head7')

<body>
<div class="container">
<section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <!-- El Modal -->   
          <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('environment') }}"><i class="fa fa-leaf"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('environment') }}" style="color:#191919;;font-family:Century Gothic;" >  {{ __('messages.TituloPrincipal1') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('services') }}"><i class="far fa-building"  style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('services') }}" style="color:#191919;;font-family:Century Gothic;" >  {{ __('messages.TituloPrincipal2') }}</a></h3>
      
            
          </div>
        </div>

        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class="m-auto" href="{{ route('hotels') }}"><i class="far fa-check-circle" style="color:#47775D;"></i></a>
            </div>
          
            <h3 ><a href="{{ route('hotels') }}" style="color:#191919;;font-family:Century Gothic;" >  {{ __('messages.TituloPrincipal3') }}</a></h3>
      
            
          </div>
        </div>
        </div>
        
 
  </section>

  <h3 style="color:#47775D;font-weight:bold;font-family:Century Gothic;">{{ __('messages.Titulo_ambiente') }}</h3><br>
 <p style="font-family:Century Gothic;font-size:18px">
 {{ __('messages.Cuerpo_ambiente') }}

 </p>

 <h3><a href="" ></h3>
  </div>





  <div class="container">
      <div class="row">
           
        <div class="">
    <div class="col">
    <br>
    <!--  <div class="row">
            <a href="{{url('/storage/'. $posts[45]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[45]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[46]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[46]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[47]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[47]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[48]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[48]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[49]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[49]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[50]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[50]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <div class="row">
            <a href="{{url('/storage/'. $posts[51]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[51]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[52]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[52]->picturehotel )}}" class="img-fluid">
            </a>
            <a href="{{url('/storage/'. $posts[53]->picturehotel )}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
                <img src="{{url('/storage/'. $posts[53]->picturehotel )}}" class="img-fluid">
            </a>
        </div>
        <br>
    </div> -->  

   
    <div class="col" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
        
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[45]->picturehotel )}}" alt="slide 1"  width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[45]->info }}</p>
                </div>

                  </div>
               
                </div>
                
              
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[46]->picturehotel )}}" alt="slide 2" width="700"> 
                    </a>

                    <div class="carousel-caption" style="right: -152%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[46]->info }}</p>
                </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[47]->picturehotel )}}" alt="slide 3" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[47]->info }}</p>
                </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[48]->picturehotel )}}" alt="slide 4" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -160%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[48]->info }}</p>
                </div>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3  ">
              <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[49]->picturehotel )}}" alt="slide 5" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[49]->info }}</p>
                </div>
                  </div>
                </div>
            </div>
            <!--  <div class="carousel-item col-md-3 active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[50]->picturehotel )}}" alt="slide 6" width="700">
                    </a>
                    <div class="carousel-caption" style="right:-195%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[50]->info }}</p>
                </div>
                  </div>
                  
                </div>
                
               -->   
           
            </div>
            <div class="carousel-item col-md-3  ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
                      <img class="" src="{{url('/storage/'. $posts[50]->picturehotel )}}" alt="slide 7" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px;color:gray;">{{$posts[50]->info }}</p>
                </div>
                  </div>
                </div>
            </div>
             <div class="carousel-item col-md-3 active" >
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[51]->picturehotel )}}" alt="slide 8" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[51]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

              <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 9" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[52]->picturehotel )}}" alt="slide 9" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[52]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>


            <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 10" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[53]->picturehotel )}}" alt="slide 10" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[53]->info }}</p>
                </div>
                  </div>
                  
                </div>
            </div>

            <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 11" class="thumb">
                     <img class="" src="{{url('/storage/'. $posts[70]->picturehotel )}}" alt="slide 11" width="700">
                    </a>

                    <div class="carousel-caption" style="right: -295%;">
                 <h3 class="h3-responsive"></h3>
                                 
                    <p style="font-family:Century Gothic;font-size:16px">{{$posts[70]->info }}</p>
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
<p style="font-family:Century Gothic;font-size:18px">
 {{ __('messages.Cuerpo_ambiente2') }}

 </p>


<!-- /.row -->

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



  </script>
@endsection