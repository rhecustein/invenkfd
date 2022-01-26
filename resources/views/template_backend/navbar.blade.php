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
                    <div class="nav-submenu-title">
                        <span>
                            <i class="feather icon-menu"></i>
                            <span>Others</span>
                        </span>
                        <i class="nav-submenu-arrow caret-bottom"></i>
                    </div>
                <ul class="nav-menu">

                    <li class="nav-menu-item">
                        <a href="{{ route('trash') }}">
                            <i class="feather icon-trash-2"></i>
                            <span>Trash List</span>
                        </a>
                    </li>

                    <li class="nav-menu-item">
                        <a href="{{ route('trash.kategori') }}">
                            <i class="feather icon-trash"></i>
                            <span>Trash Lis Kategori</span>
                        </a>
                    </li>

                    <li class="nav-menu-item">
                        <a href="{{ route('kategori') }}">
                            <i class="feather icon-package"></i>
                            <span>Kategori</span>
                        </a>
                    </li>

                    <li class="nav-menu-item">
                        <a href="{{ route('inventaris') }}">
                                    <i class="feather icon-package"></i>
                                    <span>Inventory</span>
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- Header Navbar END -->
