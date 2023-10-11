@extends('layout.master')

@section('title', 'تعديل السيرفر')

@section('content')

    <main id="main" class="main">
        <!-- Form to Edit Player -->
        <section class="section">
            <div class="container">
                <h2>تعديل السيرفر</h2>

                <form action="{{ route('server.update', $server->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="server_name" class="form-label">اسم السيرفر</label>
                        <input type="text" class="form-control form-control-sm" id="server_name" name="server_name" value="{{ $server->server_name }}">
                        @error('server_name')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="server_start_date" class="form-label">تاريخ بداية السيرفر</label>
                        <input type="date" class="form-control form-control-sm" id="server_start_date" name="server_start_date" value="{{ $server->server_start_date }}">
                        @error('server_start_date')
                        <span class="alert-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">تعديل</button>
                    </div>
                </form>
            </div>
        </section>

    </main><!-- End #main -->

@endsection
