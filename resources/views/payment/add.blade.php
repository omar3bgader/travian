@extends('layout.master')

@section('title', 'اضافة حساب')

@section('content')

    <main id="main" class="main">

        <!-- Form to Add a New Player -->
        <section class="section">
            <div class="container">
                <h2>اضافة حساب</h2>

                <form action="{{ route('payment.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="player_id" class="form-label">player_id</label>
                        <input type="text" class="form-control form-control-sm" id="player_id" name="player_id" >
                        @error('player_id')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="buyer_id" class="form-label">buyer_id</label>
                        <input type="text" class="form-control form-control-sm" id="buyer_id" name="buyer_id" >
                        @error('buyer_id')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="total_pay" class="form-label">total_pay</label>
                        <input type="text" class="form-control form-control-sm" id="total_pay" name="total_pay" >
                        @error('total_pay')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_date" class="form-label">payment_date</label>
                        <input type="text" class="form-control form-control-sm" id="payment_date" name="payment_date" >
                        @error('payment_date')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_time" class="form-label">payment_time</label>
                        <input type="text" class="form-control form-control-sm" id="payment_time" name="payment_time" >
                        @error('payment_time')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_num" class="form-label">payment_num</label>
                        <input type="text" class="form-control form-control-sm" id="payment_num" name="payment_num" >
                        @error('payment_num')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_status" class="form-label">payment_status</label>
                        <input type="text" class="form-control form-control-sm" id="payment_status" name="payment_status" >
                        @error('payment_status')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tax" class="form-label">tax</label>
                        <input type="text" class="form-control form-control-sm" id="tax" name="tax" >
                        @error('tax')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="total_after_tax" class="form-label">total_after_tax</label>
                        <input type="text" class="form-control form-control-sm" id="total_after_tax" name="total_after_tax" >
                        @error('total_after_tax')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Server</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
