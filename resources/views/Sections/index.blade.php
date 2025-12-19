<x-layout>
    <x-slot:heading> Tasks </x-slot:heading>

    <div class="space-y-4">
        @foreach ($sections as $section)
            <a href="/section/{{ $section->sections }}">
                <div class="flex items-center justify-between  px-4 py-6 border border-gray-200 rounded-lg hover:text-blue-500 bg-gray-200 hover:bg-gray-300">

                    {{-- section details --}}
                    <div>
                        <div class="font-bold text-blue-500 text-sm">
                            {{ $section->teacher->name }}
                        </div>
                        <h1 class="text-lg font-semibold">{{ $section->sections }}</h1>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
