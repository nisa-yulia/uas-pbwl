<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksidua extends Model
{
    use HasFactory;
public $timestamps = false;
    protected $table = "tb_transaksi";

    protected $primaryKey = 'id_pelanggan_transaksi';

    protected $guarded = [];    
}
