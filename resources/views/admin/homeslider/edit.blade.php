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
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Edit Slider</h5>
        <div class="card-body pt-0">
            <form id="sliderForm" method="POST" action="{{ route('enterprise-admin.homesldier.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="sliderID" id="sliderID" value="{{$slider->id}}" >
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="banner_heading" name="banner_heading" placeholder="Enter banner heading" @if(!empty($slider->banner_heading)) value="{{$slider->banner_heading}}" @endif />
                            <label for="banner_heading">Banner Heading</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <select class="form-select" id="image_status" name="image_status">
                                <option value="1" @if(!empty($slider->image_status)){{$slider->image_status == 1 ? 'selected' : ''}}@endif>Active</option>
                                <option value="2" @if(!empty($slider->image_status)){{$slider->image_status == 2 ? 'selected' : ''}}@endif>Inactive</option>
                            </select>
                            <label for="image_status">Banner status</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="banner_description" name="banner_description" placeholder="Enter banner short description">@if(!empty($slider->banner_description)) {{$slider->banner_description}} @endif</textarea>
                            <label for="banner_description">Banner description</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="banner_image" id="banner_image" />
                            <label for="banner_image">Banner Image</label>
                        </div>
                        @if(!empty($slider->banner_image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/slider_image') }}/{{ $slider->banner_image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Save</button>
                    <a href="{{ route('enterprise-admin.homesldier') }}" class="btn btn-outline-secondary">Cancel</a>
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