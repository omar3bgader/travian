@extends('layout.master')

@section('title', 'dashboard')

@section('content')

    <main id="main" class="main">

        <!-- Table Section -->
        <section class="section">
            <div class="container">
               <div class="row">
                   <a href="{{route('player.create')}}" class="btn btn-primary mb-3">Add Player</a>
                   <h2>اللاعبين</h2>
               </div>

                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color: gray">
                        <th>ID</th>
                        <th>Player Name</th>
                        <th>Email</th>
                        <th>Orders Total</th>
                        <th>Payments Total</th>
                        <th>Rank</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($players as $player)
                        <tr>
                            <td>{{ $player->id }}</td>
                            <td>{{ $player->player_name }}</td>
                            <td>{{ $player->email }}</td>
                            <td>{{ $player->orders_total }}</td>
                            <td>{{ $player->payments_total }}</td>
                            <td>{{ $player->rank }}</td>
                            <td><a href="{{ route('player.edit', $player->id) }}" class="btn btn-primary">Edit</a></td>

                            <td><a href="{{ route('player.destroy', $player->id) }}" class="btn btn-danger">delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
