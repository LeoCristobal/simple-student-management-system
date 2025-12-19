<?php

namespace App\Http\Controllers;

use App\Models\GradeLevel;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(GradeLevel $grade_level)
    {
        $sections = Section::with('teacher')
            ->where('grade_level_id', $grade_level->id)
            ->whereHas('teacher')
            ->get();


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */

    public function show(Section $section)
    {
        // Load teacher and students properly
        $section->load('teacher.students');

        return view('Sections.show', [
            'section' => $section
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
