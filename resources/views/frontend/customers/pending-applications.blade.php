@extends('dashboard')
@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pending Applications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Application Id</th>
                            <th>Investment Category</th>
                            <th>Mobile Number</th>
                            <th>Account Number</th>
                            
                        </tr>
                        </thead>
            
                        <tbody>
            
                            
                        @foreach ($applications as $application )
                        <tr>
                            <td>{{$application->id}}</td>
                            <td>{{$application->name}}</td>
                            <td>{{$application->mobile_number}}</td>
                            <td>{{$application->account_number}}</td>
                            
                           
                        </tr>
                        @endforeach
                       
            
                        
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection

 