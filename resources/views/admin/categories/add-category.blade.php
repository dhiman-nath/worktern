@extends('admin.master')


@section('body')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{route('home')}}">Dashboard</a>
        <span class="breadcrumb-item active">Add Category</span>
    </nav>
    
    <div class="sl-pagebody">
        {{--<div class="sl-page-title">
            <h5>Add Category</h5>
        </div><!-- sl-page-title -->--}}
        
        <div class="card pd-20 pd-sm-40">
            <h3 class="text-center text-success"> {{Session::get('message')}} </h3>
            
            <form action="{{route('new-category')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    
                    
                    <div class="mg-b-25">
                        <div class=" row col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Category Name: <span
                                    class="tx-danger">*</span></label>
                                    <input required class="form-control" type="text" name="name">
                                </div>
                            </div><!-- col-4 -->
                            
                            <div class=" row col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Job Title: <span
                                        class="tx-danger">*</span></label>
                                        <input required class="form-control" type="text" name="title">
                                    </div>
                                </div>
                                
                                <div class=" row col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Image: <span
                                            class="tx-danger">*</span></label>
                                            <input required class="form-control" type="file" name="image">
                                        </div>
                                    </div>
                                    
                                    <div class="row col-lg-4 mt-3">
                                        <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Status: <span
                                                class="tx-danger">*</span></label>
                                                
                                                <div class="col-md-9 radio">
                                                    <label> <input required type="radio" name="status" value="1">
                                                        Active </label>
                                                        <label> <input required type="radio" name="status" value="0">
                                                            Inactive </label>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div><!-- col-4 -->
                                            
                                        </div><!-- row -->
                                        
                                        <div class="form-group form-layout-footer">
                                            <input type="submit" class="btn btn-info mg-r-5" value="Submit Form">
                                        </div><!-- form-layout-footer -->
                                    </form>
                                </div><!-- form-layout -->
                            </div><!-- card -->
                            
                            <!-- row -->
                            
                            <!-- card -->
                            
                            <!-- sl-pagebody -->
                            @include('admin.include.footer')
                        </div>
                        @endsection
                        