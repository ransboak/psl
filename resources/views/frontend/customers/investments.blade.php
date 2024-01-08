@extends('dashboard')
@section('content');
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Investments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Investment Id</th>
                            <th>Investment Category</th>
                            <th>Initial Investment</th>
                            <th>Interest Rate</th>
                            <th>Tenure Of Securityy</th>
                        </tr>
                        </thead>
            
                        <tbody>
            
                            
                        @foreach ($fixeddeposits as $fixeddeposit )
                        <tr>
                            <td>00{{$fixeddeposit->id}}</td>
                            <td>Fixed Deposit</td>
                            <td>{{$fixeddeposit->deposit_amnt}}</td>
                            <td>{{$fixeddeposit->interest_rate}}</td>
                            <td>{{$fixeddeposit->tenure_of_security}}</td>
                        </tr>
                        @endforeach
                        @foreach ($tbills as $tbill )
                        <tr>
                            <td>00{{$tbill->id}}</td>
                            <td>Treasury Bill</td>
                            <td>{{$tbill->deposit_amnt}}</td>
                            <td>{{$tbill->interest_rate}}</td>
                            <td>{{$tbill->tenure_of_security}}</td>
                        </tr>
                        @endforeach
                       
            
                        
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection
 