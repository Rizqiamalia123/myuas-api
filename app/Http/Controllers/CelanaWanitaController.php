<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CelanaWanita;

class CelanaWanitaController extends Controller
{
    public function celanaWanita() 
    {
        $data = CelanaWanita::get();

        if ($data->isEmpty()) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Celana Wanita!',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Celana Wanita',
                'data' => $data
            ]);
        }
    }
}
