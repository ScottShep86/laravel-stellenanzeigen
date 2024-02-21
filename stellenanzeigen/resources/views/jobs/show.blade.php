<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button class="mb-4 flex items-center text-gray-700 hover:text-gray-900 transition-transform duration-300 transform hover:-translate-y-1">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                        </svg>
                        <a href="{{ url('/jobs') }}">Back to all Jobs</a>
                    </button>
                    
                    
                    <h1>{{ $job->title }}</h1> 
                    <p>{{$company->name}}</p> 
                    <h3>{{ $job->location }}</h3>
                    <p class="inline-block px-3 py-1 rounded-lg text-white custom-color capitalize">{{ $job->category }}</p>
                    <p><strong>Salary: </strong>{{ number_format($job->salary, 0, ',', '.') }}€</p>
                    <hr>
                    <div class="bg-gray-100 rounded-lg p-4 shadow-md">
                        <h2 class="text-xl font-semibold mb-2">Description</h2>
                        <p class="text-gray-800">{{ $job->description }}</p>
                    </div>
                    <div class="bg-gray-100 rounded-lg p-4 shadow-md">
                        <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                        <p><strong>Email:</strong> {{ $company->email }}</p>
                        <p><strong>Address:</strong> {{ $company->address }}, {{ $company->plz }} {{ $company->city }}</p>
                        <p><strong>Email:</strong> {{ $company->email }}</p>
                        <p><strong>Tel.:</strong> {{ $company->phone }}</p>
                        <p><strong>Website:</strong> {{ $company->website }}</p>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
