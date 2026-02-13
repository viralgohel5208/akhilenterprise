@extends('admin.layouts.app')
@section('styles')
<style type="text/css">
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
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Edit Page</h5>
        <div class="card-body pt-0">
            <form id="sliderForm" method="POST" action="{{ route('enterprise-admin.page.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="recID" id="recID" value="{{$data->id}}" >
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="page_name" name="page_name" placeholder="Enter page heading" @if(!empty($data->page_name)) value="{{$data->page_name}}" @endif />
                            <label for="page_name">Page Name</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="seo_title" name="seo_title" placeholder="Enter seo title" @if(!empty($data->seo_title)) value="{{$data->seo_title}}" @endif />
                            <label for="seo_title">Seo Title</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="seo_description" name="seo_description" placeholder="Enter seo description">@if(!empty($data->seo_description)){{$data->seo_description}}@endif</textarea>
                            <label for="seo_description">Seo description</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="page_banner_image" id="page_banner_image" />
                            <label for="page_banner_image">Banner Image</label>
                        </div>
                        @if(!empty($data->page_banner_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/page_banner') }}/{{ $data->page_banner_image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Save</button>
                    <a href="{{ route('enterprise-admin.page') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/additional-methods.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#sliderForm").validate({
            rules: {
                banner_heading: {
                    required: true
                },
                banner_description: {
                    required: true
                }
            },
            messages: {
                banner_heading: {
                    required: "Please enter banner name!"
                },
                banner_description: {
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