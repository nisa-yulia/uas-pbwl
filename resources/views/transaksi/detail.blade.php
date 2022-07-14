@extends('layouts.app')
@section('content')
 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Data Transaksi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">

        <div class="row">

            <div class="col-md-12">
                <h1> Detail Pesanan</h1>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
    <tr>
            <th width="40px"><b>No.</b></th>
                <td>Pesanan</td>
                <td>Harga Satuan</td>
                <td>Jumlah</td>
                <td>Total</td>
            <th width="210px" class="text-center">Action</th>
        </tr>
      </thead>
<?php $no=1;
$total=0;
$tot=0;
?>
         @foreach ($data as $row)

            <tr>
                <td><b> <?= $no++; ?><b></td>
                    <td>{{ $row->nama_menu }}</td>
                    <td>Rp.{{ $row->harga_menu }},-</td>
                    <td>{{ $row->jumlah }}</td>
                    <td>Rp.<?= $total = $row->jumlah * $row->harga_menu; ?>,-</td>
                    <?php $tot += $total;?>

<td>                    
                        <form action="{{ url('transaksi/' . $row->id_transaksi) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Hapus</button>
                        </form>                </td>
            </tr>
        @endforeach
        <tr>            
            <td></td>
            <td><b>Total :</b> </td>
            <td> </td>
            <td> </td>
            <td> <b>Rp.<?= $tot;  ?>,-</b></td>

    </tr>
    </table>
                        <a href="{{url('transaksi')}}" class="btn btn-success">Kembali</a> <a href="{{url('transaksi/' . $row->id_pelanggan_transaksi . '/edit')}}" class="btn btn-primary">Tambah</a>

</div>
</div>
</div>
</div>
</div>

    </div>
    </body>

</html>

@endsection