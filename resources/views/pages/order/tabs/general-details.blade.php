@extends ('pages.order.form')
@section('tab-content')
    <div>
        <div class="row mt-50">
            <h3 class="title text-center">General Details</h3>
            <div class="col-12 col-md-6">
                <h4 class="title-header title-header-md">Order Details</h4>
                <div class="nk-int-st mb-20">
                    <label>Order Headline</label>
                    <input type="text" class="form-control" placeholder="Headline">
                </div>
                <div class="chosen-select-act fm-cmp-mg mb-20">
                    <label>Cemetery</label>
                    <select class="chosen" data-placeholder="Choose a Country...">
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                    </select>
                </div>
                <div class="chosen-select-act fm-cmp-mg mb-20">
                    <label>Fixing Area</label>
                    <select class="chosen" data-placeholder="Choose a Country...">
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                    </select>
                </div>
                <div class="nk-int-st" style="margin-bottom:20px;">
                    <label>Plot / Grave</label>
                    <input type="text" class="form-control" placeholder="Plot/Grave">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h4 class="title-header title-header-md">Approvals</h4>
                <div class="fm-checkbox">
                    <label><input type="checkbox" class="i-checks"> <i></i> Inscription Completed</label>
                </div>
                <div class="nk-datapk-ctm form-elet-mg" id="data_1" style="margin-bottom:20px;">
                    <label>Job was fixed on</label>
                    <div class="input-group date nk-int-st">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" value="03/19/2018">
                    </div>
                </div>
                <h4 class="title-header title-header-md">Analysis Codes</h4>
                <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                    <label>Source:</label>
                    <select class="selectpicker">
                        <option>Monumental</option>
                        <option>Cariska</option>
                        <option>Cheriska</option>
                        <option>Malias</option>
                        <option>Kamines</option>
                        <option>Austranas</option>
                    </select>
                </div>
                <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                    <label>Category:</label>
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
        </div>
        <div class="row mt-40">
            <h3 class="title text-center">Customer Details</h3>
            <div class="col-12 col-md-6">
                <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                    <label>Title:</label>
                    <select class="selectpicker">
                        <option>Mr.</option>
                        <option>Cariska</option>
                        <option>Cheriska</option>
                        <option>Malias</option>
                        <option>Kamines</option>
                        <option>Austranas</option>
                    </select>
                </div>
                <div class="nk-int-st mb-20">
                    <label>First Name</label>
                    <input type="text" class="form-control" placeholder="Firstname">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Middle Name</label>
                    <input type="text" class="form-control" placeholder="Middlename">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Last Name</label>
                    <input type="text" class="form-control" placeholder="Lastname">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Email</label>
                    <input type="text" class="form-control " placeholder="Enter Email">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Account Number</label>
                    <input type="text" class="form-control" placeholder="Account Number">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="nk-int-st mb-20">
                    <label>Address 1</label>
                    <input type="text" class="form-control" placeholder="Address 1">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Address 2</label>
                    <input type="text" class="form-control" placeholder="Address 2">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Address 3</label>
                    <input type="text" class="form-control" placeholder="Address 3">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Town</label>
                    <input type="text" class="form-control" placeholder="Town">
                </div>
                <div class="nk-int-st mb-20">
                    <label>County</label>
                    <input type="text" class="form-control" placeholder="County">
                </div>
                <div class="nk-int-st mb-20">
                    <label>Postcode</label>
                    <input type="text" class="form-control" placeholder="Postcode">
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-md-12 text-center">
                <div class="form-btn">
                    <button class="btn btn-light btn-icon-notika waves-effect">Cancel</button>
                    <button class="btn btn-primary btn-icon-notika waves-effect">Create</button>
                </div>
            </div>
        </div>
    </div>
@endsection
