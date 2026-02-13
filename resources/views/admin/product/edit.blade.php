@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/typography.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/katex.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/editor.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/sweetalert2.css') }}" />
<style type="text/css">
    .img_Preview{
        margin-top: 15px;
        float: left;
        margin-left: 5px;
        margin-right: 5px;
        border: 3px solid #ddd;
    }
    .rm-icon .ri-close-circle-line{
        color: red;
        position: absolute;
        margin-left: -22px;
        margin-top: 5px;
        cursor: pointer;
    }
    button.swal2-deny.btn.btn-outline-secondary {
        display: none !important;
    }
    div#cke_notifications_area_editor1 {
        display: none;
    }
</style>
@stop

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Add Product</h5>
        <div class="card-body pt-0">
            <form id="productForm" method="POST" action="{{ route('enterprise-admin.product.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="prdID" id="prdID" value="{{$product->id}}" >
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <select class="form-select" id="category_id" name="category_id">
                                <!-- <option>Please select category</option> -->
                                @if(!empty($category))
                                    @foreach($category as $val)
                                        <option value="{{ $val->id }}" {{$val->id == $product->category_id ? 'selected' : ''}} >{{ $val->category_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="category_id">Product Category</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="product_name" name="product_name" placeholder="Enter product name" value="@if(!empty($product->product_title)){{$product->product_title}}@endif" />
                            <label for="product_name">Product name</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="short_description" name="short_description" placeholder="Enter product short description">@if(!empty($product->short_description)){{$product->short_description}}@endif</textarea>
                            <label for="short_description">Product short description</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="short_description">Product Content</label>
                        <textarea name="editor1">@if(!empty($product->main_description)){{$product->main_description}}@endif</textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline mb-6">
                            <select class="form-select" id="product_status" name="product_status">
                                <option>Please select status</option>
                                <option value="1" @if(!empty($product->product_status)){{$product->product_status == 1 ? 'selected' : ''}}@endif>Active</option>
                                <option value="2" @if(!empty($product->product_status)){{$product->product_status == 2 ? 'selected' : ''}}@endif>Inactive</option>
                            </select>
                            <label for="product_status">Product status</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="product_image" id="product_image" />
                            <label for="product_image">Product Image</label>
                        </div>
                        @if(!empty($product->product_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/product_image') }}/{{ $product->product_image }}" style="width: 100px;" >
                                <span class="rm-icon removeImage" data-id="{{$product->id}}" data-types="product_image">
                                    <i class="ri-close-circle-line"></i>
                                </span>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="product_banner_image" id="product_banner_image" />
                            <label for="product_banner_image">Product Banner Image</label>
                        </div>
                        @if(!empty($product->product_banner_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/product_image') }}/{{ $product->product_banner_image }}" style="width: 100px;" >
                                <span class="rm-icon removeImage" data-id="{{$product->id}}" data-types="product_banner_image">
                                    <i class="ri-close-circle-line"></i>
                                </span>
                            </div>
                        @endif
                    </div>

                    <h6 class="card-header" style="padding-bottom: 0px;">Product Gallery</h6>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="gallery_image[]" id="gallery_image" multiple/>
                            <label for="gallery_image">Gallery Image</label>
                        </div>
                        @if(!empty($gallery))
                            @foreach($gallery as $value)
                                <div class="img_Preview">
                                    <img src="{{ asset('admin/product_gallery') }}/{{ $value->gallery_image }}" style="width: 100px;" >
                                    <span class="rm-icon removeImageGallery" data-id="{{$value->id}}">
                                        <i class="ri-close-circle-line"></i>
                                    </span>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <h6 class="card-header" style="border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;">SEO Section</h6>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="seo_title" name="seo_title" placeholder="Enter seo title" value="@if(!empty($product->seo_title)){{$product->seo_title}}@endif" />
                            <label for="seo_title">SEO Title</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="seo_description" name="seo_description" placeholder="Enter seo description">@if(!empty($product->seo_description)){{$product->seo_description}}@endif</textarea>
                            <label for="seo_description">SEO Description</label>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Save</button>
                    <a href="{{ route('enterprise-admin.pro-cat') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('admin/js/katex.js')}}"></script>
<script src="{{ asset('admin/js/quill.js')}}"></script>
<script src="{{ asset('admin/js/forms-editors.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#productForm").validate({
            rules: {
                product_name: {
                    required: true
                },
                product_status: {
                    required: true
                },
                short_description: {
                    required: true
                }
            },
            messages: {
                product_name: {
                    required: "Please enter product name!"
                },
                product_status: {
                    required: "Please select category status!"
                },
                short_description: {
                    required: "Please enter product short description!"
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter($(element).parents('div.form-floating')); 
            }
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<script src="{{ asset('admin/js/sweetalert2.js')}}"></script>
<script src="{{ asset('admin/js/extended-ui-sweetalert2.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".removeImage").click(function(){
            var recID = $(this).data('id');
            var recType = $(this).data('types');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/enterprise-admin/product/remove/' + recID,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "recID": recID,
                            "recType": recType,
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.success,
                                'success'
                            ).then((result) => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                xhr.responseJSON.error,
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".removeImageGallery").click(function(){
            var recID = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/enterprise-admin/product/removeGallery/' + recID,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "recID": recID,
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.success,
                                'success'
                            ).then((result) => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                xhr.responseJSON.error,
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
@stop