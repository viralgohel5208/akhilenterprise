@extends('admin.layouts.app')

@section('content')
<style type="text/css">
    form .error:not(li):not(input){
        margin-top: 40px !important;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="user-profile-header-banner">
            <img src="{{ asset('admin/images/profile-banner.png') }}" alt="Banner image" class="rounded-top" />
        </div>
        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-5">
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                <img src="{{ asset('admin/images/1.png') }}" alt="user image" class="d-block h-auto ms-0 ms-sm-5 rounded-4 user-profile-img" />
            </div>
            <div class="flex-grow-1 mt-4 mt-sm-12">
                <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-5 flex-md-row flex-column gap-6">
                    <div class="user-profile-info">
                        <h4 class="mb-2">
                            @if(!empty($user->first_name)) {{ $user->first_name }} @endif @if(!empty($user->last_name)) {{ $user->last_name }} @endif
                        </h4>
                        <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-4">
                            @if($user->user_type == 1)
                                <li class="list-inline-item">
                                    <i class="ri-palette-line me-2 ri-24px"></i><span class="fw-medium">Admin</span>
                                </li>
                            @endif
                            @if(!empty($user->city))
                                <li class="list-inline-item">
                                    <i class="ri-map-pin-line me-2 ri-24px"></i><span class="fw-medium">{{ $user->city }}</span>
                                </li>
                            @endif
                            @if(!empty($user->created_at))
                                <li class="list-inline-item">
                                    <i class="ri-calendar-line me-2 ri-24px"></i><span class="fw-medium"> Joined ({{ date('F j, Y', strtotime($user->created_at)) }})</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Personal Information</h5>
        <div class="card-body pt-0">
            <form id="formAccountSettings" method="POST" action="{{ route('enterprise-admin.myProfile.store') }}">
                @csrf
                <input type="hidden" name="userID" id="userID" value="{{ $user->id }}">
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="firstName" name="firstName" value="@if(!empty($user->first_name)){{ $user->first_name }}@endif" />
                            <label for="firstName">First Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="lastName" id="lastName" value="@if(!empty($user->last_name)){{ $user->last_name }}@endif" />
                            <label for="lastName">Last Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control" id="user_name" name="user_name" value="@if(!empty($user->user_name)){{ $user->user_name }}@endif" />
                            <label for="user_name">Organization</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="email" name="email" value="@if(!empty($user->email)){{ $user->email }}@endif" />
                            <label for="email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="mobile_no" name="mobile_no" class="form-control" value="@if(!empty($user->mobile_no)){{ $user->mobile_no }}@endif" />
                                <label for="mobile_no">Phone Number</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control" id="address" name="address" value="@if(!empty($user->address)){{ $user->address }}@endif" />
                            <label for="address">Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" class="form-control" id="city" name="city" value="@if(!empty($user->city)){{ $user->city }}@endif" />
                            <label for="city">City</label>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Update</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Change Password</h5>
        <div class="card-body pt-0">
            <form id="changePassword" method="POST" action="{{ route('enterprise-admin.changePassword') }}">
                @csrf
                <input type="hidden" name="userID" id="userID" value="{{ $user->id }}">
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Enter new password" />
                            <label for="password">New Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="Enter confirm password" />
                            <label for="confirm_password">Confirm Password</label>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Update</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
        $("#changePassword").validate({
            rules: {
                password: {
                    required: true,
                    minlength: 8
                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    equalTo: "#password"
                }
            },
            messages: {
                password: {
                    required: "Please enter password!",
                    minlength: "Please password enter atleast 8 caharcter!"
                },
                confirm_password: {
                    required: "Please enter confirm password!",
                    minlength: "Please password enter atleast 8 caharcter!",
                    equalTo: "password and confirm password does not match"
                }
            },
            errorPlacement: function (error, element) {
                error.insertAfter($(element).parents('div.form-floating')); 
            }
        });
    });
</script>
@stop