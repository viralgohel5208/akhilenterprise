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
                <h5 class="card-header">Product List</h5>
            </div>
            <div class="col-md-6 mt-4" style="text-align: right;margin-left: -20px;">
                <a href="{{ route('enterprise-admin.product.add') }}" class="btn btn-secondary create-new btn-primary waves-effect waves-light">
                    <span><i class="ri-add-line ri-16px me-sm-2"></i> <span class="d-none d-sm-inline-block">Add Product</span></span>
                </a>
            </div>
        </div>
        <div class="card-datatable table-responsive pt-0">
            <table id="productList" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Product Short Description</th>
                        <th>Product Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($products as $value)
                    <tr>
                        <td>{{ $i }}</td>
                        <td style="width: 15%;">{{ $value['product_title'] }}</td>
                        <td>{{ $value->category->category_name }}</td>
                        <td style="width: 30%;">{{ mb_strimwidth($value['short_description'], 0, 90, "...") }}</td>
                        <td><img src="{{ asset('admin/product_image') }}/{{ $value['product_image'] }}" style="width: 50px;"></td>
                        @if($value['product_status'] == '1')
                            <td><span class="badge rounded-pill bg-label-primary me-1">Active</span></td>
                        @else
                            <td><span class="badge rounded-pill  bg-label-warning">Inactive</span></td>
                        @endif
                        <td>
                            <a class="dropdown-item waves-effect cateAction" href="{{ route('enterprise-admin.product.edit', $value['id']) }}"><i class="ri-pencil-line me-1"></i></a>
                            <a class="dropdown-item waves-effect cateAction" href="{{ route('enterprise-admin.product.delete', $value['id']) }}"><i class="ri-delete-bin-7-line me-1"></i></a>
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
    $('#productList').DataTable();
</script>
@stop