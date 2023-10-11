@extends('layout.master')

@section('title', $serverName)

@section('content')

    <main id="main" class="main">
        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="col-lg-8">
                    <div class="row">
                        <h2>طلبيات {{ $serverName }}</h2>

                        <a href="{{ route('order.create', ['server_id' => $server->id]) }}" class="btn btn-primary">اضافة طلبية</a>


                <div class="col-lg-8">
                    <div class="row">


                @foreach($orders as $order)

            <!-- Sales Card -->
            <div class="col-xxl-4 col-lg-6">
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
                                <tr>
                                    <th>Order ID</th>
                                    <th>Order Number</th>
                                    <!-- Add more order-related headers here -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->order_num }}</td>
                                        <!-- Add more order-related columns here -->
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection
