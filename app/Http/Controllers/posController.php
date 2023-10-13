<?php

namespace App\Http\Controllers;

use App\Models\Pos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class posController extends Controller
{
    public function index($id)
    {
        $namaPos = Pos::where('id', $id)->get('nama');
        $posId = $id;
        return view('pos', compact('namaPos', 'posId'));
    }

    public function simpanData(Request $request)
    {
        $nama = $request->get('name');
        $idPos = $request->get('Pos_id');

        DB::table('logs')->insert(array(
            'nama' => $nama,
            'Pos_id' => $idPos,
        ));

        $namaPos = Pos::where('id', $idPos)->get('nama');
        // buat dapetin 1 kolom/field aja
        // $namaPos = Pos::where('id', $idPos)->first('nama');

        return response()->json(array(
            'message' => 'success',
            'namaPos' => $namaPos[0],
        ), 200);
    }
}
