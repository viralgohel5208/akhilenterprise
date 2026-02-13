@extends('admin.layouts.app')

@section('content')
<style type="text/css">
    .cateAction{
        display: inline;
    }
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="row" style="border-bottom: 1px solid #ddd;">
            <div class="col-md-6">
                <h5 class="card-header">Category List</h5>
            </div>
            <div class="col-md-6 mt-4" style="text-align: right;margin-left: -20px;">
                <a href="{{ route('enterprise-admin.pro-cat.storeview') }}" class="btn btn-secondary create-new btn-primary waves-effect waves-light">
                    <span><i class="ri-add-line ri-16px me-sm-2"></i> <span class="d-none d-sm-inline-block">Add New Category</span></span>
                </a>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="categoryRecord" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($categories as $value)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $value['category_name'] }}</td>
                        @if($value['status'] == '1')
                            <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                        @else
                            <td><span class="badge rounded-pill  bg-label-warning">Inactive</span></td>
                        @endif
                        <td>{{ date('d-m-Y', strtotime($value['created_at'])) }}</td>
                        <td>
                            <a class="dropdown-item waves-effect cateAction" href="{{ route('enterprise-admin.pro-cat.edit', $value['id']) }}"><i class="ri-pencil-line me-1"></i></a>
                            <a class="dropdown-item waves-effect cateAction" href="{{ route('enterprise-admin.pro-cat.delete', $value['id']) }}"><i class="ri-delete-bin-7-line me-1"></i></a>
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
    $('#categoryRecord').DataTable();
</script>
@stop