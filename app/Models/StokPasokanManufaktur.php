<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokPasokanManufaktur extends Model
{
    use HasFactory;

    protected $fillable = ['id_manufaktur', 'pasokan', 'jumlah'];

    public function manufaktur()
    {
        return $this->belongsTo(Manufaktur::class);
    }
}
