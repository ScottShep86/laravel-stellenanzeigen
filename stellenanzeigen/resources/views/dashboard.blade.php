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
                    @if(auth()->user()->role === 'company')
                        @php
                            $company = \App\Models\Company::where('name', auth()->user()->name)->first();
                        @endphp

                        @if($company)
                            <h1>{{ $company->name }}</h1>
                            <h3>{{ $company->city }}</h3>
                            <button class="custom-color-two hover:bg-red-500 text-white font-bold py-2 px-4 rounded"><a href="{{ route('jobs.create') }}">Add New Job</a></button>
                            <h4>Available Jobs</h4>
                            <ul>
                                @foreach ($company->jobs as $job)
                                    <li>{{$job->title}} - {{$job->location}} - Salary: {{ number_format($job->salary, 0, ',', '.') }}€</li>
                                    <form action="{{ route('jobs.destroy', $job) }}" method="post" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                                    </form>
                                @endforeach
                            </ul>
                            <!-- Display other company information as needed -->
                        @else
                            <a href="{{ route('companies.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Company Information</a>
                        @endif
                        @else
                        <h1>Hello {{ auth()->user()->name }}</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
