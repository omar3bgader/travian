@extends('layout.master')

@section('title', 'تعديل الدفعة')

@section('content')

    <main id="main" class="main">
        <!-- Form to Edit Player -->
        <section class="section">
            <div class="container">
                <h2>تعديل الدفعة</h2>

                <form action="{{ route('batch.update', $batch->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="batch_num" class="form-label">batch_num</label>
                        <input type="text" class="form-control form-control-sm" id="batch_num" name="batch_num" value="{{ $batch->batch_num }}">
                        @error('batch_num')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="order_id" class="form-label">order_id</label>
                        <input type="text" class="form-control form-control-sm" id="order_id" name="order_id" value="{{ $batch->order_id }}">
                        @error('order_id')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="batch_end" class="form-label">batch_end</label>
                        <input type="text" class="form-control form-control-sm" id="batch_end" name="batch_end" value="{{ $batch->batch_end }}">
                        @error('buyer_name')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="batch_total" class="form-label">batch_total</label>
                        <input type="text" class="form-control form-control-sm" id="batch_total" name="batch_total" value="{{ $batch->batch_total }}">
                        @error('batch_total')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
