<x-layout>
    <x-slot:title>
        Jobs Listing
    </x-slot:title>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="hover:underline">
                <strong>{{ $job['title'] }}</strong>: pays {{$job['salary']}} per year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>