@extends ('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="breadcrumbs-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3>{{ isset($id) ? 'Update' : 'Create' }} Branches</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>
                                    {{ isset($id) ? 'Update' : 'Create' }} Branches </b></p>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="notika-icon notika-close"></i></span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> <strong>- </strong>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST"
                        action=" {{ isset($id) ? route('updateBranches', $id) : route('createBranches') }} ">
                        @if (isset($id))
                            @method('PUT')
                        @endif
                        @csrf
                        <div class="row" style="margin-top:20px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Code</label>
                                    <input type="text" name="code" class="form-control"
                                        value="{{ isset($branch) ? $branch->code : '' }}" placeholder="Code">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ isset($branch) ? $branch->name : '' }}" placeholder="Name">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Address 1</label>
                                    <input type="text" name="address1" class="form-control"
                                        value="{{ isset($branch) ? $branch->address1 : '' }}" placeholder="Address 1">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Address 2</label>
                                    <input type="text" name="address2" class="form-control"
                                        value="{{ isset($branch) ? $branch->address2 : '' }}" placeholder="Address 2">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Address 3</label>
                                    <input type="text" name="address3" class="form-control"
                                        value="{{ isset($branch) ? $branch->address3 : '' }}" placeholder="Address 3">
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Town</label>
                                    <input type="text" name="town" class="form-control"
                                        value="{{ isset($branch) ? $branch->town : '' }}" placeholder="Town">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>County</label>
                                    <input type="text" name="county" class="form-control"
                                        value="{{ isset($branch) ? $branch->county : '' }}" placeholder="County">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Postcode</label>
                                    <input type="text" name="postcode" class="form-control"
                                        value="{{ isset($branch) ? $branch->postcode : '' }}" placeholder="Postcode">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control"
                                        value="{{ isset($branch) ? $branch->phone : '' }}" placeholder="Phone">
                                </div>

                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-12 text-center ">
                                <button type="button"
                                    class="btn btn-primary btn-icon-notika waves-effect form-btn form-cancel-btn ">
                                    Cancel</button>
                                <button type="submit"
                                    class="btn btn-primary btn-icon-notika waves-effect form-btn ">{{ isset($id) ? 'Update' : 'Create' }}</button>

                            </div>
                            {{-- <div class="row">
                                    <div>
                                        <div class="col-lg-6">
                                            <div class="form-btn">
                                                <button class="btn btn-primary btn-icon-notika waves-effect"><i
                                                    class="fa fa-plus-circle" aria-hidden="true"></i> Create</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-btn">
                                                <a href="/users/create"><button type= "button"
                                                        class="btn btn-primary btn-icon-notika waves-effect">
                                                        Cancel</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
