<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuhuModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suhu')-> insert([
            'Kode_Area' => '01',
            'Nilai_Suhu' => '38',
        ]);
        //\App\Models\Suhu::factory(10)->create();
    }
}
