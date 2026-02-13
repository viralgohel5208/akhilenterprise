@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/typography.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/katex.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/editor.css') }}" />
<style type="text/css">
    div#cke_notifications_area_description {
        display: none;
    }
    div#cke_notifications_area_intro_content {
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
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">About Page</h5>
        <div class="card-body pt-0">
            <form id="sliderForm" method="POST" action="{{ route('enterprise-admin.about.store') }}" enctype="multipart/form-data">
                @csrf
                @if(!empty($about->id))
                    <input type="hidden" name="recID" id="recID" value="{{$about->id}}" >
                @else
                    <input type="hidden" name="recID" id="recID" value="0" >
                @endif
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <label for="intro_content">Introduction Content</label>
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="intro_content" name="intro_content" placeholder="Enter introduction content">@if(!empty($about->intro_content)){{$about->intro_content}}@endif</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="intro_image" id="intro_image" />
                            <label for="intro_image">Introduction Image</label>
                        </div>
                        @if(!empty($about->intro_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/about_images') }}/{{ $about->intro_image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>


                    <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Why Choose Us Section</h5>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="pre_heading" name="pre_heading" placeholder="Enter pre heading" @if(!empty($about->pre_heading)) value="{{$about->pre_heading}}" @endif />
                            <label for="pre_heading">Pre Heading</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="heading" name="heading" placeholder="Enter heading" @if(!empty($about->heading)) value="{{$about->heading}}" @endif />
                            <label for="heading">Heading</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label for="description">Description</label>
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="description" name="description" placeholder="Enter description">@if(!empty($about->description)){{$about->description}}@endif</textarea>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="image" id="image" />
                            <label for="image">Image</label>
                        </div>
                        @if(!empty($about->image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/about_images') }}/{{ $about->image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="button_name" name="button_name" placeholder="Enter button name" @if(!empty($about->button_name)) value="{{$about->button_name}}" @endif />
                            <label for="button_name">Button Name</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="button_link" name="button_link" placeholder="Enter button link" @if(!empty($about->button_link)) value="{{$about->button_link}}" @endif />
                            <label for="button_link">Button Link</label>
                        </div>
                    </div>


                    <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Infrastructure Section</h5>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="infra_pre_heading" name="infra_pre_heading" placeholder="Enter infrastructure pre heading" @if(!empty($about->infra_pre_heading)) value="{{$about->infra_pre_heading}}" @endif />
                            <label for="infra_pre_heading">Enter Infrastructure Pre Heading</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="infra_heading" name="infra_heading" placeholder="Enter infrastructure heading" @if(!empty($about->infra_heading)) value="{{$about->infra_heading}}" @endif />
                            <label for="infra_heading">Infrastructure Heading</label>
                        </div>
                    </div>
                    

                    <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Page Section</h5>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="page_title" name="page_title" placeholder="Enter page title" @if(!empty($about->page_title)) value="{{$about->page_title}}" @endif />
                            <label for="page_title">Page Title</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="seo_title" name="seo_title" placeholder="Enter seo title" @if(!empty($about->seo_title)) value="{{$about->seo_title}}" @endif />
                            <label for="seo_title">SEO Title</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="seo_description" name="seo_description" placeholder="Enter seo description">@if(!empty($about->seo_description)){{$about->seo_description}}@endif</textarea>
                            <label for="seo_description">SEO Description</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="banner_image" id="banner_image" />
                            <label for="banner_image">Image</label>
                        </div>
                        @if(!empty($about->banner_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/about_images') }}/{{ $about->banner_image }}" style="width: 300px;" >
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mt-6">
                    @if(!empty($about->id))
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
    CKEDITOR.replace( 'intro_content' );
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