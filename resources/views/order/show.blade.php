@extends('layout.master')

@section('title', $orderNum)

@section('content')

    <main id="main" class="main">
        <!-- Table Section -->
        <section class="section">
            <div class="container">
                <div class="col-lg-8">
                    <div class="row">
                        <h2>دفعات طلبية رقم {{ $orderNum }}</h2>


                        <a href="{{ route('batch.create', ['order_id' => $order->id]) }}" class="btn btn-primary">اضافة دفعة</a>


                <div class="col-lg-8">
                    <div class="row">
                    </div>
                </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>اسم اللاعب</th>

                                @foreach($batches as $batch)
                                    <th>دفعة {{ $batch->batch_num }}</th>
                                @endforeach
                                    <!-- Add more order-related headers here -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($players as $player)
                                    <tr>
                                        <td>{{ $player->player_name }}</td>
                                        <td></td>
                                        <!-- Add more order-related columns here -->
                                    </tr>
                                    @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>المجموع</td>
                                    @foreach($batches as $batch)
                                        <th>{{ $batch->batch_total }}</th>
                                    @endforeach
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection
