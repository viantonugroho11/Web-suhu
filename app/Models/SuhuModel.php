<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuhuModel extends Model
{
        use HasFactory;
        protected $table='suhu';
        protected $fillable = [
            'nilai_suhu',
            'kode_area'
        ];
}
