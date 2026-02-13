@foreach($products as $product)
    <div class="col-lg-4 col-md-6">
        <a href="{{ route('home') }}/product/{{$product->product_slug}}" class="link">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card overflow-hidden border-0">
                        @if(!empty($product['product_image']))
                            <img src="{{ asset('admin/product_image') }}/{{ $product->product_image }}" alt="{!! $product['product_title'] !!}" class="card-img-top" />
                        @else
                            <img src="{{ asset('front/images/quality-img.jpg') }}" alt="{!! $product['product_title'] !!}" class="card-img-top" />
                        @endif
                        <div class="card-body text-center">
                            <h5 class="text-muted medium mb-1"><strong>{!! $product['product_title'] !!}</strong></h5>
                            <p class="card-text">{!! mb_strimwidth($product['short_description'], 0, 90, "...") !!}</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="img" src="{{ asset('front/images/rating.png') }}" alt="blog" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach