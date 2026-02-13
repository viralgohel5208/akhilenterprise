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
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Edit Infrastructure</h5>
        <div class="card-body pt-0">
            <form id="sliderForm" method="POST" action="{{ route('enterprise-admin.corevalue.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="recID" id="recID" value="{{$data->id}}" >
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="heading" name="heading" placeholder="Enter heading" @if(!empty($data->heading)) value="{{$data->heading}}" @endif />
                            <label for="heading">Heading</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <select class="form-select" id="status" name="status">
                                <option value="1" @if(!empty($data->status)){{$data->status == 1 ? 'selected' : ''}}@endif>Active</option>
                                <option value="2" @if(!empty($data->status)){{$data->status == 2 ? 'selected' : ''}}@endif>Inactive</option>
                            </select>
                            <label for="status">Status</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="short_description" name="short_description" placeholder="Enter banner short description">@if(!empty($data->short_description)) {{$data->short_description}} @endif</textarea>
                            <label for="short_description">Short Description</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="image" id="image" />
                            <label for="image">Image</label>
                        </div>
                        @if(!empty($data->image))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/core_value_images') }}/{{ $data->image }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Save</button>
                    <a href="{{ route('enterprise-admin.corevalue') }}" class="btn btn-outline-secondary">Cancel</a>
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
                heading: {
                    required: true
                },
                short_description: {
                    required: true
                }
            },
            messages: {
                heading: {
                    required: "Please enter heading!"
                },
                short_description: {
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