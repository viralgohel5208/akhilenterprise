@extends('admin.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/css/sweetalert2.css') }}" />
<style type="text/css">
    .cateAction{
        display: inline;
    }
    button.swal2-deny.btn.btn-outline-secondary {
        display: none !important;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="row" style="border-bottom: 1px solid #ddd;">
            <div class="col-md-6">
                <h5 class="card-header">Slider List</h5>
            </div>
            <div class="col-md-6 mt-4" style="text-align: right;margin-left: -20px;">
                <a href="{{ route('enterprise-admin.homesldier.add') }}" class="btn btn-secondary create-new btn-primary waves-effect waves-light">
                    <span><i class="ri-add-line ri-16px me-sm-2"></i> <span class="d-none d-sm-inline-block">Add New Slider</span></span>
                </a>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="bannerImage" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Banner Image</th>
                        <th>Banner Heading</th>
                        <th>Banner Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($sliders as $value)
                    <tr>
                        <td>{{ $i }}</td>
                        <td><img src="{{ asset('admin/slider_image') }}/{{ $value['banner_image'] }}" style="width: 50px;"></td>
                        <td>{{ mb_strimwidth($value['banner_heading'], 0, 70, "...") }}</td>
                        <td style="width: 30%;">{{ mb_strimwidth($value['banner_description'], 0, 70, "...") }}</td>
                        @if($value['image_status'] == '1')
                            <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                        @else
                            <td><span class="badge rounded-pill  bg-label-warning">Inactive</span></td>
                        @endif
                        <td>
                            <a class="dropdown-item waves-effect cateAction" href="{{ route('enterprise-admin.homesldier.edit', $value['id']) }}"><i class="ri-pencil-line me-1"></i></a>
                            <a class="dropdown-item waves-effect cateAction removeBanner" href="javascript:void(0)" data-id="{{$value['id']}}"><i class="ri-delete-bin-7-line me-1"></i></a>
                        </td>
                    </tr>
                    @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('admin/js/sweetalert2.js')}}"></script>
<script src="{{ asset('admin/js/extended-ui-sweetalert2.js')}}"></script>
<script type="text/javascript">
    $('#bannerImage').DataTable();
    $(document).ready(function () {
        $(".removeBanner").click(function(){
            var recID = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/enterprise-admin/home-slider/delete/' + recID,
                        type: 'POST',
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "recID": recID,
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                response.success,
                                'success'
                            ).then((result) => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                xhr.responseJSON.error,
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
@stop