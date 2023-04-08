<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class SPMController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tabel()
    {

        $spm= spm::all();
        return view('tabel',['data'=>$data]);
        // $spm = DB::table('spm')->get();
        //return $tabel;
        // return view('spm.tabel', ['spm' => $spm]);
        // return view('tabel', compact('spm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        // $spm = DB::table('spm')->get();
        // return view('form');
        $spm= spm::all();
        return view('tambah',['data'=>$data]);
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function simpan(Request $request)
    {
        $spm = spm::create([
            'nama_puskesmas' => $request->nama,
            'pelayanan_kesehatan_ibu_hamil' => $request->jmlh_ibu_hamil,
            'pelayanan_kesehatan_ibu_bersalin' => $request->jmlh_ibu_bersalin,
            'pelayanan_kesehatan_Bayi_baru_lahir' =>$request->jmlh_bayi_lahir,
            'pelayanan_kesehatan_balita' =>$request->jmlh_balita,
            'pelayanan_kesehatan_pada_usia_pendidikan_dasar' => $request->jmlh_pdasar
        ]);
        // return redirect('tabel');
        $spm->save();
        return redirect()->route('Tampildata');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $spm = spm::find($id);
        return view('edit', compact('spm'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     $spm = spm::findorFail($id);
    //     $spm->tanggal => $request->tanggal;
    //     $spm->nama_puskesmas => $request->nama;
    //     $spm->pelayanan_kesehatan_ibu_hamil => $request->jmlh_ibu_hamil;
    //     $spm->pelayanan_kesehatan_ibu_bersalin => $request->jmlh_ibu_bersalin;
    //     $spm->pelayanan_kesehatan_Bayi_baru_lahir =>$request->jmlh_bayi_lahir;
    //     $spm->pelayanan_kesehatan_balita =>$request->jmlh_balita;
    //     $spm->pelayanan_kesehatan_pada_usia_pendidikan_dasar => $request->jmlh_pdasar;
    //     $spm->save();
    //     return redirect(spm);
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $spm = spm::find($id);
        $spm->delete();
        return redirect();
    }
}
