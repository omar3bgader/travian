@extends('layout.master')

@section('title', 'تعديل الطلب')

@section('content')

    <main id="main" class="main">
        <!-- Form to Edit Player -->
        <section class="section">
            <div class="container">
                <h2>تعديل الطلب</h2>

                <form action="{{ route('order.update', $order->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="buyer_id" class="form-label">Buyer</label>
                        <select class="form-select form-select-sm" id="buyer_id" name="buyer_id">
                            <option value="">Select Buyer</option>
                            @foreach($buyers as $buyer)
                                <option value="{{ $buyer->id }}" {{ $buyer->id == $order->buyer_id ? 'selected' : '' }}>
                                    {{ $buyer->buyer_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('buyer_id')
                            <span class="alert-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="server_id" class="form-label">server_id</label>
                        <select class="form-select form-select-sm" id="server_id" name="server_id">
                            <option value="">Select server</option>
                            @foreach($servers as $server)
                                <option value="{{ $server->id }}" {{ $server->id == $order->server_id ? 'selected' : '' }}>
                                    {{ $server->server_name }}
                                </option>
                            @endforeach
                        </select>
                        @error('server_id')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="order_num" class="form-label">order_num</label>
                        <input type="text" class="form-control form-control-sm" id="order_num" name="order_num" value="{{ $order->order_num }}">
                        @error('order_num')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">quantity</label>
                        <input type="text" class="form-control form-control-sm" id="quantity" name="quantity" value="{{ $order->quantity }}">
                        @error('quantity')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="quantity_price" class="form-label">quantity_price</label>
                        <input type="text" class="form-control form-control-sm" id="quantity_price" name="quantity_price" value="{{ $order->quantity_price }}">
                        @error('quantity_price')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="curr" class="form-label">curr</label>
                        <input type="text" class="form-control form-control-sm" id="curr" name="curr" value="{{ $order->curr }}">
                        @error('curr')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price_by_foreign" class="form-label">price_by_foreign</label>
                        <input type="text" class="form-control form-control-sm" id="price_by_foreign" name="price_by_foreign" value="{{ $order->price_by_foreign }}">
                        @error('price_by_foreign')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price_by_pound" class="form-label">price_by_pound</label>
                        <input type="text" class="form-control form-control-sm" id="price_by_pound" name="price_by_pound" value="{{ $order->price_by_pound }}">
                        @error('price_by_pound')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_id" class="form-label">payment_id</label>
                        <input type="text" class="form-control form-control-sm" id="payment_id" name="payment_id" value="{{ $order->payment_id }}">
                        @error('payment_id')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="order_status" class="form-label">order_status</label>
                        <input type="text" class="form-control form-control-sm" id="order_status" name="order_status" value="{{ $order->order_status }}">
                        @error('order_status')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="left_quantity" class="form-label">left_quantity</label>
                        <input type="text" class="form-control form-control-sm" id="left_quantity" name="left_quantity" value="{{ $order->left_quantity }}">
                        @error('left_quantity')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exchange_rate" class="form-label">exchange_rate</label>
                        <input type="text" class="form-control form-control-sm" id="exchange_rate" name="exchange_rate" value="{{ $order->exchange_rate }}">
                        @error('exchange_rate')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="player_money" class="form-label">player_money</label>
                        <input type="text" class="form-control form-control-sm" id="player_money" name="player_money" value="{{ $order->player_money }}">
                        @error('player_money')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update payment</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
