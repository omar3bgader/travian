@extends('layout.master')

@section('title', 'اضافة طلب')

@section('content')

    <main id="main" class="main">

        <!-- Form to Add a New Order -->
        <section class="section">
            <div class="container">
                <h2>اضافة طلب</h2>

                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="buyer_id" class="form-label">Buyer</label>
                        <select class="form-select form-select-sm" id="buyer_id" name="buyer_id">
                            <option value="">Select Buyer</option>
                            @foreach($buyers as $buyer)
                                <option value="{{ $buyer->id }}">{{ $buyer->buyer_name }}</option>
                            @endforeach
                        </select>
                        @error('buyer_id')
                            <span class="alert-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <input type="hidden" name="server_id" value="{{ $server->id }}">

                    <div class="mb-3">
                        <label for="order_num" class="form-label">order_num</label>
                        <input type="text" class="form-control form-control-sm" id="order_num" name="order_num" >
                        @error('order_num')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">quantity</label>
                        <input type="text" class="form-control form-control-sm" id="quantity" name="quantity" >
                        @error('quantity')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="quantity_price" class="form-label">quantity_price</label>
                        <input type="text" class="form-control form-control-sm" id="quantity_price" name="quantity_price" >
                        @error('quantity_price')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="curr" class="form-label">curr</label>
                        <select class="form-select form-select-sm" id="curr" name="curr" >
                            <option value="دولار">دولار</option>
                            <option value="جنيه مصري">جنيه مصري</option>
                        </select>
                        @error('curr')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price_by_foreign" class="form-label">price_by_foreign</label>
                        <input type="text" class="form-control form-control-sm" id="price_by_foreign" name="price_by_foreign" >
                        @error('price_by_foreign')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price_by_pound" class="form-label">price_by_pound</label>
                        <input type="text" class="form-control form-control-sm" id="price_by_pound" name="price_by_pound" >
                        @error('price_by_pound')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_id" class="form-label">Payment</label>
                        <select class="form-select form-select-sm" id="payment_id" name="payment_id">
                            <option value="">Select Payment</option>
                            @foreach($payments as $payment)
                                <option value="{{ $payment->id }}">{{ $payment->payment_num }}</option>
                            @endforeach
                        </select>
                        @error('payment_id')
                            <span class="alert-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="order_status" class="form-label">order_status</label>
                        <input type="text" class="form-control form-control-sm" id="order_status" name="order_status" >
                        @error('order_status')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="left_quantity" class="form-label">left_quantity</label>
                        <input type="text" class="form-control form-control-sm" id="left_quantity" name="left_quantity" >
                        @error('left_quantity')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exchange_rate" class="form-label">exchange_rate</label>
                        <input type="text" class="form-control form-control-sm" id="exchange_rate" name="exchange_rate" >
                        @error('exchange_rate')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="player_money" class="form-label">player_money</label>
                        <input type="text" class="form-control form-control-sm" id="player_money" name="player_money" >
                        @error('player_money')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Player</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
