<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuhuModel;
use Illuminate\Support\Facades\DB;

class SuhuController extends Controller
{
    public function showChart()
    {
        $suhu = SuhuModel::select(
                        DB::raw("year(created_at) as year"),
                        DB::raw("SUM(kode_area) as kode_area"),
                        DB::raw("SUM(nilai_suhu) as nilai_suhu")) 
                    ->orderBy(DB::raw("YEAR(created_at)"))
                    ->groupBy(DB::raw("YEAR(created_at)"))
                    ->get();
  
        $res[] = ['Year', 'kode_area', 'nilai_suhu'];
        foreach ($suhu as $key => $val) {
            $res[++$key] = [$val->year, (int)$val->kode_area, (int)$val->nilai_suhu];
        }
  
        return view('v_suhu')
            ->with('suhu', json_encode($res));
    }
}