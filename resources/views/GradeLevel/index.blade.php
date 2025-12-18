<x-layout>
    <x-slot:heading> Grade Levels </x-slot:heading>

    <div class="space-y-4">
        @foreach ($grade_levels as $grade_level)
            <a href="/{{ $grade_level->grade_levels }}/sections"
                class="flex items-center justify-between px-4 py-6 text-l font-semibold border border-gray-200 rounded-lg hover:text-blue-500 bg-gray-200 hover:bg-gray-300">
                <div>

                    {{-- Grade Level details --}}
                    <label>
                        <div>
                            <h1>{{ $grade_level->grade_levels }}</h1>
                        </div>
                    </label>
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
