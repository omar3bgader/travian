<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerInBatch;
use View;

class PlayerInBatchController extends Controller
{
    public function index()
    {
        $blayer_in_batch = PlayerInBatch::all();
        return view('blayer_in_batch.index', ['blayer_in_batch' => $blayer_in_batch]);
    }

    public function create()
    {
        return view('blayer_in_batch.add');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'player_fake_name' => 'required|string',
            'player_id' => 'required|integer|exists:players,id',
            'batch_id' => 'required|integer|exists:batches,id',
            'sends_per_player' => 'required|string',
            'total_sends_per_player' => 'required|string',
        ]);

        // Create a new player with the validated data
        $blayer_in_batch = PlayerInBatch::create($validatedData);

        return redirect()->route('blayer_in_batch.index')->with('success', 'Buyer created successfully');
    }


    public function edit($id)
    {
        $blayer_in_batch = PlayerInBatch::find($id);

        if (!$blayer_in_batch) {
            return view('blayer_in_batch.edit')->with('message', 'Buyer not found');
        }

        return view('blayer_in_batch.edit')->with('blayer_in_batch', $blayer_in_batch);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'player_fake_name' => 'required|string',
            'player_id' => 'required|integer|exists:players,id',
            'batch_id' => 'required|integer|exists:batches,id',
            'sends_per_player' => 'required|string',
            'total_sends_per_player' => 'required|string',
        ]);

        // Find the player by ID
        $blayer_in_batch = PlayerInBatch::findOrFail($id);

        // Update the player with the validated data
        $blayer_in_batch->update($validatedData);

        return redirect()->route('blayer_in_batch.index')->with('success', 'Buyer updated successfully');
    }



    public function destroy($id)
    {
        $blayer_in_batch = PlayerInBatch::find($id);

        if (!$blayer_in_batch) {
            return view('blayer_in_batch.index')->with('message', 'Buyer not found');
        }

        $blayer_in_batch->delete();

        return redirect()->route('blayer_in_batch.index')->with('success', 'Buyer deleted successfully');
    }
}
