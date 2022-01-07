<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser() 
    {
        $data = User::get()->first();

        if ($data) {
            return response()->json([
                'status' => TRUE,
                'message' => 'Berhasil menampilkan data User',
                'data' => $data
            ]);
        } else {
            return response()->json([
                'status' => FALSE,
                'message' => 'Gagal menampilkan data User!',
                'data' => $data
            ]);
        }
    }
}
