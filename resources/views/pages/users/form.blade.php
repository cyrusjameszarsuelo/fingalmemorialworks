@extends ('main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-content">
                <div class="breadcrumbs-content">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <h3>{{ isset($id) ? 'Update' : 'Create' }} Users</h3>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <p class="breadcrumbs-link"><a href="">Dashboard</a> / <b>
                                    {{ isset($id) ? 'Update' : 'Create' }} Users </b></p>
                        </div>
                    </div>
                    <form method="POST" action=" {{ isset($id) ? route('updateUser',$id) : route('createUser') }} ">
                        @csrf
                        <div class="row" style="margin-top:20px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{ isset($user) ? $user->firstname :"" }}"
                                        placeholder="First Name">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Last Name</label>
                                    <input type="text" name="lastname" class="form-control" value="{{  isset($user) ? $user->lastname :""}}" placeholder="Last Name">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Email</label>
                                    <input type="text" name="email"class="form-control" value="{{  isset($user) ? $user->email : ""}}" placeholder="Email">
                                </div>
                                <div class="bootstrap-select fm-cmp-mg" style="margin-bottom:20px;">
                                    <label>Access Level</label>
                                    <select class="selectpicker" name="access_level_id" >
                                        @foreach ($accessLevels as $accessLevel)
                                            <option value="{{  $accessLevel->id }}" {{ isset($id) && $user->access_level_id==$accessLevel->id ? "selected" :"" }}>{{ $accessLevel->type }}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control"  value="{{  isset($user) ? $user->username :"" }}"  placeholder="Username">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control"   placeholder="Password">
                                </div>
                                <div class="nk-int-st" style="margin-bottom:20px;">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-12 text-center ">
                                <button type="button" class="btn btn-primary btn-icon-notika waves-effect form-btn form-cancel-btn "> Cancel</button>
                                <button type="submit" class="btn btn-primary btn-icon-notika waves-effect form-btn ">{{ isset($id) ? 'Update' : 'Create' }}</button>
                                
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
