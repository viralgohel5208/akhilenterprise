<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('enterprise-admin.dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Akhil Enterprise</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8.47365 11.7183C8.11707 12.0749 8.11707 12.6531 8.47365 13.0097L12.071 16.607C12.4615 16.9975 12.4615 17.6305 12.071 18.021C11.6805 18.4115 11.0475 18.4115 10.657 18.021L5.83009 13.1941C5.37164 12.7356 5.37164 11.9924 5.83009 11.5339L10.657 6.707C11.0475 6.31653 11.6805 6.31653 12.071 6.707C12.4615 7.09747 12.4615 7.73053 12.071 8.121L8.47365 11.7183Z"
                    fill-opacity="0.9"
                />
                <path
                    d="M14.3584 11.8336C14.0654 12.1266 14.0654 12.6014 14.3584 12.8944L18.071 16.607C18.4615 16.9975 18.4615 17.6305 18.071 18.021C17.6805 18.4115 17.0475 18.4115 16.657 18.021L11.6819 13.0459C11.3053 12.6693 11.3053 12.0587 11.6819 11.6821L16.657 6.707C17.0475 6.31653 17.6805 6.31653 18.071 6.707C18.4615 7.09747 18.4615 7.73053 18.071 8.121L14.3584 11.8336Z"
                    fill-opacity="0.4"
                />
            </svg>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{ route('enterprise-admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>

        <!-- Header & Footer -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-file-copy-line"></i>
                <div data-i18n="Header & Footer">Header & Footer</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('enterprise-admin.headerData') }}" class="menu-link">
                        <div data-i18n="Header">Header</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('enterprise-admin.footerData') }}" class="menu-link">
                        <div data-i18n="Footer">Footer</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.pro-cat') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bill-line"></i>
                <div data-i18n="Product Ctegory">Product Ctegory</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.product') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-shopping-bag-3-line"></i>
                <div data-i18n="Products">Products</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.homesldier') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-image-add-fill"></i>
                <div data-i18n="Home Slider">Home Slider</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.infrastructure') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-ancient-gate-fill"></i>
                <div data-i18n="Infrastructure">Infrastructure</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.corevalue') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-box-3-line"></i>
                <div data-i18n="Core Value">Core Value</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.certificate') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-bill-line"></i>
                <div data-i18n="Certificates">Certificates</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.page') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-layout-left-line"></i>
                <div data-i18n="Common Pages">Common Pages</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ri-layout-left-line"></i>
                <div data-i18n="Front Pages">Front Pages</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('enterprise-admin.home.add') }}" class="menu-link">
                        <div data-i18n="Home">Home</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('enterprise-admin.about.add') }}" class="menu-link">
                        <div data-i18n="About">About</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('enterprise-admin.quality.add') }}" class="menu-link">
                        <div data-i18n="Quality">Quality</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.cataloglist') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-mail-open-line"></i>
                <div data-i18n="Contact Inquiry">Contact Inquiry</div>
            </a>
        </li>

        <!-- General Setting -->
        <li class="menu-header mt-5">
            <span class="menu-header-text" data-i18n="General Setting">General Setting</span>
        </li>

        <li class="menu-item">
            <a href="{{ route('enterprise-admin.settings') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-lifebuoy-line"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-logout-box-r-line"></i>
                <div data-i18n="Logout">Logout</div>
            </a>
        </li>
    </ul>
</aside>