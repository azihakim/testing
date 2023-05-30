<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;
    public $table ="pengirimans";
    // public function barangs(){
    //     return $this->hasMany(Barang::class);
    // }
}
