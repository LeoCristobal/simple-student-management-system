<x-layout>
    <x-slot:heading> Teacher: {{ $section->teacher->name }} </x-slot:heading>

    @foreach ($section->teacher->students as $student)
        <div class="space-y-4">
            <div
                class="flex items-center justify-between  px-4 py-6 border border-gray-200 rounded-lg hover:text-blue-500 bg-gray-200 hover:bg-gray-300">
                {{ $student->last_name . ',' . ' ' . $student->first_name . ' ' . $student->middle_initial }}
            </div>

        </div>
    @endforeach
</x-layout>
