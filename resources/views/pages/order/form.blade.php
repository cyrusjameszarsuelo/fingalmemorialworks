@extends ('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="breadcrumbs-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3>Create Orders</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>Orders</b></p>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <h4 class="title-header title-header-md">Order Details</h4>
                            <div class="nk-int-st" style="margin-bottom:20px;">
                                <label>Order No.</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                                <label>Type:</label>
                                <select class="selectpicker">
                                    <option>Monumental</option>
                                    <option>Cariska</option>
                                    <option>Cheriska</option>
                                    <option>Malias</option>
                                    <option>Kamines</option>
                                    <option>Austranas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 divider-left">
                            <div class="empty-div"></div>
                            <div class="nk-datapk-ctm form-elet-mg" id="data_1" style="margin-bottom:20px;">
                                <label>Order Date</label>
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" value="03/19/2018">
                                </div>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                                <label>Branch:</label>
                                <select class="selectpicker">
                                    <option>Fingal</option>
                                    <option>Cariska</option>
                                    <option>Cheriska</option>
                                    <option>Malias</option>
                                    <option>Kamines</option>
                                    <option>Austranas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 divider-left">
                            <h4 class="title-header">Deceased Details</h4>
                            <div class="nk-int-st" style="margin-bottom:20px;">
                                <label>Deceased Name</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="nk-datapk-ctm form-elet-mg" id="data_1" style="margin-bottom:20px;">
                                <label>Date of Death</label>
                                <div class="input-group date nk-int-st">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control" value="03/19/2018">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 divider-left">
                            <h4 class="title-header title-header-md">Order Totals</h4>
                            <div class="nk-int-st" style="margin-bottom:20px;">
                                <label>Value</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="nk-int-st" style="margin-bottom:20px;">
                                <label>Balance</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tabs-info-area">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="widget-tabs-int">
                                        <div class="widget-tabs-list">
                                            <ul class="nav nav-tabs">
                                                {{-- <li class="active"><a data-toggle="tab" href="#general-details"><i
                                                                class="fa fa-file-text-o" aria-hidden="true"></i> General
                                                            Details</a></li>
                                                    <li><a data-toggle="tab" href="#job-details"><i
                                                                class="fa fa-folder-open-o" aria-hidden="true"></i> Job
                                                            Details</a></li>
                                                    <li><a data-toggle="tab" href="#inscription-details"><i
                                                                class="fa fa-text-height" aria-hidden="true"></i>
                                                            Inscription Details</a></li>
                                                    <li><a data-toggle="tab" href="#accounts-posting"><i
                                                                class="fa fa-calculator" aria-hidden="true"></i> Accounts
                                                            Posting</a></li>
                                                    <li><a data-toggle="tab" href="#photos"><i class="fa fa-picture-o"
                                                                aria-hidden="true"></i> Photos</a></li> --}}

                                                @foreach ($tabs as $tab)
                                                    <li class="{{ $tab === Request::segment(3) ? 'active' : '' }}"><a
                                                            role="tab" href="{{ url('order/create/' . $tab) }}"><i
                                                                class="fa fa-file-text-o" aria-hidden="true"></i>
                                                            {{ str_replace('-', ' ', ucfirst($tab)) }}</a></li>
                                                @endforeach
                                            </ul>
                                            <div class="tab-content tab-custom-st">
                                                @foreach ($tabs as $tab)
                                                    <div id="{{ $tab }}"
                                                        class="tab-pane fade in {{ $tab === Request::segment(3) ? 'active' : '' }}"
                                                        role="tabpanel">
                                                        <div class="tab-ctn">
                                                            @yield('tab-content')
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
