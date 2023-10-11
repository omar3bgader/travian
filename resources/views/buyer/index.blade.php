@extends('layout.master')

@section('title', 'المشترين')

@section('content')

    <main id="main" class="main">

        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <a href="{{route('buyer.create')}}" class="btn btn-primary mb-3">اضافة مشتري</a>
                    <h2>المشترين</h2>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color: gray">
                        <th>ID</th>
                        <th>Buyer Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($buyers as $buyer)
                        <tr>
                            <td>{{ $buyer->id }}</td>
                            <td>{{ $buyer->buyer_name }}</td>
                            <td><a href="{{ route('buyer.edit', $buyer->id) }}" class="btn btn-primary">Edit</a></td>

                            <td><a href="{{ route('buyer.destroy', $buyer->id) }}" class="btn btn-danger">delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
