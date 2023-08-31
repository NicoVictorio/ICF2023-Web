<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumintate\Support\Facades\DB;

class posController extends Controller{
    
    public function simpanData(Request $request){
        $nama = $request ->get('nama');
        $idPos = $request ->get('idPos');

        DB::table('logs')->insert(array(
            'nama' => $nama,
            'Pos_id' => $idPos,

        ));

        return response()->json(array(
            'message'=>'success',
        ),200);
    }


}