<?php

namespace App\Http\Controllers;

use App\Models\GradeLevel;
use Illuminate\Http\Request;

class GradeLevelController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $grade_levels = GradeLevel::all();
        return view('GradeLevel.index', [
            'grade_levels' => $grade_levels
        ]);
    }
}
