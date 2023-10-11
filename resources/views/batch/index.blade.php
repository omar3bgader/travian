@extends('layout.master')

@section('title', 'الدفعات')

@section('content')

    <main id="main" class="main">

        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <a href="{{route('batch.create')}}" class="btn btn-primary mb-3">اضافة دفعة</a>
                    <h2>الدفعات</h2>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color: gray">
                        <th>ID</th>
                        <th>batch_num</th>
                        <th>order_id</th>
                        <th>batch_end</th>
                        <th>batch_total</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($batches as $batch)
                        <tr>
                            <td>{{ $batch->id }}</td>
                            <td>{{ $batch->batch_num }}</td>
                            <td>{{ $batch->order->order_num }}</td>
                            <td>{{ $batch->batch_end }}</td>
                            <td>{{ $batch->batch_total }}</td>
                            <td><a href="{{ route('batch.edit', $batch->id) }}" class="btn btn-primary">Edit</a></td>

                            <td><a href="{{ route('batch.destroy', $batch->id) }}" class="btn btn-danger">delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
