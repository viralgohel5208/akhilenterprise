@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Edit Product Category</h5>
        <div class="card-body pt-0">
            <form id="categoryForm" method="POST" action="{{ route('enterprise-admin.pro-cat.update') }}">
                @csrf
                <input type="hidden" name="catID" id="catID" value="{{$category->id}}">
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="category_name" name="category_name" placeholder="Enter category name" value="@if(!empty($category->category_name)){{$category->category_name}}@endif" />
                            <label for="category_name">Product category</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline mb-6">
                            <select class="form-select" id="status" name="status">
                                <option>Please select status</option>
                                <option value="1" @if(!empty($category->status)) @if($category->status == 1) Selected @endif @endif>Active</option>
                                <option value="2" @if(!empty($category->status)) @if($category->status == 2) Selected @endif @endif>Inactive</option>
                            </select>
                            <label for="status">Category status</label>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Update</button>
                    <a href="{{ route('enterprise-admin.pro-cat') }}" class="btn btn-outline-secondary">Cancel</a>
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
        $("#categoryForm").validate({
            rules: {
                category_name: {
                    required: true
                },
                status: {
                    required: true
                }
            },
            messages: {
                category_name: {
                    required: "Please enter category name!"
                },
                status: {
                    required: "Please select category status!"
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter($(element).parents('div.form-floating')); 
            }
        });
    });
</script>
@stop