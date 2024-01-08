@extends('backend.main')
@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJCD1q8+2jzI484dF5gE5u75MIp0I5f" crossorigin="anonymous">
</head>
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
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
        
                                            <tbody>

                                                
                                            @foreach ($applications as $application )
                                            <tr>
                                                <td>{{$application->name}}</td>
                                                <td>{{$application->investment_category}}</td>
                                                <td>00{{$application->id}}</td>
                                                <td>{{$application->mobile_number}}</td>
                                                <td style="display: flex;"><i class="fas fa-eye" style="cursor: pointer;" data-toggle="modal" data-target="#productModal" data-productid="{{ $application->id }}" data-productname="{{ $application->name }}" data-productprice="{{ $application->investment_category }}"></i>
                                                     <form action="/approve/{{$application->id}}" method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-success">Approve</button>
                                                </form></td>
                                                
                                               
                                            </tr>
                                            {{-- <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p id="productDetails"></p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
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
            {{-- <script>
    $(document).ready(function () {
        $('.fa-eye').on('click', function () {
            var productId = $(this).data('productid');
            var productName = $(this).data('productname');
            var productPrice = $(this).data('productprice');

            $('#productDetails').html('ID: ' + productId + '<br>Name: ' + productName + '<br>Price: ' + productPrice);

            $('#productModal').modal('show');
        });
    });
</script> --}}

@endsection
