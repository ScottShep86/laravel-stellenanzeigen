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
                    <h1>All Jobs</h1>
    @foreach ($jobs as $job)
    <a href="{{ route('jobs.show', ['job' => $job->id]) }}"><h3>{{$job->title}}</h3></a>
    @endforeach
    @if(auth()->user()->role === 'company')
    <a href="{{ route('jobs.create') }}">Add New Job</a>
@endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>