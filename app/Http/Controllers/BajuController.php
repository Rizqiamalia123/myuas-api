<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baju;

class BajuController extends Controller
{
    public function getBaju() 
    {
        $data = Baju::get();

        if ($data->isEmpty()) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Baju!',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Baju',
                'data' => $data
            ]);
        }
    }
}
