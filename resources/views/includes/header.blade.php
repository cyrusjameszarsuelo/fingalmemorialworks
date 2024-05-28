<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="#"><h1 class="text-logo">FINGAL MEMORIALS LTD</h1></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="fa fa-user"></i></span></a>
                            <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                <div class="hd-message-info">
                                    <a href="#">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <p>Edit Profile</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="{{ url('/logout') }}">
                                        <div class="hd-message-sn">
                                            <div class="hd-message-img chat-img">
                                                <i class="fa fa-sign-out"></i>
                                            </div>
                                            <div class="hd-mg-ctn">
                                                <p>Log out</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#orders-mob" href="#">Orders</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="/order">Orders</a></li>
                                    <li><a href="/customer">Customer</a></li>
                                    <li><a href="/complete-unsettled">Complete/Invoiced Unsettled</a></li>
                                </ul>
                            </li>
                            <li ><a data-toggle="collapse" data-target="#schedules-mob" href="#">Schedules</a>
                                <ul id="schedules-mob" class="collapse dropdown-header-top">
                                    <li><a href="/new-memorial">New Memorial</a></li>
                                    <li><a href="/renovation">Renovation</a></li>
                                    <li><a href="/sundries">Sundries</a> </li>
                                    <li><a href="/cremation-product">Cremation Products</a></li>
                                    <li><a href="/other">Other</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#reports-mob" href="#">Reports</a>
                                <ul id="reports-mob" class="collapse dropdown-header-top">
                                    <li><a href="/order-summary">Order Summary</a></li>
                                    <li><a href="/order-details">Order Details</a></li>
                                    <li><a href="/order-report">Order Report</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="collapse" data-target="#admin-mob" href="#">Admin</a>
                                <ul id="admin-mob" class="collapse dropdown-header-top">
                                    <li><a href="/users">Users</a></li>
                                    <li><a href="/branches">Branches</a></li>
                                    <li><a href="/document-types">Document Types</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="{{ Request::is('order','order/*','customer','customer/*','complete-unsettled','complete-unsettled/*',) ? 'active' : '' }}"><a data-toggle="tab" href="#orders"><i class="fa fa-list"></i> Orders</a></li>
                    <li class="{{ Request::is('new-memorial','new-memorial/*','renovation','renovation/*','sundries','sundries/*','cremation-product','cremation-product/*','other','other/*',) ? 'active' : '' }}"><a data-toggle="tab" href="#schedules"><i class="fa fa-calendar"></i> Schedules</a></li>
                    <li class="{{ Request::is('order-summary','order-summary/*','order-details','order-details/*','order-report','order-report/*',) ? 'active' : '' }}"><a data-toggle="tab" href="#reports"><i class="fa fa-folder-open-o"></i> Reports</a></li>
                    <li class=" {{ Request::is('users','users/*','branches','branches/*','document-types','document-types/*',) ? 'active' : '' }}" ><a data-toggle="tab" href="#admin"><i class="fa fa-cog"></i> Admin</a></li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="orders" class="tab-pane notika-tab-menu-bg animated flipInX {{ Request::is('order','order/*','customer','customer/*','complete-unsettled','complete-unsettled/*',) ? 'active' : '' }}">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/order">Orders</a></li>
                            <li><a href="/customer">Customer</a></li>
                            <li><a href="/complete-unsettled">Complete/Invoiced Unsettled</a></li>
                        </ul>
                    </div>
                    <div id="schedules" class="tab-pane notika-tab-menu-bg animated flipInX {{ Request::is('new-memorial','new-memorial/*','renovation','renovation/*','sundries','sundries/*','cremation-product','cremation-product/*','other','other/*',) ? 'active' : '' }}">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/new-memorial">New Memorial</a></li>
                            <li><a href="/renovation">Renovation</a></li>
                            <li><a href="/sundries">Sundries</a> </li>
                            <li><a href="/cremation-product">Cremation Products</a></li>
                            <li><a href="/other">Other</a></li>
                        </ul>
                    </div>
                    <div id="reports" class="tab-pane notika-tab-menu-bg animated flipInX {{ Request::is('order-summary','order-summary/*','order-details','order-details/*','order-report','order-report/*',) ? 'active' : '' }}">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/order-summary">Order Summary</a></li>
                            <li><a href="/order-details">Order Details</a></li>
                            <li><a href="/order-report">Order Report</a></li>
                        </ul>
                    </div>
                    <div id="admin" class="tab-pane notika-tab-menu-bg animated flipInX {{ Request::is('users','users/*','branches','branches/*','document-types','document-types/*','branches','branches/*','account-types','account-types/*','categories','categories/*','order-types','order-types/*','payment-types','payment-types/*',) ? 'active' : '' }}">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="/users">Users</a></li>
                            <li><a href="/branches">Branches</a></li>
                            <li><a href="/document-types">Document Types</a></li>
                            <li><a href="/account-types">Account Types</a></li>
                            <li><a href="/categories">Categories</a></li>
                            <li><a href="/order-types">Order Types</a></li>
                            <li><a href="/payment-types">Payment Types</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->