@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">General Settings</h5>
        <div class="card-body pt-0">
            <form id="formAccountSettings" method="POST" action="{{ route('enterprise-admin.settings.store') }}">
                @csrf
                <input type="hidden" name="rc_ID" id="rc_ID" value="{{ $setting->id }}">
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="email" name="email" placeholder="Enter email" value="@if(!empty($setting->email)){{ $setting->email }}@endif" />
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="phone_number" id="phone_number" placeholder="Enter phone number" value="@if(!empty($setting->phone_number)){{ $setting->phone_number }}@endif" />
                            <label for="phone_number">Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" type="text" id="description" name="description" placeholder="Enter your description">@if(!empty($setting->description)){{ $setting->description }}@endif</textarea>
                            <label for="description">Site Description</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" type="text" id="address" name="address" placeholder="Enter your address">@if(!empty($setting->address)){{ $setting->address }}@endif</textarea>
                            <label for="address">Address</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="facebook_link" id="facebook_link" placeholder="Enter facebook link" value="@if(!empty($setting->facebook_link)){{ $setting->facebook_link }}@endif" />
                            <label for="facebook_link">Facebook Link</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="instagram_link" id="instagram_link" placeholder="Enter instagram link" value="@if(!empty($setting->instagram_link)){{ $setting->instagram_link }}@endif" />
                            <label for="instagram_link">Instagram Link</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="linkedin_link" id="linkedin_link" placeholder="Enter linkedin link" value="@if(!empty($setting->linkedin_link)){{ $setting->linkedin_link }}@endif" />
                            <label for="linkedin_link">Linkedin Link</label>
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
@stop