@extends('admin.layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('admin/css/typography.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/katex.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/editor.css') }}" />
<style type="text/css">
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
            <form id="productForm" method="POST" action="{{ route('enterprise-admin.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <select class="form-select" id="category_id" name="category_id">
                                <!-- <option>Please select category</option> -->
                                @if(!empty($category))
                                    @foreach($category as $val)
                                        <option value="{{ $val->id }}">{{ $val->category_name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            <label for="category_id">Product Category</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="product_name" name="product_name" placeholder="Enter product name" />
                            <label for="product_name">Product name</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="short_description" name="short_description" placeholder="Enter product short description"></textarea>
                            <label for="short_description">Product short description</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="short_description">Product Content</label>
                        <textarea name="editor1"></textarea>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline mb-6">
                            <select class="form-select" id="product_status" name="product_status">
                                <option>Please select status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            <label for="product_status">Product status</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="product_image" id="product_image" />
                            <label for="product_image">Product Image</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="product_banner_image" id="product_banner_image" />
                            <label for="product_banner_image">Product Banner Image</label>
                        </div>
                    </div>

                    <h6 class="card-header" style="padding-bottom: 0px;">Product Gallery</h6>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="gallery_image[]" id="gallery_image" multiple/>
                            <label for="gallery_image">Gallery Image</label>
                        </div>
                    </div>

                    <h6 class="card-header" style="border-bottom: 1px solid #ddd;border-top: 1px solid #ddd;">SEO Section</h6>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="seo_title" name="seo_title" placeholder="Enter seo title" />
                            <label for="seo_title">SEO Title</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="seo_description" name="seo_description" placeholder="Enter seo description"></textarea>
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
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
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
                },
                product_image: {
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
                },
                product_image: {
                    required: "Please upload product image!"
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter($(element).parents('div.form-floating')); 
            }
        });
    });
</script>
@stop