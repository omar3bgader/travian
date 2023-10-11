<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use View;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers = Buyer::all();
        return view('buyer.index', ['buyers' => $buyers]);
    }

    public function create()
    {
        return view('buyer.add');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'buyer_name' => 'required|string',
        ]);

        // Create a new player with the validated data
        $buyer = Buyer::create($validatedData);

        return redirect()->route('buyer.index')->with('success', 'Buyer created successfully');
    }


    public function edit($id)
    {
        $buyer = Buyer::find($id);

        if (!$buyer) {
            return view('buyer.edit')->with('message', 'Buyer not found');
        }

        return view('buyer.edit')->with('buyer', $buyer);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'buyer_name' => 'required|string',
        ]);

        // Find the player by ID
        $buyer = Buyer::findOrFail($id);

        // Update the player with the validated data
        $buyer->update($validatedData);

        return redirect()->route('buyer.index')->with('success', 'Buyer updated successfully');
    }



    public function destroy($id)
    {
        $buyer = Buyer::find($id);

        if (!$buyer) {
            return view('buyer.index')->with('message', 'Buyer not found');
        }

        $buyer->delete();

        return redirect()->route('buyer.index')->with('success', 'Buyer deleted successfully');
    }
}
