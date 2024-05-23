@extends('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Customer</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>Customer </b></p>
                    </div>
                </div>
                <form >
                    <div class="row" style="margin-top:20px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Search:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="selectpicker">
                                            <option disabled selected>- Field</option>
                                            <option>Lastname</option>
                                            <option>Deceased</option>
                                            <option>Phone</option>
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
                                            <a href="{{ route('customer.create') }}"><button type="button"
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
                                        <th>Customer Name</th>
                                        <th>Town</th>
                                        <th>County</th>
                                        <th>Postcode</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$customer->firstname}} {{$customer->surname}}</td>
                                        <td>{{$customer->town}}</td>
                                        <td>{{$customer->county}}</td>
                                        <td>{{$customer->postcode}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->telno}}</td>
                                        <td>{{$customer->mobile}}</td>
                                        <td class="popover-cl-pro">
                                            <a href="{{ route('customer.edit', [$customer]) }}"class="btn btn-primary" data-trigger="hover"
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
