@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <h5 class="card-header" style="border-bottom: 1px solid #ddd;">Footer Data</h5>
        <div class="card-body pt-0">
            <form id="headerData_Rc" method="POST" action="{{ route('enterprise-admin.footerDataSave') }}" enctype="multipart/form-data">
                <input type="hidden" name="rcID" id="rcID" value="{{$footerData->id}}">
                @csrf
                <div class="row mt-1 g-5">
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" id="copyright_text" name="copyright_text" placeholder="Enter copyright text" value="@if(!empty($footerData->copyright_text)){{$footerData->copyright_text}}@endif" />
                            <label for="copyright_text">Copyright text</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <textarea class="form-control h-px-100" type="text" name="footer_description" id="footer_description" placeholder="Enter short description">@if(!empty($footerData->footer_description)){{$footerData->footer_description}}@endif</textarea>
                            <label for="footer_description">Short Description</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="file" name="footer_logo" id="footer_logo" />
                            <label for="footer_logo">Footer Logo</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if(!empty($footerData->footer_logo))
                            <div class="img_Preview">
                                <img src="{{ asset('admin/images') }}/{{ $footerData->footer_logo }}" style="width: 100px;" >
                            </div>
                        @endif
                    </div>

                    <hr />
                    <strong style="margin-top: 0px;">Footer Menu</strong>
                    <div id="dynamic-fields-container">
                        @if(!empty($footerData->footer_menu))
                        @php $data = json_decode($footerData->footer_menu, true); @endphp
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
                    <div class="mt-6" style="margin-top: 0px !important;">
                        <button type="button" class="btn btn-primary" id="add-field">Add Menu <i class="ri-add-line"></i></button>
                    </div>

                    <hr />
                    <strong style="margin-top: 0px;">Footer Product Menu</strong>
                    <div id="dynamic-fields-container-prd">
                        @if(!empty($footerData->footer_product))
                        @php $data = json_decode($footerData->footer_product, true); @endphp
                            @foreach($data as $p_key => $val)
                                <div class="form-group row mb-6 hdRowLength_P" id="fieldP_{{$p_key}}">
                                    <div class="col-md-5">
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" type="text" name="fields_prd[{{$p_key}}][key]" id="key_{{$p_key}}" placeholder="Enter product name" value="@if(!empty($val['key'])){{$val['key']}}@endif" />
                                            <label for="key_{{$p_key}}">Product Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-floating form-floating-outline">
                                            <input class="form-control" type="text" name="fields_prd[{{$p_key}}][value]" id="value_{{$p_key}}" placeholder="Enter product link" value="@if(!empty($val['value'])){{$val['value']}}@endif" />
                                            <label for="value_{{$p_key}}">Product Link</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-danger remove-field-prd" data-id="{{$p_key}}">Remove</button>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="form-group row mb-6">
                                <div class="col-md-5">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="fields_prd[0][key]" id="key_0" placeholder="Enter product name" />
                                        <label for="key_0">Product Name</label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-floating form-floating-outline">
                                        <input class="form-control" type="text" name="fields_prd[0][value]" id="value_0" placeholder="Enter product link" />
                                        <label for="value_0">Product Link</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-field-prd" disabled>Remove</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="mt-6" style="margin-top: 0px !important;">
                        <button type="button" class="btn btn-primary" id="add-field-prd">Add Product <i class="ri-add-line"></i></button>
                    </div>
                    <hr />

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

    $(document).ready(function() {
        var divs = document.getElementsByClassName('hdRowLength_P');
        let fieldIndex_prd = divs.length + 1;
        $('#add-field-prd').click(function() {
            let newField = `
                <div class="form-group row mb-6" id="fieldP_${fieldIndex_prd}">
                    <div class="col-md-5">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="fields_prd[${fieldIndex_prd}][key]" id="key_${fieldIndex_prd}" placeholder="Enter product name" />
                            <label for="key_${fieldIndex_prd}">Product Name</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-floating form-floating-outline">
                            <input class="form-control" type="text" name="fields_prd[${fieldIndex_prd}][value]" id="value_${fieldIndex_prd}" placeholder="Enter product link" />
                            <label for="value_${fieldIndex_prd}">Product Link</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-field-prd" data-id="${fieldIndex_prd}">Remove</button>
                    </div>
                </div>
            `;

            $('#dynamic-fields-container-prd').append(newField);
            fieldIndex_prd++;
        });

        // Remove a dynamic field
        $(document).on('click', '.remove-field-prd', function() {
            let fieldId = $(this).data('id');
            $(`#fieldP_${fieldId}`).remove();
        });
    });
</script>
@stop