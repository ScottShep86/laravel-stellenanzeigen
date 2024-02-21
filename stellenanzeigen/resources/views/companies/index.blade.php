<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <h1 class="col-span-full">All Companies</h1>
                    @foreach ($companies as $company)
                        <div class="border p-4 rounded-lg">
                            <h3 class="font-bold">{{ $company->name }}</h3>
                            <p>{{ $company->address }}</p>
                            <p>{{ $company->plz }} {{ $company->city }}</p>
                            <p>{{ $company->phone }}</p>
                            <p>{{ $company->email }}</p>
                            <ul>
                                @foreach ($company->jobs as $job)
                                    <li>
                                        <a href="{{ route('jobs.show', ['job' => $job->id]) }}" class="text-blue-600 hover:underline">{{ $job->title }}</a>
                                        - {{ $job->location }} - Salary: {{ number_format($job->salary, 0, ',', '.') }}€
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
