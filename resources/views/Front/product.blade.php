 @extends('Front.layouts.app')
 @section('content')
  <!-- ======= Services Section ======= -->
        <section id="products" class="services bg-light">
            <div class="container">

                <div class="section-title" style="padding-top: 95px;">
                    <h2>Products</h2>

                </div>
                <div class="dis-grid">
                    @foreach ($products as $product)
                        <div class="grid-items">
                            <div class="icon-box shadow rounded-4">
                                <div class="icon"><i class="fas fa-pills"></i></div>
                                <h4><a href="{{ route("front.product.detail",$product->id) }}" >{{ $product->title ?? "" }}</a></h4>
                            </div>
                        </div>
                    @endforeach
                    
                </div>

            </div>
        </section><!-- End Services Section -->

@endsection