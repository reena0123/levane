 @extends('Front.layouts.app')
 @section('content')
 <!-- ======= About Section ======= -->
       <section id="products" class="services bg-light">
            <div class="container">
                <div class="section-title" style="padding-top: 95px;">
                    <h2>Product Details</h2>

                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                         <div class="grid-items">
                        <div class="icon-box shadow rounded-4">
                            <div class="icon"><i class="fas fa-pills"></i></div>
                            <h4><a href="{{ asset("storage/{$product->pdf_file}") }}" download>{{ $product->title }}</a></h4>
                        </div>
                    </div>
                    </div>

                    <div class="col-xl-9 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>{{$product->title}}</h3>
                        <p>
                            {{ $product->description }}
                        </p>
                        <a href="{{ asset("storage/{$product->pdf_file}") }}" download><i class="bi bi-file-earmark-pdf"></i> {{ $product->pdf_title}}</a>

                        


                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
@endsection