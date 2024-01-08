@extends('backend.main')
@section('content')

<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Fixed Deposit</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                            <li class="breadcrumb-item active">Fixed Deposit</li>
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
                                                <th>Initial Investment</th>
                                                <th>Interest Rate</th>
                                                <th>Tenure of Security</th>
                                                <th>Telephone</th>
                                                
                                            </tr>
                                            </thead>
        
                                            <tbody>

                                                
                                            @foreach ($fixeddeposits as $fixeddeposit )
                                            <tr>
                                                <td>{{$fixeddeposit->name}}</td>
                                                <td>{{$fixeddeposit->deposit_amnt}}</td>
                                                <td>{{$fixeddeposit->interest_rate}}</td>
                                                <td>{{$fixeddeposit->tenure_of_security}}</td>
                                                <td>{{$fixeddeposit->mobile_number}}</td>
                                                
                                               
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

            </div>

@endsection
