@extends('Admin.layouts.app')
@section('content')
<style>
	.icon
</style>
	<div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Blog Listing</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol> --}}
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary"> Add More</a>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        
                        
                        <div class="card">
                            
                             <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                             <tr>
                                                <th style="color:#000; font-size:14px;">Id</th>
                                                <th style="color:#000; font-size:14px;">Name</th>
                                                <th style="color:#000; font-size:14px;">Image</th>
                                                <th style="color:#000; font-size:14px;">Is Featured</th>
                                                <th style="color:#000; font-size:14px;">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blog as $key => $_blog)
                                                
                                                <tr style="color:#837e7e;">
                                                    <th>{{ ++$key }}</th>
                                                    <td>{{ $_blog->name ?? '' }}</td>
                                                    <td>
                                                        <a href="" target="_blank">
                                                        <img src="{{ asset("storage/$_blog->image") }}" alt="" width="100px"></a>
                                                    </td>
                                                    <td>{{ $_blog->is_featured ?? '' }}</td>
                                                    <td>
                                                        <a href="{{ route('admin.blog.edit', $_blog->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                                        <a href="" class="btn btn-danger"
                                                            onclick="deleteBlog({{ $_blog->id }})" 
                                                        ><i class="fa fa-trash"></i></a>

                                                        <form action="{{ route('admin.blog.destroy',$_blog->id) }}" method="post" id="delete{{ $_blog->id }}"> 
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    </td>
                                                    
                                                </tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@push('script')
    <script>
        var ids = [];
        function deleteBlog(id){
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                  if (result.value) {
                    $(`#delete${id}`).submit();
                }
            });
        }

        @if (Session::has('success'))
            
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ Session::get('success') }}',
            });
        @endif
$(document).ready(function(){
        $('.deleteAll').on('click',function(){

            if(this.checked){
                $('.delete').each(function(){
                    this.checked = true;
                });
            }else{
                 $('.delete').each(function(){
                    this.checked = false;
                });
            }
        });
    
        $('.delete').on('click',function(){
            if($('.delete:checked').length == $('.delete').length){
                $('.deleteAll').prop('checked',true);
            }else{
                $('.deleteAll').prop('checked',false);
            }
        });


        
});
    </script>
@endpush
@endsection