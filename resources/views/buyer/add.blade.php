@extends('layout.master')

@section('title', 'اضافة مشتري')

@section('content')

    <main id="main" class="main">

        <!-- Form to Add a New Player -->
        <section class="section">
            <div class="container">
                <h2>اضافة مشتري</h2>

                <form action="{{ route('buyer.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="buyer_name" class="form-label">Buyer Name</label>
                        <input type="text" class="form-control form-control-sm" id="buyer_name" name="buyer_name" >
                        @error('buyer_name')
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
