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
        $seminarId = $request->get('id');

        // DB::insert('insert into pseminars (nama, noHp, email, asal, namaAsal, seminars_id) values (?, ?, ?, ?, ?, ?)', [$nama, $noHp, $email, $asal, $namaAsal, 1]);

        DB::table('pseminars')->insert([
            'nama' => $nama,
            'noHp' => $noHp,
            'email'=> $email,
            'asal'=>$asal,
            'namaAsal'=>$namaAsal,
            'seminars_id'=>$seminarId,
        ]);
        
        return response()->json(array(
            'message'=>'success',
        ),200);

    }
}
