@extends('layout.master')

@section('title', 'اضافة لاعب')

@section('content')

    <main id="main" class="main">

        <!-- Form to Add a New Player -->
        <section class="section">
            <div class="container">
                <h2>Add New Player</h2>

                <form action="{{ route('player.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="player_name" class="form-label">Player Name</label>
                        <input type="text" class="form-control form-control-sm" id="player_name" name="player_name" >
                        @error('player_name')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-sm" id="email" name="email" >
                        @error('email')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-sm" id="password" name="password" >
                        @error('password')
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
