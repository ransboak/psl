@extends('backend.main')
@section('staff')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Staff</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                <li class="breadcrumb-item active">Staff</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="my-4">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Add New Staff</button>
                            </div>

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Staff ID</th>
                                    <th>Telephone</th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                    @foreach ($users as $key => $user )
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$user->firstname}}</td>
                                        <td>{{$user->lastname}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->staff_id}}</td>
                                        <td>{{$user->contact}}</td>
                                    </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
                <!-- sample modal content -->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="myModalLabel">Add Staff</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="modal-body" action="/create-staff" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter lastname">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="contact">Telephone</label>
                                <input type="text" name="contact" class="form-control" id="contact" aria-describedby="emailHelp" placeholder="Enter Telephone">
                            </div>
                            <div class="form-group">
                                <label for="staff_id">Staff ID</label>
                                <input type="text" name="staff_id" class="form-control" id="staff_id" aria-describedby="emailHelp" placeholder="Enter staff id">
                            </div>
                            <div class="form-group">
                                <label for="password">Enter Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
                            </div>
                        </form>
                    </div>
                    
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © PSL.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-right d-none d-sm-block">
                        Design & Develop by Digital Transformation
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection
