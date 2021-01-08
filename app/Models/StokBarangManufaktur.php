<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarangManufaktur extends Model
{
    use HasFactory;

    protected $fillable = ['id_manufaktur', 'barang', 'jumlah']; 

    public function manufaktur()
    {
        return $this->belongsTo(Manufaktur::class);
    }
}
