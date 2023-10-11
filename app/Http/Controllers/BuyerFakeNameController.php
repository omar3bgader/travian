<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerFakeName;
use View;

class BuyerFakeNameController extends Controller
{
    public function index()
    {
        $buyer_fake_name = BuyerFakeName::all();
        return view('buyer_fake_name.index', ['buyer_fake_name' => $buyer_fake_name]);
    }

    public function create()
    {
        return view('buyer_fake_name.add');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'server_id' => 'required|integer|exists:batches,id',
            'buyer_id' => 'required|string',
            'fake_name' => 'required|integer|exists:players,id',
        ]);

        // Create a new player with the validated data
        $buyer_fake_name = BuyerFakeName::create($validatedData);

        return redirect()->route('buyer_fake_name.index')->with('success', 'Buyer created successfully');
    }


    public function edit($id)
    {
        $buyer_fake_name = BuyerFakeName::find($id);

        if (!$buyer_fake_name) {
            return view('buyer_fake_name.edit')->with('message', 'Buyer not found');
        }

        return view('buyer_fake_name.edit')->with('buyer_fake_name', $buyer_fake_name);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'server_id' => 'required|integer|exists:batches,id',
            'buyer_id' => 'required|string',
            'fake_name' => 'required|integer|exists:players,id',
        ]);

        // Find the player by ID
        $buyer_fake_name = BuyerFakeName::findOrFail($id);

        // Update the player with the validated data
        $buyer_fake_name->update($validatedData);

        return redirect()->route('buyer_fake_name.index')->with('success', 'Buyer updated successfully');
    }



    public function destroy($id)
    {
        $buyer_fake_name = BuyerFakeName::find($id);

        if (!$buyer_fake_name) {
            return view('buyer_fake_name.index')->with('message', 'Buyer not found');
        }

        $buyer_fake_name->delete();

        return redirect()->route('buyer_fake_name.index')->with('success', 'Buyer deleted successfully');
    }
}
