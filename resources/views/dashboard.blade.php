<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Telephone</th>
                
            </tr>
            </thead>

            <tbody>

                
            @foreach ($applications as $application )
            <tr>
                <td>{{$application->user_id}}</td>
                <td>{{$application->name}}</td>
                <td>{{$application->mobile_number}}</td>
                <td>{{$application->account_number}}</td>
                
               
            </tr>
            @endforeach
           

            
           
            </tbody>
        </table>
    </div>
</x-app-layout>
