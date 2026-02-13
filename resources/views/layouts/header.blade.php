<header class="main-header">
    <div class="bg-primary text-white py-2">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="d-flex gx-2 align-items-center">
                    @if(!empty($headerData->top_header_mobile_no))
                        <svg class="d-inline-block me-2" width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9161 12.2003V14.4503C15.9169 14.6592 15.8741 14.866 15.7905 15.0573C15.7068 15.2487 15.5841 15.4205 15.4301 15.5617C15.2762 15.7029 15.0945 15.8104 14.8966 15.8774C14.6988 15.9443 14.4891 15.9691 14.2811 15.9503C11.9732 15.6996 9.75634 14.9109 7.80859 13.6478C5.99646 12.4963 4.46009 10.96 3.30859 9.14783C2.04107 7.19123 1.25227 4.96357 1.00609 2.64533C0.987345 2.43793 1.01199 2.2289 1.07846 2.03154C1.14493 1.83419 1.25177 1.65284 1.39216 1.49904C1.53256 1.34524 1.70344 1.22236 1.89393 1.13822C2.08442 1.05408 2.29034 1.01052 2.49859 1.01033H4.74859C5.11257 1.00674 5.46543 1.13564 5.74141 1.37298C6.01739 1.61032 6.19765 1.93991 6.24859 2.30033C6.34355 3.02038 6.51968 3.72737 6.77359 4.40783C6.8745 4.67627 6.89633 4.96801 6.83652 5.24849C6.7767 5.52896 6.63773 5.78641 6.43609 5.99033L5.48359 6.94283C6.55125 8.82049 8.10593 10.3752 9.98359 11.4428L10.9361 10.4903C11.14 10.2887 11.3975 10.1497 11.6779 10.0899C11.9584 10.0301 12.2501 10.0519 12.5186 10.1528C13.199 10.4067 13.906 10.5829 14.6261 10.6778C14.9904 10.7292 15.3231 10.9127 15.561 11.1934C15.7988 11.4742 15.9252 11.8325 15.9161 12.2003Z"
                                fill="white" />
                        </svg>
                        <span>Need Quick Response? Call US 
                            <a class="text-white text-decoration-none" href="tel:{{$headerData->top_header_mobile_no}}">{{$headerData->top_header_mobile_no}}</a>
                        </span>
                    @endif
                    @if(!empty($headerData->top_header_email))
                        <span class="ms-3">
                            <a class="text-white text-decoration-none" href="mailto:{{$headerData->top_header_email}}">{{$headerData->top_header_email}}</a>
                        </span>
                    @endif
                </div>
                <!-- <span><img src="{{ asset('front/images/gtranslat.png') }}" alt="" /></span> -->

                <div class="gtranslate_wrapper"></div>
                <script>window.gtranslateSettings = {"default_language":"en","native_language_names":true,"detect_browser_language":true,"languages":["en","fr","de","it","es"],"wrapper_selector":".gtranslate_wrapper","flag_size":24,"switcher_horizontal_position":"right","switcher_vertical_position":"top","switcher_open_direction":"top","flag_style":"3d"}</script>
                <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl p-0" aria-label="Offcanvas navbar large">
        <a class="main-logo d-xl-none" href="{{ route('home') }}">
            @if(!empty($headerData->header_logo))
                <img src="{{ asset('admin/images') }}/{{ $headerData->header_logo }}" alt="Akhil Enterprise" />
            @else
                <img src="{{ asset('front/images/main-logo.png') }}" alt="Akhil Enterprise" />
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
                <a class="main-logo" id="offcanvasNavbar2Label" href="{{ route('home') }}">
                    @if(!empty($headerData->header_logo))
                        <img src="{{ asset('admin/images') }}/{{ $headerData->header_logo }}" alt="Akhil Enterprise" />
                    @else
                        <img src="{{ asset('front/images/main-logo.png') }}" alt="Akhil Enterprise" />
                    @endif
                </a>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="main-nav container">
                    <div class="main-logo">
                        <a class="d-none d-xl-inline" href="{{ route('home') }}">
                            @if(!empty($headerData->header_logo))
                                <img class="d-inline-block" src="{{ asset('admin/images') }}/{{ $headerData->header_logo }}" alt="Akhil Enterprise" />
                            @else
                                <img class="d-inline-block" src="{{ asset('front/images/main-logo.png') }}" alt="Akhil Enterprise" />
                            @endif
                        </a>
                    </div>
                    @if(!empty($headerData->header_menu_link))
                        @php $data = json_decode($headerData->header_menu_link, TRUE); @endphp
                    @else
                        @php $data = array(); @endphp
                    @endif
                    <ul class="navbar-nav">
                        <!-- <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li> -->
                        @if(!empty($data))
                            @foreach($data as $val)
                                <li class="nav-item"><a class="nav-link" href="{{ $val['value'] }}">{{ $val['key'] }}</a></li>
                            @endforeach
                        @endif
                    </ul>
                    @if(!empty($headerData->header_button_name))
                        <div class="d-flex justify-content-end align-items-center">
                            @if(!empty($headerData->header_button_link))
                                <a href="{{ $headerData->header_button_link }}" class="btn btn-dark">{{ $headerData->header_button_name }}</a>
                            @else
                                <a href="#" class="btn btn-dark">Request A Catalog</a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</header>