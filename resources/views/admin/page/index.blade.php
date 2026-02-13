@extends('admin.layouts.app')

@section('content')
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
        <div class="row" >
            <div class="col-md-12" style="border-bottom: 1px solid #ddd;">
                <h5 class="card-header">Page List</h5>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="bannerImage" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Page Name</th>
                        <th>Banner Image</th>
                        <th>Page Type</th>
                        <th>Seo Title</th>
                        <th>Seo Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($data as $value)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $value['page_name'] }}</td>
                            <td style="width: 15%;"><img src="{{ asset('admin/page_banner') }}/{{ $value['page_banner_image'] }}" style="width: 100%;"></td>
                            <td>{{ $value['page_type'] }}</td>
                            <td>{{ mb_strimwidth($value['seo_title'], 0, 25, "...") }}</td>
                            <td>{{ mb_strimwidth($value['seo_description'], 0, 25, "...") }}</td>
                            <td>
                                <a class="dropdown-item waves-effect cateAction" href="{{ route('enterprise-admin.page.edit', $value['id']) }}">
                                    <i class="ri-pencil-line me-1"></i>
                                </a>
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
<script type="text/javascript">
    $('#bannerImage').DataTable();
</script>
@stop