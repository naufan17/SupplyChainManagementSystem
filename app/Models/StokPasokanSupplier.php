<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokPasokanSupplier extends Model
{
    use HasFactory;
    
    protected $fillable = ['id_supplier', 'pasokan', 'jumlah']; 

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
