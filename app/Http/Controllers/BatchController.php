<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Order;
use View;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::with(['order'])->get();
        return view('batch.index', ['batches' => $batches]);
    }

    public function create($order_id)
    {

        $order = Order::find($order_id);
        $orders = Order::all();
        return view('batch.add', compact('orders', 'order'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'batch_num' => 'required|integer',
            'order_id' => 'required|integer|exists:orders,id',
            'batch_end' => 'required|date_format:H:i',
            'batch_total' => 'required|integer',
            'batch_status' => 'required|integer',

        ]);

        // Create a new player with the validated data
        $batch = Batch::create($validatedData);

        return redirect()->route('order.show', ['id' => $batch->id])->with('success', 'Batch created successfully');
    }


    public function edit($id)
    {
        $batch = Batch::find($id);

        if (!$batch) {
            return view('batch.edit')->with('message', 'Batch not found');
        }


        $orders = Order::all();
        return view('batch.edit', compact('batch', 'order'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'batch_num' => 'required|integer',
            'order_id' => 'required|integer|exists:orders,id',
            'batch_end' => 'required|date_format:H:i',
            'batch_total' => 'required|integer',
            'batch_status' => 'required|integer',
        ]);

        // Find the player by ID
        $batch = Batch::findOrFail($id);

        // Update the player with the validated data
        $batch->update($validatedData);

        return redirect()->route('batch.index')->with('success', 'Batch updated successfully');
    }



    public function destroy($id)
    {
        $batch = Batch::find($id);

        if (!$batch) {
            return view('batch.index')->with('message', 'Batch not found');
        }

        $batch->delete();

        return redirect()->route('batch.index')->with('success', 'Batch deleted successfully');
    }
}
