@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<h1 class="display-4"> Selamat Datang Di Aplikasi Warung Mbak Uwo</h1>
</br>
Aplikasi ini dibuat oleh Anisa Yulia untuk memenuhi Ujian Akhir Pemrograman Web Lanjutan.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
