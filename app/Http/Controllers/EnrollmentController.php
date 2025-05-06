<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Batch;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EnrollmentController extends Controller
{
    public function index(): View
    {
        $enrollments = Enrollment::with(['student', 'batch'])->get();
        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        $students = Student::all();
        $batches = Batch::all();

        return view('enrollments.create', compact('students', 'batches'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'enroll_no' => 'required|string|unique:enrollments',
            'student_id' => 'required|exists:students,id',
            'batch_id' => 'required|exists:batches,id',
            'join_date' => 'required|date',
            'fee' => 'numeric|min:0',
        ]);
        Enrollment::create($validated);
        return redirect('enrollments')->with('flash_message', 'Enrollment added!');
    }

    public function show(string $id): View
    {
        $enrollment = Enrollment::with(['student', 'batch'])->findOrFail($id);
        return view('enrollments.show', compact('enrollment'));
    }

    public function edit(string $id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $students = Student::all();
        $batches = Batch::all();
        return view('enrollments.edit', compact('enrollment', 'students', 'batches'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $enrollment = Enrollment::findOrFail($id);

        $validated = $request->validate([
            'enroll_no' => 'required|string|unique:enrollments,enroll_no,' . $id,
            'student_id' => 'required|exists:students,id',
            'batch_id' => 'required|exists:batches,id',
            'join_date' => 'required|date',
            'fee' => 'numeric|min:0',
        ]);

        $enrollment->update($validated);

        return redirect('enrollments')->with('flash_message', 'Enrollment updated');
    }
    public function destroy(string $id): RedirectResponse
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}
