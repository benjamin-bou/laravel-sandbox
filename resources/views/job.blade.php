<x-layout>
    <x-slot:title>
        Jobs Listing
    </x-slot:title>
    <h2>{{ $job['title'] }}</h2>
    <p>{{ $job['description'] }}</p>
    <p>{{ $job['salary'] }}</p>
</x-layout>