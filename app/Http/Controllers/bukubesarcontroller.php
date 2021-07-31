<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bukubesar;
use App\akun;
use DB;

class bukubesarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = DB::select("SELECT akuns.id, akuns.noAkun, akuns.nmAkun, bukubesars.tanggal, bukubesars.perkiraan, bukubesars.ref, bukubesars.debet, bukubesars.kredit FROM akuns, bukubesars WHERE  akuns.noAkun = bukubesars.ref");

        $bbesar = bukubesar::all();
        $akun = akun::all();

        return view('bukubesar.index',compact('bbesar','akun','detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $buku = bukubesar::findOrfail($request->kodeid);
        $buku->tanggal = $request->get('tanggal');
        $buku->ref = $request->get('ref');
        $buku->perkiraan = $request->get('perkiraan');
        $buku->debet = $request->get('debet');
        $buku->kredit = $request->get('kredit');
        $buku->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $buku = bukubesar::findOrfail($request->kodeid);
        if($buku)
        {
            $buku->delete();
        }

        return back();
    }

    public function getDetail(Request $request)
    {
        // $detran = DB::select("SELECT details.nota, details.id, details.idbayar, details.jumlah, bayars.nm_bayar, bayars.jenis FROM bayars, details WHERE bayars.idbayar = details.idbayar AND details.nota = '". $request->nota ."'");
        // return response()->json($detran);

        $detran = DB::select("SELECT akuns.id, akuns.noAkun, akuns.nmAkun, bukubesars.tanggal, bukubesars.perkiraan, bukubesars.ref, bukubesars.debet, bukubesars.kredit FROM akuns, bukubesars WHERE akuns.noAkun = '". $request->akun ."' AND akuns.noAkun = bukubesars.ref");

        return response()->json($detran);
    }
}
