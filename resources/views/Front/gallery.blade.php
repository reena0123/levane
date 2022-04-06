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

                    @foreach ($gallery as $_gallery)
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item">
                                <a href="{{ asset("storage/$_gallery->images") }}" class="galelry-lightbox">
                                    <img src="{{ asset("storage/$_gallery->images") }}" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    @endforeach

                    



                </div>

            </div>
        </section><!-- End Gallery Section -->

@endsection