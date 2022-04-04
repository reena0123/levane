@extends('Admin.layouts.app')
@section('content')
	<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Products</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol> --}}
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        
                        
                        <div class="card">
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('admin.product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                                    	@csrf
                                        @method('PUT')
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="row">
                                            <div class="col-sm-6">
                                            	<label class="">Title</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $product->title) }}">

                                                @error('title')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror

                                            </div>

                                            <div class="col-sm-6">
                                                <label class="">Is Featured</label>
                                                <select id="inputState" name="is_featured" class="form-control" required>

                                                    <option selected="">Choose...</option>

                                                    <option value="0"{{ $product->is_featured==0 ? 'selected':'' }}>No</option>

                                                    <option value="1" {{ $product->is_featured==1 ? 'selected':'' }}>Yes</option>

                                                </select>
                                                @error('is_featured')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-sm-6" style="padding-top: 30px">
                                                <label class="">PDF Title</label>
                                                <input type="text" class="form-control @error('pdf_title') is-invalid @enderror" name="pdf_title" value="{{ old('pdf_title', $product->pdf_title) }}">

                                                @error('pdf_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-sm-6 mt-2 mt-sm-0" style="padding-top: 30px">
                                            	<label class="">Upload File</label>
                                                
	                                            <div class="custom-file" style="padding-bottom: 10px;">
	                                                <input type="file" class="custom-file-input @error('pdf_file') is-invalid @enderror" name="pdf_file" value="{{ old('pdf_file', $product->pdf_file) }}">
                                                    
	                                                <label class="custom-file-label">Choose file</label>
	                                            </div>

	                                            @error('pdf_file')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror

                                                <a href="{{ asset("storage/{$product->pdf_file}") }}" target="_blank" style="padding-top: 10px; color: #000;">{{ $product->pdf_file?'Click me':'' }}</a>
                                      
                                            </div>
                                            

                                            <div class="col-sm-12 mt-2 mt-sm-0" style="padding-top: 30px">
                                            	<label class="">Description</label>
                                               <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="4" id="description">
                                               	{!! old('description',$product->description) !!}
                                               </textarea>

                                               @error('description')
												<div class="invalid-feedback">{{ $message }}</div>						
												@enderror
                                            </div>
                                            

                                            <div class="col-sm-12 justify-content" style="padding-top: 35px;">
                                            	<center>
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

											
											<a href="{{ route('admin.product.index') }}" class="btn btn-danger mt-3">Cancel</a>
											</center>
                                        	</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

@push('script')
	<script>
		@if (Session::has('success'))
			
			Swal.fire({
	  			icon: 'success',
	  			title: 'Success',
	  			text: '{{ Session::get('success') }}',
			});
		@endif
        @if (Session::has('error'))
            
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ Session::get('error') }}',
            });
        @endif
	</script>
@endpush
@endsection