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
  <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">        
        <form action="{{url('/menu')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Menu</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_menu" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Harga Menu</label>
                <div class="col-sm-10">
                    <input type="text" name="harga_menu" class="form-control" id="nama" >
                </div>
            </div>
             <hr>
                <div class="form-group">
                    <a href="{{url('menu')}}" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>

    </div>
    </div>
</div>
</div>
</div>
</div>
    </body>
</html>
    
@endsection