 @extends('Front.layouts.app')
 @section('content')
 <style>
      .testimonial{
text-align: center;
padding: 85px 50px 45px 70px;
margin: 70px 15px 35px;
background: #f9f9f9;
box-shadow: 8px 4px 0 0 #77a9dd;
position: relative;
}
.testimonial .pic{
width: 200px;
/*height: 200px;*/
border: 5px solid #77a9dd;
margin: 0 auto;
position: absolute;
top: -60px;
left: 0;
right: 0;
}
.testimonial .pic img{
width: 100%;
height: auto;
}

.testimonial .testimonial-profile{
position: relative;
margin: 30px 0 10px 0;
}
.testimonial .testimonial-profile:after{
content: "";
width: 50px;
height: 2px;
background: #77a9dd;
margin: 0 auto;
position: absolute;
bottom: -10px;
left: 0;
right: 0;
}

.owl-theme .owl-controls{
margin-top: 10px;
}
.owl-theme .owl-controls .owl-page span{
background: #5e5f5f;
opacity: 1;
transition: all 0.4s ease 0s;
}
.owl-theme .owl-controls .owl-page.active span,
.owl-theme .owl-controls.clickable .owl-page:hover span{
background: #77a9dd;
}
.owl-theme .owl-controls .owl-page.active span{
width: 22px;
height: 12px;
}
 </style>
 	<!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title" style="padding-top: 95px;">
                    <h2>Blog</h2>

                </div>
                <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{ asset('storage/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                    </div>
                    
                    <div class="testimonial-profile">
                        <h3 class="title">williamson</h3>
                        
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{ asset('storage/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                    </div>
                   
                    <div class="testimonial-profile">
                        <h3 class="title">Kristina</h3>
                        
                    </div>
                </div>
 
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{ asset('storage/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                    </div>
                   
                    <div class="testimonial-profile">
                        <h3 class="title">Steve Thomas</h3>
                        
                    </div>
                </div>
                <div class="testimonial">
                    <div class="pic">
                        <img src="{{ asset('storage/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                    </div>
                    
                    <div class="testimonial-profile">
                        <h3 class="title">Steve Thomas</h3>
                        
                    </div>
                </div>
            </div>

            </div>
        </section><!-- End Testimonials Section -->

@push('script')
<script>
   $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,2],
        itemsTablet:[768,2],
        itemsMobile:[650,1],
        pagination:true,
        navigation:false,
        slideSpeed:1000,
        autoPlay:true
    });
</script>
@endpush

@endsection