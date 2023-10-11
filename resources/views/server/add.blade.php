@extends('layout.master')

@section('title', 'اضافة سيرفر')

@section('content')

    <main id="main" class="main">

        <!-- Form to Add a New Player -->
        <section class="section">
            <div class="container">
                <h2>اضافة سيرفر</h2>

                <form action="{{ route('server.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="server_name" class="form-label">اسم السيرفؤ</label>
                        <input type="text" class="form-control form-control-sm" id="server_name" name="server_name" >
                        @error('server_name')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="server_start_date" class="form-label">تاريخ بداية السيرفر</label>
                        <input type="date" class="form-control form-control-sm" id="server_start_date" name="server_start_date" >
                        @error('server_start_date')
                        <span class=" alert-danger" >
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">إضافة السيرفر</button>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
