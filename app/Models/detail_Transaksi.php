<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_Transaksi extends Model
{
    use HasFactory;
    protected $table ='detail_Transaksis';

    public fuction Transaksi(){
    	return $this ->belongsTo('App\Models\Transaksi');

    }

    public fuction barangs(){
    	return $this ->belongsTo('App\Models\barangs');
    }
}