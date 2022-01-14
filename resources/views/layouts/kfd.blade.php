<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventori - Kimia Farma Diagnostika</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('html/demo/app/assets/images/logo/favicon.ico') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('html/demo/app/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="layout">
        <div class="horizontal-layout">
            <!-- Header START -->
            <div class="header-text-dark header-nav layout-horizon">
                <div class="header-nav-wrap container">
                    <div class="header-nav-left">
                        <div class="nav-logo">
                            <div class="w-100 logo">
                                <img class="img-fluid" src="{{ asset('html/demo/app/assets/images/logo/logo.png') }}" style="max-height: 70px;" alt="logo">
                            </div>
                        </div>
                        <div class="header-nav-item mobile-toggle">
                            <div class="header-nav-item-select cursor-pointer">
                                <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav-right">
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-notification">
                                <div class="toggle-wrapper" id="nav-notification-dropdown" data-bs-toggle="dropdown">
                                    <i class="header-nav-item-select nav-icon feather icon-bell"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-notification-header">
                                        <h5 class="mb-0">Notifications</h5>
                                        <a href="#" class="font-size-sm">Mark All as Read</a>
                                    </div>
                                    <div class="nav-notification-body">
                                        <div class="nav-notification-item ">
                                            <div class="avatar avatar-circle avatar-image" style="width: 40px; height: 40px; line-height: 40px;">
                                                <img src="{{ asset('html/demo/app/assets/images/avatars/thumb-8.jpg') }}" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark">Jean Bowman </span>
                                                    <span>invited you to new project.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-primary feather font-size-lg icon-info avatar avatar-circle" style="width: 40px; height: 40px; line-height: 40px;">                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Please submit your daily report.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-success feather font-size-lg icon-info avatar avatar-circle" style="width: 40px; height: 40px; line-height: 40px;">                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Your request has been approved.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="avatar avatar-circle avatar-image" style="width: 40px; height: 40px; line-height: 40px;">
                                                <img src="{{ asset('html/demo/app/assets/images/avatars/thumb-4.jpg') }}" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark">Jenifer Ruiz </span>
                                                    <span>mentioned you in comment.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nav-notification-item ">
                                            <div class="bg-success feather font-size-lg icon-x-circle avatar avatar-circle" style="width: 40px; height: 40px; line-height: 40px;">                                            </div>
                                            <div class="ms-2">
                                                <span>
                                                    <span class="fw-bolder text-dark"> </span>
                                                    <span>Your request has been rejected.</span>
                                                </span>
                                                <div class="font-size-sm fw-bold mt-1">
                                                    <i class="feather icon-clock"></i>
                                                    <span class="ms-1">4 months ago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-notification-footer">
                                        <a href="#" class="font-size-sm">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-item">
                            <div class="header-nav-item-select">
                                <div class="toggle-wrapper" data-bs-toggle="modal" data-bs-target="#quick-view">
                                    <i class="nav-icon feather icon-settings"></i>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select">
                                <div class="toggle-wrapper" id="nav-lang-dropdown" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-circle avatar-image" style="width: 22px; height: 22px; line-height: 22px;">
                                        <img src="{{ asset('html/demo/app/assets/images/thumbs/en_US.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image" style="width: 18px; height: 18px; line-height: 18px;">
                                                <img src="{{ asset('html/demo/app/assets/images/thumbs/en_US.png') }}" alt="">
                                            </div>
                                            <span class="ms-2">English</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image" style="width: 18px; height: 18px; line-height: 18px;">
                                                <img src="{{ asset('html/demo/app/assets/images/thumbs/fr_FR.png') }}" alt="">
                                            </div>
                                            <span class="ms-2">French</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-nav-item">
                            <div class="dropdown header-nav-item-select nav-profile" >
                                <div class="toggle-wrapper" id="nav-profile-dropdown" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-circle avatar-image" style="width: 35px; height: 35px; line-height: 35px;">
                                        <img src="{{ asset('html/demo/app/assets/images/avatars/thumb-1.jpg') }}" alt="">
                                    </div>
                                    <span class="fw-bold mx-1">Julio Baker</span>
                                    <i class="feather icon-chevron-down"></i>
                                </div>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="nav-profile-header">
                                       <div class="d-flex align-items-center">
                                            <div class="avatar avatar-circle avatar-image">
                                                <img src="{{ asset('html/demo/app/assets/images/avatars/thumb-1.jpg') }}" alt="">
                                            </div>
                                            <div class="d-flex flex-column ms-1">
                                                <span class="fw-bold text-dark">Julio Baker</span>
                                                <span class="font-size-sm">Julio@themenate.com</span>
                                            </div>
                                       </div>
                                    </div>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                       <div class="d-flex align-items-center">
                                           <i class="font-size-lg me-2 feather icon-user"></i>
                                           <span>Profile</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                       <div class="d-flex align-items-center">
                                           <i class="font-size-lg me-2 feather icon-settings"></i>
                                           <span>Settings</span>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                       <div class="d-flex align-items-center"><i class="font-size-lg me-2 feather icon-life-buoy"></i>
                                        <span>Support</span>
                                    </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                       <div class="d-flex align-items-center"><i class="font-size-lg me-2 feather icon-power"></i>
                                        <span>Sign Out</span>
                                    </div>
                                    </a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header END -->

            @include('template_backend.navbar')

            <!-- Side Nav START -->
            <div class="side-nav vertical-menu nav-menu-light scrollable">
                <div class="nav-logo">
                    <div class="w-100 logo">
                        <img class="img-fluid" src="{{ asset('html/demo/app/assets/images/logo/logo.png') }}" style="max-height: 70px;" alt="logo">
                    </div>
                    <div class="mobile-close">
                        <i class="icon-arrow-left feather"></i>
                    </div>
                 </div>
                 <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="index.html">
                            <i class="feather icon-home"></i>
                            <span class="nav-menu-item-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-group-title">APPS</li>
                    <li class="nav-menu-item">
                        <a href="h-mail.html">
                            <i class="feather icon-mail"></i>
                            <span class="nav-menu-item-title">Mail</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="h-chat.html">
                            <i class="feather icon-message-circle"></i>
                            <span class="nav-menu-item-title">Chat</span>
                        </a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="h-calendar.html">
                            <i class="feather icon-calendar"></i>
                            <span class="nav-menu-item-title">Calendar</span>
                        </a>
                    </li>
                    <li class="nav-group-title">USER INTERFACE</li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-box"></i>
                            <span>UI Elements</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="h-avatar.html">Avatar</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-alert.html">Alert</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-badge.html">Badge</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-buttons.html">Buttons</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-cards.html">Cards</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-icons.html">Icons</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-lists.html">Lists</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-typography.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-package"></i>
                            <span>Components</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="h-accordion.html">Accordion</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-carousel.html">Carousel</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-dropdown.html">Dropdown</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-modals.html">Modals</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-toasts.html">Toasts</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-popover.html">Popover</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-progress.html">Progress</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-tabs.html">Tabs</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-tooltips.html">Tooltips</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-file-text"></i>
                            <span>Forms</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="h-form-elements.html">Form Elements</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-form-layouts.html">Form Layouts</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-form-validation.html">Form Validation</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-grid"></i>
                            <span>Tables</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="h-basic-table.html">Basic Table</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu-item">
                        <a href="h-chart.html">
                            <i class="feather icon-bar-chart"></i>
                            <span class="nav-menu-item-title">Chart</span>
                        </a>
                    </li>
                    <li class="nav-group-title">PAGES</li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-settings"></i>
                            <span>Utility</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="h-profile-personal.html">Profile</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-invoice.html">Invoice</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-faq.html">FAQ</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-pricing.html">Pricing</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="h-user-list.html">User List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-lock"></i>
                            <span>Auth</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="login.html">Login</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="login-v2.html">Login v2</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="login-v3.html">Login v3</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="register.html">Register</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="register-v2.html">Register v2</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="register-v3.html">Register v3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-submenu">
                        <a class="nav-submenu-title">
                            <i class="feather icon-slash"></i>
                            <span>Errors</span>
                            <i class="nav-submenu-arrow"></i>
                        </a>
                        <ul class="nav-menu menu-collapse">
                            <li class="nav-menu-item">
                                <a href="error.html">Error 1</a>
                            </li>
                            <li class="nav-menu-item">
                                <a href="error-v2.html">Error 2</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Side Nav END -->

            <!-- Content START -->
            <div class="content container">
                <div class="main">
                    @yield('content')
                </div>
                <!-- Footer START -->
                <div class="footer">
                    <div class="footer-content">
                        <p class="mb-0">Copyright © 2021 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray me-3">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content END -->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog right">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title pull-left">Theme Config</h4>
                            <button type="button" class="close pull-right" data-bs-dismiss="modal">
                                <span>×</span>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="mb-4">
                                <h5 class="mb-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex mt-2">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="#ffffff">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="#11a1fd">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="#00c569">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-info" name="header-theme" type="radio" value="#5a75f9">
                                        <label for="header-info"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-warning" name="header-theme" type="radio" value="#ffc833">
                                        <label for="header-warning"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="#f46363">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Header Navbar Dark</h5>
                                <p>Change Header Navbar to dark</p>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="side-nav-theme-toggle" id="side-nav-theme-toggle">
                                    <label class="form-check-label" for="side-nav-theme-toggle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="mb-0">Vertical Layout</h5>
                                <p>Set Vertical Layout</p>
                                <div class="btn-group btn-group-sm">
                                    <a href="index.html" class="btn btn-outline-primary" aria-current="page">Vertical</a>
                                    <a href="#" class="btn btn-outline-primary active">Horizontal</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick View END -->
        </div>
    </div>


    <!-- Core Vendors JS -->
    <script src="{{ asset('html/demo/app/assets/js/vendors.min.js') }}"></script>

    <!-- page js -->
    <script src="{{ asset('html/demo/app/assets/vendors/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('html/demo/app/assets/js/pages/dashboard.js') }}"></script>

    <!-- Core JS -->
    <script src="{{ asset('html/demo/app/assets/js/app.min.js') }}"></script>

</body>

</html>
