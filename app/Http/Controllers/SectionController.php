<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddStudentRequest;
use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GradeLevel $grade_level, Section $sections)
    {
        $sections = Section::with('teacher')->get();

        return view('Sections.index', [
            'grade_level' => $grade_level,
            'sections' => $sections
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddStudentRequest $request)
    {
        $validated = $request->validated();

        Student::create([
            'teacher_id' => $validated['section_id'],
            'first_name' => $validated['first_name'],
            'middle_initial' => $validated['middle_initial'],
            'last_name' => $validated['last_name'],
            'gender' => 'N/A'
        ]);

        return redirect('/section/{section:sections}');
    }

    /**
     * Display the specified resource.
     */

    public function show(Section $section)
    {
        // Load teacher and students properly
        $grade_level = GradeLevel::with('sections')->get();

        $section->load('teacher.students');
        $totalStudents = $section->teacher?->students()->count() ?? 0;

        return view('Sections.show', [
            'section' => $section,
            'total' => $totalStudents,
            'grade_level' => $grade_level
        ]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
