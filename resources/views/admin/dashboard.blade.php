@extends('admin.layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row g-6">
        <div class="col-sm-6 col-lg-3">
            <a href="{{ route('enterprise-admin.pro-cat') }}">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-car-line ri-24px"></i></span>
                            </div>
                            <h4 class="mb-0">{{$totalCategory}}</h4>
                        </div>
                        <h6 class="mb-0 fw-normal">Product Category</h6>
                        <!-- <p class="mb-0">
                            <span class="me-1 fw-medium">+18.2%</span>
                            <small class="text-muted">than last week</small>
                        </p> -->
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="{{ route('enterprise-admin.product') }}">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-alert-line ri-24px"></i></span>
                            </div>
                            <h4 class="mb-0">{{$totalProducts}}</h4>
                        </div>
                        <h6 class="mb-0 fw-normal">Products</h6>
                        <!-- <p class="mb-0">
                            <span class="me-1 fw-medium">-8.7%</span>
                            <small class="text-muted">than last week</small>
                        </p> -->
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="{{ route('enterprise-admin.cataloglist') }}">
                <div class="card card-border-shadow-primary h-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="avatar me-4">
                                <span class="avatar-initial rounded-3 bg-label-primary"><i class="ri-route-line ri-24px"></i></span>
                            </div>
                            <h4 class="mb-0">{{$totalInquiry}}</h4>
                        </div>
                        <h6 class="mb-0 fw-normal">Contact Inquiry</h6>
                        <!-- <p class="mb-0">
                            <span class="me-1 fw-medium">+4.3%</span>
                            <small class="text-muted">than last week</small>
                        </p> -->
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-sm-6 col-lg-3">
            <div class="card card-border-shadow-info h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-2">
                        <div class="avatar me-4">
                            <span class="avatar-initial rounded-3 bg-label-info"><i class="ri-time-line ri-24px"></i></span>
                        </div>
                        <h4 class="mb-0">13</h4>
                    </div>
                    <h6 class="mb-0 fw-normal">Late vehicles</h6>
                    <p class="mb-0">
                        <span class="me-1 fw-medium">-2.5%</span>
                        <small class="text-muted">than last week</small>
                    </p>
                </div>
            </div>
        </div> -->
    </div>
</div>
@endsection
