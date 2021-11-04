<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PHModel;

class PHController extends Controller
{
    public function __construct()
    {
        $this->PHModel = new PHModel() ;
    }

    public function index()
    {
        $PH = [
            'ph' => $this->PHModel->allData(),
        ];
        return view('v_ph', $PH);
    }

}
