@extends('backend.main')
@section('content')

<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Pending Applications</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                            <li class="breadcrumb-item active">Pending Applications</li>
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
        
                                       
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Investment Category</th>
                                                <th>Application Id</th>
                                                <th>Telephone</th>
                                                
                                            </tr>
                                            </thead>
        
                                            <tbody>

                                                
                                            @foreach ($applications as $application )
                                            <tr>
                                                <td>{{$application->name}}</td>
                                                <td>{{$application->investment_category}}</td>
                                                <td>00{{$application->id}}</td>
                                                <td>{{$application->mobile_number}}</td>
                                                
                                               
                                            </tr>
                                            @endforeach
                                           

                                            
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
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
