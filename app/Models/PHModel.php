<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PHModel extends Model
{
    public function allData(){
        return DB::table('ph')->get();
    }
}
