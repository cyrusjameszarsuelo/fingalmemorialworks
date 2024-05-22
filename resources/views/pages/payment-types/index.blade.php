@extends('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Payment Type</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>Payment Type </b></p>
                    </div>
                </div>
                <form>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Search:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="selectpicker">
                                            <option>Search Field</option>
                                            <option>Name</option>
                                            <option>Access Level</option>
                                            <option>Email</option>
                                            <option>Branch</option>
                                            <option>Last Updated</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Search">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="row">
                                <div>
                                    <div class="col-lg-6">
                                        <div class="header-btn">
                                            <button class="btn btn-primary btn-icon-notika waves-effect"><i
                                                    class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="header-btn">
                                            <a href="/order/create"><button
                                                    class="btn btn-primary btn-icon-notika waves-effect"><i
                                                        class="fa fa-plus-circle" aria-hidden="true"></i>
                                                    CREATE</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($paymentTypes as $paymentType)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$paymentType->name}}</td>
                                        <td class="popover-cl-pro">
                                            <a href="users/edit"class="btn btn-primary" data-trigger="hover"
                                                data-toggle="popover" data-placement="bottom" data-content="Edit"><i
                                                    class="fa fa-pencil"></i></a>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover"
                                                data-placement="bottom" data-content="Delete"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
