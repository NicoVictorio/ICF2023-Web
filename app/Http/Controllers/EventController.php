<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Nette\Utils\Html;
use Psy\Readline\Hoa\Console;

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
            'email' => $email,
            'asal' => $asal,
            'namaAsal' => $namaAsal,
            'seminars_id' => $seminarId,
        ]);

        return response()->json(array(
            'message' => 'success',
        ), 200);
    }

    public function simpanDataLomba(Request $request)
    {
        $nama = $request->get('nama');
        $noHp = $request->get('noHp');
        $email = $request->get('email');

        DB::table('pmainchardesign')->insert([
            'nama' => $nama,
            'noHp' => $noHp,
            'email' => $email,
        ]);

        $filename1 = $_FILES['identitasKTP']['tmp_name'];
        $filename2 = $_FILES['identitasKTP']['name'];
        $ext = pathinfo($_FILES['identitasKTP']['name'], PATHINFO_EXTENSION);
        $destination = public_path('/assets/ktmktp');
        move_uploaded_file($filename1,$destination."/".$filename2);

        return redirect()->route('event')->with('status', 'Registration Completed!');
    }

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
            'nama2' => $nama2,
            'nama3' => $nama3,
            'nama4' => $nama4,
            'nama5' => $nama5,
            'nama6' => $nama6,
            'noHpKetua' => $noHpKetua,
            'noHp1' => $noHp1,
            'noHp2' => $noHp2,
            'noHp3' => $noHp3,
            'noHp4' => $noHp4,
            'noHp5' => $noHp5,
            'noHp6' => $noHp6,
            'idMLBBKetua' => $idKetua,
            'idMLBB1' => $id1,
            'idMLBB2' => $id2,
            'idMLBB3' => $id3,
            'idMLBB4' => $id4,
            'idMLBB5' => $id5,
            'idMLBB6' => $id6,
        ]);


        $filename1 = $_FILES['idKTMKetua']['tmp_name'];
        $filename2 = $_FILES['idKTMKetua']['name'];
        $ext = pathinfo($_FILES['idKTMKetua']['name'], PATHINFO_EXTENSION);
        $destination = public_path('assets/ktmktp');
        move_uploaded_file($filename1,$destination."/".$filename2);

        $filename1 = $_FILES['idKTM1']['tmp_name'];
        $filename2 = $_FILES['idKTM1']['name'];
        $ext = pathinfo($_FILES['idKTM1']['name'], PATHINFO_EXTENSION);
        $destination = public_path('assets/ktmktp');
        move_uploaded_file($filename1,$destination."/".$filename2);

        $filename1 = $_FILES['idKTM2']['tmp_name'];
        $filename2 = $_FILES['idKTM2']['name'];
        $ext = pathinfo($_FILES['idKTM2']['name'], PATHINFO_EXTENSION);
        $destination = public_path('assets/ktmktp');
        move_uploaded_file($filename1,$destination."/".$filename2);

        $filename1 = $_FILES['idKTM3']['tmp_name'];
        $filename2 = $_FILES['idKTM3']['name'];
        $ext = pathinfo($_FILES['idKTM3']['name'], PATHINFO_EXTENSION);
        $destination = public_path('assets/ktmktp');
        move_uploaded_file($filename1,$destination."/".$filename2);

        $filename1 = $_FILES['idKTM4']['tmp_name'];
        $filename2 = $_FILES['idKTM4']['name'];
        $ext = pathinfo($_FILES['idKTM4']['name'], PATHINFO_EXTENSION);
        $destination = public_path('assets/ktmktp');
        move_uploaded_file($filename1,$destination."/".$filename2);

        
        if (isset($_FILES['idKTM5'])) {
            $filename1 = $_FILES['idKTM5']['tmp_name'];
            $filename2 = $_FILES['idKTM5']['name'];
            $ext = pathinfo($_FILES['idKTM5']['name'], PATHINFO_EXTENSION);
            $destination = public_path('assets/ktmktp');
            move_uploaded_file($filename1,$destination."/".$filename2);
        }
        
        if (isset($_FILES['idKTM6'])) {
            $filename1 = $_FILES['idKTM6']['tmp_name'];
            $filename2 = $_FILES['idKTM6']['name'];
            $ext = pathinfo($_FILES['idKTM6']['name'], PATHINFO_EXTENSION);
            $destination = public_path('assets/ktmktp');
            move_uploaded_file($filename1,$destination."/".$filename2);
        }

        return redirect()->route('event')->with('status', 'Registration Completed!');
    }
}
