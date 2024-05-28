@extends ('pages.order.form')
@section('tab-content')
    <div class="job-details-field mt-40 mb-40">
		<h3 class="title text-center">Job Details</h3>
        <div class="row mt-50">
            <div class="col-12 col-md-3">
				<div class="nk-int-st mb-20">
                    <label>Details of work</label>
                    <input type="text" class="form-control" placeholder="Details of work">
                </div>
				<div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                    <label>Analysis:</label>
                    <select class="selectpicker">
                        <option>1</option>
                        <option>Cariska</option>
                        <option>Cheriska</option>
                        <option>Malias</option>
                        <option>Kamines</option>
                        <option>Austranas</option>
                    </select>
                </div>
				
            </div>
			<div class="col-12 col-md-3">
				<div class="nk-int-st mb-20">
                    <label>Gross</label>
                    <input type="text" class="form-control" placeholder="Gross">
                </div>
                <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                    <label>VC:</label>
                    <select class="selectpicker">
                        <option>Mr.</option>
                        <option>Cariska</option>
                        <option>Cheriska</option>
                        <option>Malias</option>
                        <option>Kamines</option>
                        <option>Austranas</option>
                    </select>
                </div>
                
            </div>
			<div class="col-12 col-md-3">
				<div class="nk-int-st mb-20">
                    <label>VAT</label>
                    <input type="text" class="form-control" placeholder="VAT">
                </div>
				<div class="nk-int-st mb-20">
                    <label>Nett</label>
                    <input type="text" class="form-control" placeholder="Nett">
                </div>
            </div>
			<div class="col-12 col-md-3">
				<div class="nk-int-st mb-20">
                    <label>Discount</label>
                    <input type="text" class="form-control" placeholder="Discount">
                </div>
            </div>
        </div>
		<div class="row mt-20">
            <div class="col-md-12 text-right">
                <div class="form-btn">
                    <button class="btn btn-primary btn-icon-notika waves-effect">Add</button>
                </div>
            </div>
        </div>
	</div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="data-table-list">
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Details of Work</th>
                                <th>Nett</th>
                                <th>VC</th>
                                <th>Analysis</th>
                                <th>Discount</th>
                                <th>VAT</th>
                                <th>Gross</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Renovation</td>
                                <td>234.43</td>
                                <td>T1</td>
                                <td>Renovation</td>
                                <td>0</td>
                                <td>43.43</td>
                                <td>243.43</td>
                                <td class="popover-cl-pro">
                                    <button class="btn btn-primary" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Edit"><i class="fa fa-pencil"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
		
    </div>
@endsection
