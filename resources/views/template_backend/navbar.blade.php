<!-- Header Navbar START -->
<div class="header-navbar nav-menu-light">
    <div class="container">
        <ul class="nav-menu nav-menu-horizontal">
            <li class="nav-submenu">
                <a href="{{ url('/dashboard') }}">
                    <div class="nav-submenu-title">
                        <span>
                            <i class="feather icon-home"></i>
                            <span>Dashboard </span>
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-submenu">
                <a href="{{ route('inventoris') }}">
                    <div class="nav-submenu-title">
                        <span>
                            <i class="feather icon-package"></i>
                            <span>Inventory</span>
                        </span>
                        <i class="nav-submenu-arrow caret-bottom"></i>
                    </div>
                </a>
                <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="">
                            <i class="feather icon-package"></i>
                            <span>Kategori</span>
                        </a>
                    </li>
                </ul>
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
