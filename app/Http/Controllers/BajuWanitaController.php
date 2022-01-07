<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BajuWanita;

class BajuWanitaController extends Controller
{
    public function bajuWanita() 
    {
        $data = BajuWanita::get();

        if ($data->isEmpty()) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Baju Wanita!',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Baju Wanita',
                'data' => $data
            ]);
        }
    }
}
