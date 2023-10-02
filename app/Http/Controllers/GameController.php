<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function simpanDataMLBB(Request $request)
    {    
        $namaTim = $request->get('namaTim');

        $namaKetua = $request->get('namaKetua');
        $nama1 = $request->get('nama1');
        $nama2 = $request->get('nama2');
        $nama3 = $request->get('nama3');
        $nama4 = $request->get('nama4');
        $nama5 = $request->get('nama5');
        $nama6 = $request->get('nama6');

        $noHpKetua = $request->get('noHpKetua');
        $noHp1 = $request->get('noHp1');
        $noHp2 = $request->get('noHp2');
        $noHp3 = $request->get('noHp3');
        $noHp4 = $request->get('noHp4');
        $noHp5 = $request->get('noHp5');
        $noHp6 = $request->get('noHp6');

        $idKetua = $request->get('idKetua');
        $id1 = $request->get('id1');
        $id2 = $request->get('id2');
        $id3 = $request->get('id3');
        $id4 = $request->get('id4');
        $id5 = $request->get('id5');
        $id6 = $request->get('id6');

        DB::table('pmlbb')->insert([
            'namaTim' => $namaTim,
            'namaKetua' => $namaKetua,
            'nama1' => $nama1,
            'nama2'=> $nama2,
            'nama3' => $nama3,
            'nama4'=> $nama4,
            'nama5' => $nama5,
            'nama6'=> $nama6,
            'noHpKetua' =>$noHpKetua,
            'noHp1' => $noHp1,
            'noHp2' => $noHp2,
            'noHp3' => $noHp3,
            'noHp4' => $noHp4,
            'noHp5' => $noHp5,
            'noHp6' => $noHp6,
            'idMLBBKetua' =>$idKetua,
            'idMLBB1' => $id1,
            'idMLBB2' => $id2,
            'idMLBB3' => $id3,
            'idMLBB4' => $id4,
            'idMLBB5' => $id5,
            'idMLBB6' => $id6,
        ]);

        return response()->json(array(
            'message'=>'success',
        ),200);
    }
}
