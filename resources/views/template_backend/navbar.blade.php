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

            @if (auth()->user()->level == 'admin')

            <li class="nav-submenu">
                <a href="{{ route('inventaris') }}">
                    <div class="nav-submenu-title">
                        <span>
                            <i class="feather icon-package"></i>
                            <span>Inventory</span>
                        </span>
                    </div>
                </a>
            </li>
                
            @endif

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

            <li class="nav-submenu">
                <a href="{{ route('laporan') }}">
                    <div class="nav-submenu-title">
                        <span>
                            <i class="icon-bar-chart feather"></i>
                            <span>Laporan</span>
                        </span>
                    </div>
                </a>
            </li>

            @if (auth()->user()->level == 'admin')
            
            <li class="nav-submenu">
                <div class="nav-submenu-title">
                    <span>
                        <i class="feather icon-menu"></i>
                        <span>Others</span>
                    </span>
                    <i class="nav-submenu-arrow caret-bottom"></i>
                </div>
                <ul class="nav-menu">
                    <div class="nav-submenu-title">
                        <ul class="nav-menu">
                            <a href="{{ route('kategori') }}">
                                <i class="feather icon-clipboard"></i>
                                <span>Kategori</span>
                            </a>
                        </ul>
                    </div>
                    <li class="nav-submenu">
                        <div class="nav-submenu-title">
                            <span>
                                <i class="feather icon-trash"></i>
                                <span>Trash</span>
                            </span>
                            <i class="nav-submenu-arrow caret-right"></i>
                        </div>
                        <ul class="nav-menu">
                            <li class="nav-menu-item">
                                <a href="{{ route('trash') }}">
                                    <i class="feather icon-trash-2"></i>
                                    <span>Inventory Trash</span>
                                </a>
                            </li>

                            <li class="nav-menu-item">
                                <a href="{{ route('trash.kategori') }}">
                                    <i class="feather icon-trash"></i>
                                    <span>Kategori Trash</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            @endif

        </ul>
    </div>
</div>
<!-- Header Navbar END -->
