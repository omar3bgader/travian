<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use View;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payment.index', ['payments' => $payments]);
    }

    public function create()
    {
        return view('payment.add');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'buyer_id ' => 'required|integer|exists:buyers,id',
            'server_id ' => 'required|integer|exists:servers,id',
            'order_num' => 'required|integer',
            'quantity' => 'required|integer',
            'quantity_price' => 'required|integer',
            'curr' => 'required|string',
            'price_by_foreign' => 'required|integer',
            'price_by_pound' => 'required|integer',
            'payment_id ' => 'required|integer|exists:payments,id',
            'order_status' => 'required|integer',
            'left_quantity' => 'required|integer',
            'exchange_rate' => 'required|integer',
            'player_money' => 'required|integer',
        ]);

        // Create a new Payment with the validated data
        $payment = Payment::create($validatedData);

        return redirect()->route('payment.index')->with('success', 'Payment created successfully');
    }


    public function edit($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return view('payment.edit')->with('message', 'Payment not found');
        }

        return view('payment.edit')->with('payment', $payment);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'player_id ' => 'required|integer|exists:players,id',
            'buyer_id ' => 'required|integer|exists:buyers,id',
            'total_pay' => 'required|integer',
            'payment_date' => 'required|date',
            'payment_time' => 'required|date_format:H:i:s',
            'payment_num' => 'required|string',
            'payment_status' => 'required|integer',
            'price_by_pound' => 'required|integer',
            'payment_id ' => 'required|integer|exists:payments,id',
            'tax' => 'required|integer',
            'total_after_tax' => 'required|integer',
        ]);

        // Find the Payment by ID
        $payment = Payment::findOrFail($id);

        // Update the Payment with the validated data
        $payment->update($validatedData);

        return redirect()->route('payment.index')->with('success', 'Payment updated successfully');
    }



    public function destroy($id)
    {
        $payment = Payment::find($id);

        if (!$payment) {
            return view('payment.index')->with('message', 'Payment not found');
        }

        $payment->delete();

        return redirect()->route('payment.index')->with('success', 'Payment deleted successfully');
    }
}
