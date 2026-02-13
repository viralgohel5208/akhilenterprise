@extends('admin.layouts.app')
@section('styles')
@stop

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Add Certificate</h5>
        <div class="card-body pt-0">
            <form id="sliderForm" method="POST" action="{{ route('enterprise-admin.certificate.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mt-1 g-5">
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="heading" name="heading" placeholder="Enter heading" />
                            <label for="heading">Heading</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <select class="form-select" id="status" name="status">
                                <option value="1" selected>Active</option>
                                <option value="2">Inactive</option>
                            </select>
                            <label for="status">Status</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" id="short_description" name="short_description" placeholder="Enter short description"></textarea>
                            <label for="short_description">Short Description</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="image" id="image" />
                            <label for="image">Image</label>
                        </div>
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
                },
                image: {
                    required: true
                }
            },
            messages: {
                heading: {
                    required: "Please enter heading!"
                },
                short_description: {
                    required: "Please enter the short description!"
                },
                image: {
                    required: "Please upload the image!"
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter($(element).parents('div.form-floating')); 
            }
        });
    });
</script>
@stop