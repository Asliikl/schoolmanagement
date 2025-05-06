<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with(['enrollment'])->get();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $enrollments = Enrollment::all();
        return view('payments.create', compact('enrollments'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'paid_date' => 'required|date',
            'amount' => 'numeric|min:0',
        ]);

        Payment::create($validatedData);

        return redirect('payments')->with('flash_message', 'Payment added!');
    }

    public function show(string $id): View
    {
        $payment = Payment::with('enrollment')->findOrFail($id);
        return view('payments.show', compact('payment'));
    }

    public function edit(string $id): View
    {
        $payment = Payment::findOrFail($id);
        $enrollments = Enrollment::all();
        return view('payments.edit', compact('payment', 'enrollments'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validatedData = $request->validate([
            'enrollment_id' => 'required|exists:enrollments,id',
            'paid_date' => 'required|date',
            'amount' => 'numeric|min:0',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($validatedData);

        return redirect('payments')->with('flash_message', 'Payment updated!');
    }

    public function destroy(string $id): RedirectResponse
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }
}
