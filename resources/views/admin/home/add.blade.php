@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/typography.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/katex.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/editor.css') }}" />
<style type="text/css">
    div#cke_notifications_area_description {
        display: none;
    }
    .img_Preview{
        margin-top: 15px;
        float: left;
        margin-left: 5px;
        margin-right: 5px;
        border: 3px solid #ddd;
    }
</style>
@stop

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Home Page Section</h5>
        <div class="card-body pt-0">
            <form id="sliderForm" method="POST" action="{{ route('enterprise-admin.home.store') }}" enctype="multipart/form-data">
                @csrf
                @if(!empty($home->id))
                    <input type="hidden" name="recID" id="recID" value="{{$home->id}}" >
                @else
                    <input type="hidden" name="recID" id="recID" value="0" >
                @endif
                <div class="row mt-1 g-5">

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="pre_heading" name="pre_heading" placeholder="Enter pre heading" @if(!empty($home->pre_heading)) value="{{$home->pre_heading}}" @endif />
                            <label for="pre_heading">Pre Heading</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="heading" name="heading" placeholder="Enter heading" @if(!empty($home->heading)) value="{{$home->heading}}" @endif />
                            <label for="heading">Heading</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="description">Description</label>
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="description" name="description" placeholder="Enter description">@if(!empty($home->description)){{$home->description}}@endif</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="image" id="image" />
                            <label for="image">Image</label>
                        </div>
                        @if(!empty($home->image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/home_page_images') }}/{{ $home->image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="button_name" name="button_name" placeholder="Enter button name" @if(!empty($home->button_name)) value="{{$home->button_name}}" @endif />
                            <label for="button_name">Button Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="button_link" name="button_link" placeholder="Enter button link" @if(!empty($home->button_link)) value="{{$home->button_link}}" @endif />
                            <label for="button_link">Button Link</label>
                        </div>
                    </div>


                    <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Product Section</h5>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="product_pre_heading" name="product_pre_heading" placeholder="Enter product pre heading" @if(!empty($home->product_pre_heading)) value="{{$home->product_pre_heading}}" @endif />
                            <label for="product_pre_heading">Product pre heading</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="product_heading" name="product_heading" placeholder="Enter product heading" @if(!empty($home->product_heading)) value="{{$home->product_heading}}" @endif />
                            <label for="product_heading">Product Heading</label>
                        </div>
                    </div>


                    <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Infrastructure Section</h5>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="infra_heading" name="infra_heading" placeholder="Enter infrastructure heading" @if(!empty($home->infra_heading)) value="{{$home->infra_heading}}" @endif />
                            <label for="infra_heading">Infrastructure Heading</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="infra_pre_heading" name="infra_pre_heading" placeholder="Enter infrastructure pre heading" @if(!empty($home->infra_pre_heading)) value="{{$home->infra_pre_heading}}" @endif />
                            <label for="infra_pre_heading">Enter Infrastructure Pre Heading</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="infra_image" id="infra_image" />
                            <label for="infra_image">Image</label>
                        </div>
                        @if(!empty($home->infra_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/home_page_images') }}/{{ $home->infra_image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>


                    <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Page Section</h5>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="page_title" name="page_title" placeholder="Enter page title" @if(!empty($home->page_title)) value="{{$home->page_title}}" @endif />
                            <label for="page_title">Page Title</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="seo_title" name="seo_title" placeholder="Enter seo title" @if(!empty($home->seo_title)) value="{{$home->seo_title}}" @endif />
                            <label for="seo_title">SEO Title</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="seo_description" name="seo_description" placeholder="Enter seo description">@if(!empty($home->seo_description)){{$home->seo_description}}@endif</textarea>
                            <label for="seo_description">SEO Description</label>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    @if(!empty($home->id))
                        <button type="submit" class="btn btn-primary me-3">Update</button>
                    @else
                        <button type="submit" class="btn btn-primary me-3">Save</button>
                    @endif
                    <a href="{{ route('enterprise-admin.corevalue') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'description' );
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#sliderForm").validate({
            rules: {
                heading: {
                    required: true
                },
                description: {
                    required: true
                }
            },
            messages: {
                heading: {
                    required: "Please enter heading!"
                },
                description: {
                    required: "Please enter the short description!"
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter($(element).parents('div.form-floating')); 
            }
        });
    });
</script>
@stop