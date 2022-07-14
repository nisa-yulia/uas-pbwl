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
                <h1> Data Transaksi</h1>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <a class="btn btn-success" href="{{ url('transaksi/create')}}"> Tambah Transaksi</a>
                        <table class="table table-bordered text-center">
                            <thead>
    <tr>
            <th width="40px"><b>No.</b></th>
                <td>Nama Pelanggan</td>
                <td>Nomor Antrian</td>
                <td>Tanggal Transaksi</td>
            <th width="210px" colspan="2" class="text-center">Action</th>
        </tr>
      </thead>
<?php $no=1;
$total=0;
?>
         @foreach ($data as $row)

            <tr>
                <td><b> <?= $no++; ?><b></td>
                    <td>{{ $row->nama_pelanggan }}</td>
                    <td>{{ $row->nomor_antrian }}</td>
                    <td>{{ $row->tanggal }}</td>
                <td class="text-center">
            <a href="{{ url('transaksi/' . $row->nomor_antrian . '/detail') }}" class="btn btn-primary">Detail</a></td>
<td>                    
                        <form action="{{ url('transaksi/' . $row->id_pelanggan_transaksi.'/detail') }}" method="POST">
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