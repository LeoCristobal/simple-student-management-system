<x-layout>
    <x-slot:heading> Tasks </x-slot:heading>

    <div class="space-y-4">
        @foreach ($sections as $section)

        <div class="flex items-center justify-between px-4 py-6 border border-gray-200 rounded-lg">

            {{-- section details --}}
            <a href="/section/{{ $section->sections }}">
                <div>
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $section->teacher->name }}
                    </div>
                    <h1>{{ $section->sections }}</h1>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</x-layout>
