<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <h1 class="col-span-full">All Jobs</h1>
                    @foreach ($jobs as $job)
                        <a href="{{ route('jobs.show', ['job' => $job->id]) }}" class="border p-4 rounded-lg block hover:bg-gray-100 transition duration-300">
                            <h3 class="font-bold">{{ $job->title }}</h3>
                            <p class="text-gray-600">{{ $job->description }}</p>
                            <div class="flex justify-between mt-4">
                                <span class="text-gray-500">{{ $job->city }}</span>
                                <span class="text-gray-500">{{ number_format($job->salary, 0, ',', '.') }}€</span>
                            </div>
                            <p class="text-gray-500 mt-2">Posted: {{ $job->created_at->diffForHumans() }}</p>
                        </a>
                    @endforeach
            
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
