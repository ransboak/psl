<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Metrica - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- leftbar-tab-menu -->
        @include('backend.sidebar')
        <!-- end leftbar-tab-menu-->

        <!-- Top Bar Start -->
        @include('backend.navbar')
        <!-- Top Bar End -->
        
        
<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">UI Kit</a></li>
                                <li class="breadcrumb-item active">Staff</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Datatable</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Staff</h4>
                                    <p class="text-muted mb-3">Staff Details
                                    </p>
    
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Staff ID</th>
                                            <th>Telephone</th>
                                        </tr>
                                        </thead>
    
                                        @foreach ($users as $user )
                                        <tbody>
                                            <tr>
                                                <td>{{$user->firstname}}</td>
                                                <td>{{$user->lastname}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->contact}}</td>
                                                
                                            </tr>
                                            
                                            </tbody>
                                        @endforeach
                                        
                                    </table>
                                    
                                </div>
                            </div>
                        </div> <!-- end col -->
                        <div>{{$users -> links()}}</div>
                        
                    </div>
        </div>
    </div>
</div>



        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <script src="../plugins/apexcharts/apexcharts.min.js"></script>
        
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        
        <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>

        
        
    </body>

</html>