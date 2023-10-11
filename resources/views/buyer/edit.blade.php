@extends('layout.master')

@section('title', 'تعديل المشتري')

@section('content')

    <main id="main" class="main">
        <!-- Form to Edit Player -->
        <section class="section">
            <div class="container">
                <h2>تعديل المشتري</h2>

                <form action="{{ route('buyer.update', $buyer->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="buyer_name" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control form-control-sm" id="buyer_name" name="buyer_name" value="{{ $buyer->buyer_name }}">
                        @error('buyer_name')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update Buyer</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
