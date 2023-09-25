<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function simpanData(Request $request)
    {
        $nama = $request->get('name');

        return response()->json(array(
            'name' => $nama,
        ), 200);
    }
}
