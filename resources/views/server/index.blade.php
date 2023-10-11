@extends('layout.master')

@section('title', 'السيرفرات')

@section('content')

    <main id="main" class="main">

        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <a href="{{route('server.create')}}" class="btn btn-primary mb-3">اضافة سيرفر</a>
                    <h2>السيرفرات</h2>
                </div>

                <div class="col-lg-8">
                    <div class="row">


                @foreach($servers as $server)

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
                <a class="card info-card sales-card" href="{{ route('server.show', $server->id) }}">
                  <div class="card-body">
                    <h5 class="card-title">{{ $server->server_name }}</h5>

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
                    <tr style="background-color: rgb(112, 254, 60)">
                        <th>ID</th>
                        <th>اسم السيرفر</th>
                        <th>تاريخ بداية السيرفر</th>
                        <th>تعديل</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($servers as $server)
                        <tr>
                            <td>{{ $server->id }}</td>
                            <td>{{ $server->server_name }}</td>
                            <td>{{ $server->server_start_date }}</td>
                            <td><a href="{{ route('server.edit', $server->id) }}" class="btn btn-primary">تعديل</a></td>

                            <td><a href="{{ route('server.destroy', $server->id) }}" class="btn btn-danger">حذف</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
