<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <ul>

            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }};</strong> pays {{ $job['salary'] }} per year
                </a>
            </li>

    </ul>

</x-layout>

