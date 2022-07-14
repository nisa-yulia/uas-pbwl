@extends('layouts.app')
@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Menu</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Edit Data Menu</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ url('/menu/' . $row->id_menu) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label">Nama menu</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_menu" class="form-control" id="kode" value="{{ $row->nama_menu }}" placeholder="Nama menu">
                </div>
            </div>
            <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Harga menu</label>
                <div class="col-sm-10">
                    <input type="text" name="harga_menu" class="form-control" id="nama" value="{{ $row->harga_menu }}" placeholder="harga menu">
                </div>
            </div>
             <hr>
                <div class="form-group">
                    <a href="{{url('menu')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection