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
                <a href="{{ route('role.index') }}">
                    <div class="nav-submenu-title">
                        <span>
                            <i class="icon-users feather "></i>
                            <span>Role Users</span>
                        </span>
                    </div>
                </a>
            </li>

            <li class="nav-submenu">
                <div class="nav-submenu-title">
                    <span>
                        <i class="feather icon-menu"></i>
                        <span>Others</span>
                    </span>
                    <i class="nav-submenu-arrow caret-bottom"></i>
                </div>
                <ul class="nav-menu">
                    <a href="{{ route('kategori') }}">
                        <div class="nav-submenu-title">
                            <ul class="nav-menu">
                                <span>
                                    <i class="feather icon-clipboard"></i>
                                    <span>Kategori</span>
                                </span>
                            </ul>
                        </div>
                    </a>
                    <li class="nav-submenu">
                        <div class="nav-submenu-title">
                            <span>
                                <i class="feather icon-trash"></i>
                                <span>Trash</span>
                            </span>
                            <i class="nav-submenu-arrow caret-right"></i>
                        </div>
                        <ul class="nav-menu">
                            <a href="{{ route('trash') }}">
                                <div class="nav-submenu-title">
                                    <ul class="nav-menu">
                                        <span>
                                            <i class="feather icon-trash-2"></i>
                                            <span>Inventory Trash</span>
                                        </span>
                                    </ul>
                                </div>
                            </a>
                            <a href="{{ route('trash.kategori') }}">
                                <div class="nav-submenu-title">
                                    <ul class="nav-menu">
                                        <span>
                                            <i class="feather icon-trash"></i>
                                            <span>Kategori Trash</span>
                                        </span>
                                    </ul>
                                </div>
                            </a>
                        </ul>
                    </li>
                </ul>
            </li>
            @endif

        </ul>
    </div>
</div>
<!-- Header Navbar END -->
