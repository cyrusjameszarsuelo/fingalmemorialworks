@extends('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <h3>Document Types</h3>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>Document Types</b></p>
                    </div>
                </div>
                <form>
                    <div class="row" style="margin-top:20px;">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="nk-int-mk sl-dp-mn">
                                <h2>Search:</h2>
                            </div>
                            <div class="bootstrap-select fm-cmp-mg">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <select class="selectpicker">
                                            <option>Search Field</option>
                                            <option>Document Type</option>
                                            <option>Updated By</option>
                                            <option>Last Updated</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-8">
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
                                            <a href="/document-types/create"><button type="button"
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
                                        <th>Document Type</th>
                                        <th>Last Updated</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($documentTypes as $documentType)
                                        <tr>
                                            <td id="tr{{ $documentType->id }}">{{ $loop->iteration }}</td>
                                            <td>{{ $documentType->name }}</td>
                                            <td>{{ $documentType->updated_at }}</td>
                                            <td class="popover-cl-pro">
                                                <a href="document-types/edit/{{ $documentType->id }}"
                                                    class="btn btn-primary" data-trigger="hover" data-toggle="popover"
                                                    data-placement="bottom" data-content="Edit"><i
                                                        class="fa fa-pencil"></i></a>
                                                        <button 
                                                        data-name="{{ $documentType->name }}"
                                                        data-url="deleteDocumenttType"
                                                        data-id="{{ $documentType->id }}"
                                                        class="btn btn-danger deleteDataInfo" 
                                                        type="button" 
                                                        data-trigger="hover"
                                                        data-toggle="popover" 
                                                        data-placement="bottom"
                                                        >
                                                    <i class="fa fa-trash"></i>
                                                </button>
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

    @if (session('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection

@section('page-scripts')
    <script src="{{ asset('js/delete-script.js') }}"></script>
@endsection