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
                        DB::raw("SUM(nilai_suhu) as nilai_suhu1"))
                    ->orderBy(DB::raw("YEAR(created_at)"))
                    ->groupBy(DB::raw("YEAR(created_at)"))
                    ->get();
                    // dd($suhu);
        $res[] = ['Year', 'kode_area', 'nilai_suhu'];
        // $res=[];
        foreach ($suhu as $key => $val) {
            $res[++$key] = [2020, (int)$val->kode_area, (int)$val->nilai_suhu1];
            // $res += [2020, (int)$val->kode_area, (int)$val->nilai_suhu1];
        }
        // dd($res);
        // $res1=$res->toArray();
        return view('v_suhu')
            ->with('suhu', $res);
    }
}
