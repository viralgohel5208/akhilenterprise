<footer class="main-footer">
    <div class="container">
        <div class="footer-row" id="ft-links">
            <div class="footer-col">
                <p>
                    <a href="{{ route('home') }}" class="main-logo">
                        @if(!empty($footerData->footer_logo))
                            <img src="{{ asset('admin/images') }}/{{ $footerData->footer_logo }}" alt="Akhil Enterprise" style="width: 100px;" />
                        @else
                            <img src="{{ asset('front/images/footer-logo.png') }}" alt="Akhil Enterprise" style="width: 100px;" />
                        @endif
                    </a>
                </p>
                @if(!empty($footerData->footer_description))
                    <p>{!! $footerData->footer_description !!}</p>
                @endif
            </div>
            @if(!empty($footerData->footer_menu))
                @php $data = json_decode($footerData->footer_menu, TRUE); @endphp
            @else
                @php $data = array(); @endphp
            @endif
            <div class="footer-col">
                @if(!empty($data))
                    <h6 class="footer-title">Navigation</h6>
                    <ul class="footer-menu">
                        @foreach($data as $val)
                            <li><a href="{{ $val['value'] }}">{{ $val['key'] }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="footer-col">
                <h6 class="footer-title">Product Range</h6>
                <ul class="footer-menu">
                    <li><a href="#">Brass Aluminium Neutral Links</a></li>
                    <li><a href="#">Brass Electrical Components</a></li>
                    <li><a href="#">Brass Cable Glands</a></li>
                    <li><a href="#">Copper & S.S Components</a></li>
                    <li><a href="#">Brass Precision Components</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h6 class="footer-title">Brass Fittings Parts</h6>
                <ul class="footer-menu">
                    <li><a href="#">Brass Fittings Parts</a></li>
                    <li><a href="#">Brass Earthing Accessories</a></li>
                    <li><a href="#">Brass Fasteners</a></li>
                    <li><a href="#">Pool Cover Hardware</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom container">
        @if(!empty($footerData->copyright_text))
            <span class="footer-copyright">Copyright © <?php echo date('Y'); ?> {!! $footerData->copyright_text !!}</span>
        @else
            <span class="footer-copyright">Copyright © <?php echo date('Y'); ?> Akhil Enterprise. All Rights Reserved.</span>
        @endif
    </div>
</footer>
