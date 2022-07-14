<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
public $timestamps = false;
    protected $table = "tb_pelanggan";

    protected $primaryKey = 'id_pesanan';

    protected $guarded = [];    
}
