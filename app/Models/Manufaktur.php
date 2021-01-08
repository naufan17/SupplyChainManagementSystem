<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufaktur extends Model
{
    use HasFactory;
    
    protected $fillable = ['manufaktur']; 

    public function stokPasokanManufaktur()
    {
        return $this->hasMany(StokPasokanManufaktur::class);
    }

    public function stokBarangManufaktur()
    {
        return $this->hasMany(StokBarangManufaktur::class);
    }
}
