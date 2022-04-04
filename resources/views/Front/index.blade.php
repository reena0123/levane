

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
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to Levane</h1>
            <h2 class="w-md-50 w-sm-75"> A science-led global healthcare company.</h2>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 offset-md-3 d-flex align-items-stretch">
                        <div class="content shadow">
                            <h3 class="text-center">What is Levane?</h3>
                            <p>
                                We are a science-led global healthcare company with a special purpose to improve the quality of human life by helping people do more, feel better, live longer.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

       <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">
                <div class="section-title">
                    <h2>About US</h2>

                </div>
                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">

                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>We are in a mission with a special purpose to improve the quality of human life.</h3>
                        <p>We give top notch generic and branded medicines at reasonable prices for patients and specialists. Our medicines have the sign of innovation based products and cover the full scope of dose structures, including tablets and injectables. We provide a range of over-the-counter (OTC) / consumer healthcare products.</p>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-podcast"></i></div>
                            <h4 class="title"><a href="">Our Mission</a></h4>
                            <p class="description">To give unrivaled quality medical care benefits that: PATIENTS suggest to loved ones, PHYSICIANS prescribes for their patients, PURCHASERS select for their clients, EMPLOYEES are pleased with, and INVESTORS look for long haul returns.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-stopwatch"></i></div>
                            <h4 class="title"><a href="">Our History</a></h4>
                            <p class="description">Levane Healthcare Pvt Ltd is established in the year 2021.Everyday we work on achieving our goal and satisfy our customers.</p>
                        </div>


                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="products" class="services bg-light">
            <div class="container">

                <div class="section-title">
                    <h2>Products</h2>

                </div>
                <div class="dis-grid">
                    @foreach ($products as $product)
                        <div class="grid-items">
                            <div class="icon-box shadow rounded-4">
                                <div class="icon"><i class="fas fa-pills"></i></div>
                                <h4><a href="{{ route("front.product.detail",$product->id) }}">{{ $product->title ?? "" }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                    
                </div>



            </div>
        </section><!-- End Services Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2>Careers</h2>
                    <h4>Come Work With Us.</h4>
                    <p>We as a company value our employees as much as we value our customers. We offer you to come work with us and not for us.
                        We are always interested in listening to what our employees have to offer for the betterment of the company and increase our work efficiency to make sure that everything we do together gets us the best outcome possible.
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Employees Feedback</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Regular Discussion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Helping out Each Other</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">What We Look For</a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Employees Feedback</h3>

                                        <p>For any company to work smoothly and go with the flow, employees feedback is one of the most important things to consider. We all work as a team and everyone's feedback counts</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Regular Discussion</h3>

                                        <p>Team meetings and discussion are the best way to sort out any issue that come in our way. There is not a single problem in the world that cannot be solved. We just need to discuss it with out team.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Helping out Each Other</h3>

                                        <p>Co-working helps us out to overcome the problems we are facing in the company. As a team we consider everything as our responsibility and to help out our co-workers is all we need.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>What We Look For</h3>

                                        <ul>
                                            <li>Passion for the role for which you are applying</li>
                                            <li>A focus on goals and a desire to overcome you goals</li>
                                            <li>Comfort working in a new environment</li>
                                            <li>A desire to learn, grow, and deliver results</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->



        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">
                <div class="section-title">
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

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title">
                    <h2>Gallery</h2>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-1.jpg" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-2.jpg" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-3.jpg" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="assets/img/gallery/gallery-4.jpg" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>




                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact Us</h2>

                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=Wave%201st%20Silver%20Tower%20Sector-18%20Noida,%20U.P.%20201301&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Wave 1st Silver Tower, Sector-18, Noida, U.P. 201301, India</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@levane.in</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>0612-3565334</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="#" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <!--                                <div class="error-message"></div>-->
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

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