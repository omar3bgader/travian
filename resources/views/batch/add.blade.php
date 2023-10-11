@extends('layout.master')

@section('title', 'اضافة دفعة')

@section('content')

    <main id="main" class="main">

        <!-- Form to Add a New Player -->
        <section class="section">
            <div class="container">
                <h2>اضافة دفعة</h2>

                <form action="{{ route('batch.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="batch_num" class="form-label">batch num</label>
                        <input type="text" class="form-control form-control-sm" id="batch_num" name="batch_num" >
                        @error('batch_num')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="mb-3">
                        <label for="batch_end" class="form-label">Batch End at</label>
                        <input type="time" class="form-control form-control-sm" id="batch_end" name="batch_end" >
                        @error('batch_end')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="batch_total" class="form-label">Batch Total</label>
                        <input type="text" class="form-control form-control-sm" id="batch_total" name="batch_total" >
                        @error('batch_total')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="batch_status" class="form-label">حالة الدفعة</label>
                        <select class="form-select form-select-sm" id="batch_status" name="batch_status">
                            <option value="">حالة الدفعة</option>
                                <option value="0">مغلقة</option>
                                <option value="1">مفتوحة</option>
                        </select>
                        @error('batch_status')
                            <span class="alert-danger"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Batch</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
