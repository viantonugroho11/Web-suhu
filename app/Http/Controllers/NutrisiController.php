<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NutrisiModel;

class NutrisiController extends Controller
{
    public function __construct()
    {
        $this->NutrisiModel = new NutrisiModel() ;
    }

    public function index()
    {
        $data = [
            'nutrisi' => $this->NutrisiModel->allData(),
        ];
        return view('v_nutrisi', $data);
    }
}
