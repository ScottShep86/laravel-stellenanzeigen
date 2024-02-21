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
                    <h1>All Companies</h1>
    @foreach ($companies as $company)
    <h3>{{$company->name}}</h3>
    <h4>{{$company->category}}</h4>
    <p>{{$company->address}}, {{$company->plz}} {{$company->city}}</p>
    <p>{{$company->phone}} / {{$company->email}}</p>
    <ul>
        @foreach ($company->jobs as $job)
            <li>{{$job->title}} - {{$job->location}} - Salary: {{ number_format($job->salary, 0, ',', '.') }}€</li>
        @endforeach
    </ul>
    @endforeach
    <a href="{{ route('companies.create') }}">Add New Company</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>