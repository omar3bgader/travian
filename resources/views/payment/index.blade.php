@extends('layout.master')

@section('title', 'الحسابات')

@section('content')

    <main id="main" class="main">

        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <a href="{{route('payment.create')}}" class="btn btn-primary mb-3">اضافة حساب</a>
                    <h2>الحسابات</h2>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color: gray">
                        <th>ID</th>
                        <th>ID</th>
                        <th>player_id</th>
                        <th>buyer_id</th>
                        <th>total_pay</th>
                        <th>payment_date</th>
                        <th>payment_time</th>
                        <th>payment_num</th>
                        <th>payment_status</th>
                        <th>tax</th>
                        <th>total_after_tax</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->player_id}}</td>
                            <td>{{ $payment->buyer_id}}</td>
                            <td>{{ $payment->total_pay}}</td>
                            <td>{{ $payment->payment_date}}</td>
                            <td>{{ $payment->payment_time}}</td>
                            <td>{{ $payment->payment_num}}</td>
                            <td>{{ $payment->payment_status}}</td>
                            <td>{{ $payment->tax}}</td>
                            <td>{{ $payment->total_after_tax}}</td>
                            <td><a href="{{ route('payment.edit', $payment->id) }}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{ route('payment.destroy', $payment->id) }}" class="btn btn-danger">delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
