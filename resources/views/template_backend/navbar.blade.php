<!-- Header Navbar START -->
<div class="header-navbar nav-menu-light">
    <div class="container">
        <ul class="nav-menu nav-menu-horizontal">
            <li class="nav-menu-item">
                <a href="{{ url('/dashboard') }}">
                    <i class="feather icon-home"></i>
                    <span class="nav-menu-item-title">Dashboard </span>
                </a>
            </li>
            <li class="nav-submenu">
                <a href="{{ route('inventoris') }}">
                <div class="nav-submenu-title">
                    <span>
                        <i class="feather icon-package"></i>
                        <span>Inventory</span>
                    </span>
                </div>
            </a>
            </li>
            <li class="nav-submenu">
                <a href="{{ route('mutasi') }}">
                    <div class="nav-submenu-title">
                        <span>
                            <i class="feather icon-tag"></i>
                            <span>Mutasi</span>
                        </span>
                    </div>
                </a>
            </li>
            
        </ul>
    </div>
</div>
<!-- Header Navbar END -->