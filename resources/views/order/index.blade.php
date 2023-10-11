@extends('layout.master')

@section('title', 'الطلبيات')

@section('content')

    <main id="main" class="main">

        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <a href="{{route('order.create', $server->id)}}" class="btn btn-primary mb-3">اضافة طلبية</a>
                    <h2>الطلبيات</h2>
                </div>

                <div class="col-lg-8">
                    <div class="row">


                @foreach($orders as $order)

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <a class="card info-card sales-card" href="{{ route('order.show', $order->id) }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $order->order_num }}</h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>
            </a>
            </div><!-- End Sales Card -->
                @endforeach
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                    <tr style="background-color: gray">
                        <th>ID</th>
                        <th>buyer_id</th>
                        <th>server_id</th>
                        <th>order_num</th>
                        <th>quantity</th>
                        <th>quantity_price</th>
                        <th>curr</th>
                        <th>price_by_foreign</th>
                        <th>price_by_pound</th>
                        <th>payment_id</th>
                        <th>order_status</th>
                        <th>left_quantity</th>
                        <th>exchange_rate</th>
                        <th>player_money</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->buyer->buyer_name }}</td>
                            <td>{{ $order->server->server_name }}</td>
                            <td>{{ $order->order_num }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->quantity_price }}</td>
                            <td>{{ $order->curr }}</td>
                            <td>{{ $order->price_by_foreign }}</td>
                            <td>{{ $order->price_by_pound }}</td>
                            <td>{{ $order->payment_id }}</td>
                            <td>{{ $order->order_status }}</td>
                            <td>{{ $order->order_total }}</td>
                            <td>{{ $order->left_quantity }}</td>
                            <td>{{ $order->exchange_rate }}</td>
                            <td>{{ $order->player_money }}</td>
                            <td><a href="{{ route('order.edit', $order->id) }}" class="btn btn-primary">Edit</a></td>

                            <td><a href="{{ route('order.destroy', $order->id) }}" class="btn btn-danger">delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
