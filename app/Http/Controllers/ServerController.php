<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;
use App\Models\Order;
use View;

class ServerController extends Controller
{
    public function index()
    {
        $server = Server::all();
        return view('server.index', ['servers' => $server]);
    }

    public function show($id)
    {
        $server = Server::find($id);

        if (!$server) {
            return view('server.index')->with('message', 'Server not found');
        }

        $serverName = $server->server_name;

        // Retrieve the associated orders for the server
        $orders = Order::where('server_id', $server->id)->get();

        return view('server.show', compact('server', 'serverName', 'orders'));
    }


    public function create()
    {
        return view('server.add');
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'server_name' => 'required|string',
            'server_start_date' => 'required|date',
        ]);

        // Create a new Server with the validated data
        $server = Server::create($validatedData);

        return redirect()->route('server.index')->with('success', 'server created successfully');
    }


    public function edit($id)
    {
        $server = Server::find($id);

        if (!$server) {
            return view('server.edit')->with('message', 'server not found');
        }

        return view('server.edit')->with('server', $server);
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'server_name' => 'required|string',
            'server_start_date' => 'required|date',
        ]);

        // Find the Server by ID
        $server = Server::findOrFail($id);

        // Update the Server with the validated data
        $server->update($validatedData);

        return redirect()->route('server.index')->with('success', 'server updated successfully');
    }



    public function destroy($id)
    {
        $server = Server::find($id);

        if (!$server) {
            return view('server.index')->with('message', 'server not found');
        }

        $server->delete();

        return redirect()->route('server.index')->with('success', 'server deleted successfully');
    }
}
