<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Batch;
use App\Models\Course;
use Illuminate\View\View;
class BatchController extends Controller
{
    public function index():View
    {
        $batches = Batch::all();
        return view('batches.index')->with('batches',$batches);
    }

    public function create()
    {
        $courses = Course::all();
        return view('batches.create', compact('courses'));
    }

    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message','Batch added!');
    }

    public function show(string $id):View
    {
        $batch = Batch::findOrFail($id);
        return view('batches.show', compact('batch'));
    }

    public function edit(string $id):View
    {
        $batch = Batch::findOrFail($id);
        $courses = Course::all();
        return view('batches.edit', compact('batch', 'courses'));
    }

    public function update(Request $request, string $id):RedirectResponse
    {
        $batches = Batch::findOrFail($id);
        $batches->update($request->all());
        return redirect('batches')->with('flash_message', 'Batch updated');
    }

    public function destroy(string $id):RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message','Batch deleted!');
    }
}
