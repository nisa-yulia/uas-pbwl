<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
public $timestamps = false;
    protected $table = "tb_menu";

    protected $primaryKey = 'id_menu';

    protected $guarded = [];
}
