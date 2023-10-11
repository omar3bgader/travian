<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use View;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('player.index', ['players' => $players]);
    }

    public function create()
    {
        return view('player.add');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'player_name' => 'required|string',
            'email' => 'required|email|unique:players',
            'password' => 'required|string',
        ]);

        // Hash the password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Create a new player with the validated data
        $player = Player::create($validatedData);

        return redirect()->route('player.index')->with('success', 'Player created successfully');
    }


    public function edit($id)
    {
        $player = Player::find($id);

        if (!$player) {
            return view('player.edit')->with('message', 'Player not found');
        }

        return view('player.edit')->with('player', $player);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'player_name' => 'required|string',
            'email' => 'required|email|unique:players,email,' . $id,
        ]);

        // Find the player by ID
        $player = Player::findOrFail($id);

        // Update the player with the validated data
        $player->update($validatedData);

        // Check if a new password is provided
        if ($request->has('password')) {
            // Hash the new password
            $player->password = bcrypt($request->password);
            $player->save();
        }

        return redirect()->route('player.index')->with('success', 'Player updated successfully');
    }



    public function destroy($id)
    {
        $player = Player::find($id);

        if (!$player) {
            return view('player.index')->with('message', 'Player not found');
        }

        $player->delete();

        return redirect()->route('player.index')->with('success', 'Player deleted successfully');
    }
}
