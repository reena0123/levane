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
                            <h4>Contact Listing</h4>
                            
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol> --}}
                        {{-- <a href="{{ route('') }}" class="btn btn-primary"> Add More</a> --}}
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
                                                <th style="color:#000; font-size:14px;">Email</th>
                                                <th style="color:#000; font-size:14px;">Subject</th>
                                                <th style="color:#000; font-size:14px;">Message</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contact as $key => $_contact)
                                                
                                                <tr style="color:#837e7e;">
                                                    <th>{{ ++$key }}</th>
                                                    <td>{{ $_contact->name ?? '' }}</td>
                                                    <td>{{ $_contact->email ?? '' }}</td>
                                                    <td>{{ $_contact->subject ?? '' }}</td>
                                                    
                                                    <td>{{Str::limit($_contact->message ?? '', $limit = 100) }}</td>
                                                    
                                                    
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

@endsection