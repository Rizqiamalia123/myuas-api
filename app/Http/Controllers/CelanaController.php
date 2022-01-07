<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celana;

class CelanaController extends Controller
{
    public function getCelana() 
    {
        $data = Celana::get();

        if ($data->isEmpty()) {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data Celana!',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data Celana',
                'data' => $data
            ]);
        }
    }
}
