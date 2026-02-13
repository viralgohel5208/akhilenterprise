@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Header Data</h5>
        <div class="card-body pt-0">
            <form id="headerData_Rc" method="POST" action="{{ route('enterprise-admin.headerDataSave') }}" enctype="multipart/form-data">
                <input type="hidden" name="rcID" id="rcID" value="{{$headerData->id}}">
                @csrf
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="top_header_email" name="top_header_email" placeholder="Enter top bar email" value="@if(!empty($headerData->top_header_email)){{$headerData->top_header_email}}@endif" />
                            <label for="top_header_email">Top Bar Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="top_header_mobile_no" id="top_header_mobile_no" placeholder="Enter top bar phone number" value="@if(!empty($headerData->top_header_mobile_no)){{$headerData->top_header_mobile_no}}@endif" />
                            <label for="top_header_mobile_no">Top Bar Phone Number</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="header_button_name" id="header_button_name" placeholder="Enter button name" value="@if(!empty($headerData->header_button_name)){{$headerData->header_button_name}}@endif" />
                            <label for="header_button_name">Button Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="header_button_link" id="header_button_link" placeholder="Enter button link" value="@if(!empty($headerData->header_button_link)){{$headerData->header_button_link}}@endif" />
                            <label for="header_button_link">Button Link</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="site_name" id="site_name" placeholder="Enter site name" value="@if(!empty($headerData->site_name)){{$headerData->site_name}}@endif" />
                            <label for="site_name">Site Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="header_logo" id="header_logo" />
                            <label for="header_logo">Header Logo</label>
                        </div>
                        @if(!empty($headerData->header_logo))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/images') }}/{{ $headerData->header_logo }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>

                    <div id="dynamic-fields-container">
                        @if(!empty($headerData->header_menu_link))
                        @php $data = json_decode($headerData->header_menu_link, true); @endphp
                            @foreach($data as $n_key => $val)
                                <div class="form-group row mb-6 hdRowLength" id="field_{{$n_key}}">
                                    <div class="col-md-5">
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" type="text" name="fields[{{$n_key}}][key]" id="key_{{$n_key}}" placeholder="Enter menu name" value="@if(!empty($val['key'])){{$val['key']}}@endif" />
                                            <label for="key_{{$n_key}}">Menu Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" type="text" name="fields[{{$n_key}}][value]" id="value_{{$n_key}}" placeholder="Enter menu link" value="@if(!empty($val['value'])){{$val['value']}}@endif" />
                                            <label for="value_{{$n_key}}">Menu Link</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-field" data-id="{{$n_key}}">Remove</button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="form-group row mb-6">
                                <div class="col-md-5">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="fields[0][key]" id="key_0" placeholder="Enter menu name" />
                                        <label for="key_0">Menu Name</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="fields[0][value]" id="value_0" placeholder="Enter menu link" />
                                        <label for="value_0">Menu Link</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-field" disabled>Remove</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="mt-6">
                        <button type="button" class="btn btn-primary" id="add-field">Add Menu <i class="ri-add-line"></i></button>
                    </div>
                </div>
                <div class="mt-6">
                    <button type="submit" class="btn btn-primary me-3">Update</button>
                    <a href="{{ route('enterprise-admin.dashboard') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        var divs = document.getElementsByClassName('hdRowLength');
        let fieldIndex = divs.length + 1;
        $('#add-field').click(function() {
            let newField = `
                <div class="form-group row mb-6" id="field_${fieldIndex}">
                    <div class="col-md-5">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="fields[${fieldIndex}][key]" id="key_${fieldIndex}" placeholder="Enter menu name" />
                            <label for="key_${fieldIndex}">Menu Name</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="fields[${fieldIndex}][value]" id="value_${fieldIndex}" placeholder="Enter menu link" />
                            <label for="value_${fieldIndex}">Menu Link</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-field" data-id="${fieldIndex}">Remove</button>
                    </div>
                </div>
            `;

            $('#dynamic-fields-container').append(newField);
            fieldIndex++;
        });

        // Remove a dynamic field
        $(document).on('click', '.remove-field', function() {
            let fieldId = $(this).data('id');
            $(`#field_${fieldId}`).remove();
        });
    });
</script>
@stop