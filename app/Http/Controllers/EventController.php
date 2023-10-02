<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function simpanData(Request $request)
    {
        $nama = $request->get('nama');
        $noHp = $request->get('noHp');
        $email = $request->get('email');
        $asal = $request->get('asal');
        $namaAsal = $request->get('namaAsal');
        $seminarId = $request->get('idSeminars');

        // var_dump($nama + $noHp + $email + $asal + $namaAsal + $seminarId);
        // DB::insert('insert into pseminars (nama, noHp, email, asal, namaAsal, seminars_id) values (?, ?, ?, ?, ?, ?)', [$nama, $noHp, $email, $asal, $namaAsal, $seminarId]);

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

    public function simpanDataLomba(Request $request)
    {
        $nama = $request->get('nama');
        $noHp = $request->get('noHp');
        $email = $request->get('email');

        DB::table('pMainCharDesign')->insert([
            'nama' => $nama,
            'noHp' => $noHp,
            'email'=> $email,
        ]);

        return response()->json(array(
            'message'=>'success',
        ),200);

    }
}
