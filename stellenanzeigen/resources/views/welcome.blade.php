<x-guest-layout>
    <div class="flex justify-evenly h-16">
        <button class="custom-color hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><a href="{{ url('/login') }}">LOGIN</a></button>
        <button class="custom-color-two hover:bg-red-500 text-white font-bold py-2 px-4 rounded"><a href="{{ url('/register') }}">REGISTER</a></button>
    </div>
</x-guest-layout>
