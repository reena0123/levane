 @extends('Front.layouts.app')
 @section('content')
 
 	<!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" style="padding-top: 95px;">
                    <h2>Gallery</h2>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row g-0">

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('storage/assets/img/gallery/gallery-1.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-5.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('storage/assets/img/gallery/gallery-2.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-7.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('storage/assets/img/gallery/gallery-3.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="gallery-item">
                            <a href="{{ asset('storage/assets/img/gallery/gallery-4.jpg') }}" class="galelry-lightbox">
                                <img src="{{ asset('storage/assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>




                </div>

            </div>
        </section><!-- End Gallery Section -->

@endsection