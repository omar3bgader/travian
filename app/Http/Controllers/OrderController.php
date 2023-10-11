<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Buyer;
use App\Models\Server;
use App\Models\Payment;
use App\Models\Batch;
use App\Models\player;
use View;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with(['buyer', 'server', 'payment', 'batch', 'player'])->get();
        return view('order.index', ['orders' => $orders]);
    }

    public function show($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return view('order.index')->with('message', 'order not found');
        }

        $orderNum = $order->order_num;
        $players = Player::all();

        // Retrieve the associated orders for the server
        $batches = Batch::where('order_id', $order->id)->get();

        return view('order.show', compact('order', 'orderNum', 'batches', 'players'));
    }

    public function create($server_id)
    {
        // Fetch the server based on the server_id
        $server = Server::find($server_id);

        if (!$server) {
            return view('order.create')->with('message', 'Server not found');
        }

        $buyers = Buyer::all();
        $servers = Server::all();
        $payments = Payment::all();

        return view('order.add', compact('server', 'buyers', 'servers', 'payments'));
    }


    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'buyer_id' => 'required|integer|exists:buyers,id',
            'server_id' => 'required|integer|exists:servers,id',
            'order_num' => 'required|integer|unique:orders,order_num',
            'quantity' => 'required|integer',
            'quantity_price' => 'required|integer',
            'curr' => 'required|string',
            'price_by_foreign' => 'required|integer',
            'price_by_pound' => 'required|integer',
            'payment_id' => 'nullable|integer|exists:payments,id',
            'order_status' => 'required|integer',
            'left_quantity' => 'required|integer',
            'exchange_rate' => 'required|integer',
            'player_money' => 'required|integer',
        ]);

        // Create a new order with the validated data
        $order = order::create($validatedData);

        return redirect()->route('server.show', ['id' => $order->id])->with('success', 'Order created successfully');
    }


    public function edit($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return view('order.edit')->with('message', 'Order not found');
        }

        $buyers = Buyer::all();
        $servers = Server::all();
        $payments = Payment::all();

        return view('order.edit', compact('order', 'buyers', 'servers', 'payments'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request
        $validatedData = $request->validate([
            'buyer_id' => 'required|integer|exists:buyers,id',
            'server_id' => 'required|integer|exists:servers,id',
            'order_num' => 'required|integer',
            'quantity' => 'required|integer',
            'quantity_price' => 'required|integer',
            'curr' => 'required|string',
            'price_by_foreign' => 'required|integer',
            'price_by_pound' => 'required|integer',
            'payment_id' => 'nullable|integer|exists:payments,id',
            'order_status' => 'required|integer',
            'left_quantity' => 'required|integer',
            'exchange_rate' => 'required|integer',
            'player_money' => 'required|integer',
        ]);

        // Find the order by ID
        $order = Order::findOrFail($id);

        // Update the order with the validated data
        $order->update($validatedData);

        return redirect()->route('order.index')->with('success', 'Order updated successfully');
    }



    public function destroy($id)
    {
        $order = Order::find($id);

        if (!$order) {
            return view('order.index')->with('message', 'Order not found');
        }

        $order->delete();

        return redirect()->route('order.index')->with('success', 'Order deleted successfully');
    }
}
