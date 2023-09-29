<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function hiddenSeminar(Request $request)
    {
        $nama = $request->get('name');
        $id = $request->get('id');

        return response()->json(array(
            'name' => $nama,
            'id' => $id,
        ), 200);
    }

    public function simpanData(Request $request)
    {
        $nama = $request->get('nama');
        $noHp = $request->get('noHp');
        $email = $request->get('email');
        $asal = $request->get('asal');
        $namaAsal = $request->get('namaAsal');
        $seminarId = $request->get('seminars_id');

        DB::table('pseminars')->insert(array(
            'nama' => $nama,
            'noHp' => $noHp,
            'email'=> $email,
            'asal'=>$asal,
            'namaAsal'=>$namaAsal,
            'seminars_id'=>$seminarId
        ));
    }

    public function getAsal(Request $request)
    {
        $asal = $request->get('asal');
        dd($asal);
        if ($asal == 'sekolah') {
            return response()->json("sekolah", 200);
        } else if ($asal == 'instansi') {
            return response()->json("instansi", 200);
        } else if ($asal == 'umum') {
            return response()->json("umum", 200);
        }
    }
}
