@extends('layouts.app')
@section('content')
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Pelanggan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">

        <div class="row">

            <div class="col-md-12">
                <h1> Data Pelanggan</h1>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <a class="btn btn-success" href="{{ url('pelanggan/create')}}"> Tambah Data Pelanggan</a>
                        <table class="table table-bordered text-center">
                            <thead>
    <tr>
            <th width="40px"><b>No.</b></th>
                <td>Nama Pelanggan</td>
                <td>Nomor Antrian</td>
            <th width="210px" colspan="2" class="text-center">Action</th>
        </tr>
      </thead>
<?php $no=1;
?>
         @foreach ($rows as $row)
            <tr>
                <td><b> <?= $no++; ?><b></td>
                    <td>{{ $row->nama_pelanggan }}</td>
                    <td>{{ $row->nomor_antrian }}</td>
                <td class="text-center">
            <a href="{{ url('pelanggan/' . $row->id_pesanan . '/edit') }}" class="btn btn-primary">Edit</a></td>
<td>                    
                        <form action="{{ url('pelanggan/' . $row->id_pesanan) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>                </td>
            </tr>
        @endforeach
    </table>
</div>
</div>
</div>
</div>
</div>

    </div>
    </body>

</html>

@endsection