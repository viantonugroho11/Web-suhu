<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IntensitasModel;

class IntensitasController extends Controller
{
    public function __construct()
    {
        $this->IntensitasModel = new IntensitasModel() ;
    }

    public function index()
    {
        $data = [
            'intensitas' => $this->IntensitasModel->allData(),
        ];
        return view('v_intensitas', $data);
    }
}
