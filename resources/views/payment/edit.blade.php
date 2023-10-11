@extends('layout.master')

@section('title', 'تعديل الحساب')

@section('content')

    <main id="main" class="main">
        <!-- Form to Edit Player -->
        <section class="section">
            <div class="container">
                <h2>تعديل السيرفر</h2>

                <form action="{{ route('payment.update', $payment->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="player_id" class="form-label">player_id</label>
                        <input type="text" class="form-control form-control-sm" id="player_id" name="player_id" value="{{ $payment->player_id }}">
                        @error('player_id')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="buyer_id" class="form-label">buyer_id</label>
                        <input type="text" class="form-control form-control-sm" id="buyer_id" name="buyer_id" value="{{ $payment->buyer_id }}">
                        @error('buyer_id')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="total_pay" class="form-label">total_pay</label>
                        <input type="text" class="form-control form-control-sm" id="total_pay" name="total_pay" value="{{ $payment->total_pay }}">
                        @error('total_pay')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_date" class="form-label">payment_date</label>
                        <input type="date" class="form-control form-control-sm" id="payment_date" name="payment_date" value="{{ $payment->payment_date }}">
                        @error('payment_date')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_time" class="form-label">payment_time</label>
                        <input type="text" class="form-control form-control-sm" id="payment_time" name="payment_time" value="{{ $payment->payment_time }}">
                        @error('payment_time')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_num" class="form-label">payment_num</label>
                        <input type="text" class="form-control form-control-sm" id="payment_num" name="payment_num" value="{{ $payment->payment_num }}">
                        @error('payment_num')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="payment_status" class="form-label">payment_status</label>
                        <input type="text" class="form-control form-control-sm" id="payment_status" name="payment_status" value="{{ $payment->payment_status }}">
                        @error('payment_status')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tax" class="form-label">tax</label>
                        <input type="text" class="form-control form-control-sm" id="tax" name="tax" value="{{ $payment->tax }}">
                        @error('tax')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="total_after_tax" class="form-label">total_after_tax</label>
                        <input type="date" class="form-control form-control-sm" id="total_after_tax" name="total_after_tax" value="{{ $payment->total_after_tax }}">
                        @error('total_after_tax')
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
