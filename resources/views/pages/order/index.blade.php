@extends('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Orders</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>Orders</b></p>
                    </div>
                </div>
                <form>
                    <div class="row" style="margin-top:40px;">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Order Type:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Drama</option>
                                    <option>Cariska</option>
                                    <option>Cheriska</option>
                                    <option>Malias</option>
                                    <option>Kamines</option>
                                    <option>Austranas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Order Date:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="selectpicker">
                                            <option>Month</option>
                                            <option>Cariska</option>
                                            <option>Cheriska</option>
                                            <option>Malias</option>
                                            <option>Kamines</option>
                                            <option>Austranas</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="selectpicker">
                                            <option>Year</option>
                                            <option>Cariska</option>
                                            <option>Cheriska</option>
                                            <option>Malias</option>
                                            <option>Kamines</option>
                                            <option>Austranas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Branch:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Drama</option>
                                    <option>Cariska</option>
                                    <option>Cheriska</option>
                                    <option>Malias</option>
                                    <option>Kamines</option>
                                    <option>Austranas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Invoice Status:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <select class="selectpicker">
                                    <option>Drama</option>
                                    <option>Cariska</option>
                                    <option>Cheriska</option>
                                    <option>Malias</option>
                                    <option>Kamines</option>
                                    <option>Austranas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Search:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="selectpicker">
                                            <option>Search Field</option>
                                            <option>Cariska</option>
                                            <option>Cheriska</option>
                                            <option>Malias</option>
                                            <option>Kamines</option>
                                            <option>Austranas</option>
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
                                            <button type="submit" class="btn btn-primary btn-icon-notika waves-effect"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="header-btn">
                                            <a href="/order/create/general-details">
                                                <button type="button" class="btn btn-primary btn-icon-notika waves-effect" ><i class="fa fa-plus-circle" aria-hidden="true"></i> CREATE</button>
                                            </a>
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
                                        <th>Order No.</th>
                                        <th>Date</th>
                                        <th>Fixing Date</th>
                                        <th>Branch</th>
                                        <th>Order Type</th>
                                        <th>Customer</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>2011/04/25</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>2011/07/25</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>2009/01/12</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>2012/03/29</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>2008/11/28</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>2012/12/02</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>2012/08/06</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>2010/10/14</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>2009/09/15</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>2008/12/13</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td class="popover-cl-pro">
                                            <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Delete"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
