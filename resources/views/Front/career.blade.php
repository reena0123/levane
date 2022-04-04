 @extends('Front.layouts.app')
 @section('content')
 
 	 <!-- ======= Departments Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" style="padding-top: 95px;">
                    <h2>Careers</h2>
                    
                </div>

                <div class="row gy-4">
                     <div class="col-lg-4">
                        <h4>Come Work With Us.</h4>
                    <p>We as a company value our employees as much as we value our customers. We offer you to come work with us and not for us.
                        We are always interested in listening to what our employees have to offer for the betterment of the company and increase our work efficiency to make sure that everything we do together gets us the best outcome possible.
                    </p>
                     </div>
                    <div class="col-lg-8">
                        <form action="{{ route('front.career.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf

                            
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="mobile_number"  placeholder="Mobile Number" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="date" class="form-control" name="dob"placeholder="Date of Birth" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <select name="gender" class="form-select" required>
                                        <option selected="">Select Gender...</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                   <select name="qualification"  class="form-select" required>
                                        <option selected="">Select Highest Qualification...</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="BCA">BCA</option>
                                        <option value="MCA">MCA</option>
                                    </select>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="city" placeholder="city" required>
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <input type="text" class="form-control" name="state" placeholder="state" required>
                                </div>
                                <div class="col-md-12 form-group mt-3">
                                    <input type="file" class="form-control" name="resume" placeholder="upload resume" required>
                                    <label>Upload Resume</label>
                                </div>
                            </div>
                            
                            <div class="text-center" style="padding-top: 20px;"><button type="submit" class="btn btn-primary">Send Message</button></div>
                        </form>
                    </div>
                     
                </div>

            </div>
        </section><!-- End Departments Section -->

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