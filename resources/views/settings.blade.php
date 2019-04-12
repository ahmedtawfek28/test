@extends('layouts.app')

@section('content')
    
<!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
    
                <!-- row -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                                                        <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home8" role="tab"><span><i class="ti-user"> Profile Settings</i></span></a> </li>
                                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile8" role="tab"><span><i class="fa fa-lock"> Password</i></span></a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content tabcontent-border">
                                        <div class="tab-pane active" id="home8" role="tabpanel">
                                            <div class="p-20">
                                                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <!-- column -->
                                                                    <div class="col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-body">
        
                                                                                <div class="form-group">
                                                                                    <label for="name">User Name</label>
                                                                                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                        <label for="email">Email</label>
                                                                                        <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                                                                                    </div>
                                                                              
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- column -->
                                                                  
                                                                </div>
                                                            <div class="body">
                                                                
                                                                    </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal" href="../">Back</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                  </div>
                                                            </div>
                                                        </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane  p-20" id="profile8" role="tabpanel">
                                                <div class="p-20">
                                                        <form action="{{route('password.update')}}" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <!-- column -->
                                                                        <div class="col-lg-6">
                                                                            <div class="card">
                                                                                <div class="card-body">

                                                                                    <div class="form-group">
                                                                                            <label for="password">New Password</label>
                                                                                            <input type="password" class="form-control" id="password"  name="password">
                                                                                            
                                                                                            <label for="confirm_password">Confirm Password</label>
                                                                                           <input type="password" class="form-control" id="confirm_password" name="password_confirmation">

                                                                                     </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- column -->
                                                                      
                                                                    </div>
                                                                <div class="body">
                                                                    </div>
                                                                        </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal" href="../">Back</button>
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                      </div>
                                                                </div>
                                                            </form>
                                                </div>
                                           
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        </div>
                    </div>
                    @endsection
