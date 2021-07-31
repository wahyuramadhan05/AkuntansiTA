<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurnalumum;
use App\bukubesar;
use App\neraca;
use App\akun;

use DB;

class jurnalumumcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = akun::all();
        $jurnal = jurnalumum::all();
        return view('jurnalumum.index',compact('jurnal','akun'));
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

        $jurnal = new jurnalumum;
        $jurnal->tanggal = $request->get('tanggal');
        $jurnal->ref = $request->get('ref');
        $jurnal->perkiraan = $request->get('perkiraan');
        $jurnal->debet = $request->get('debet');
        $jurnal->kredit = $request->get('kredit');
        $jurnal->save();
        
        $buku = new bukubesar;
        $buku->idjurnal = $jurnal->id;
        $buku->tanggal = $request->get('tanggal');
        $buku->ref = $request->get('ref');
        $buku->perkiraan = $request->get('perkiraan');
        $buku->debet = $request->get('debet');
        $buku->kredit = $request->get('kredit');
        $buku->save();

        $neraca = new neraca;
        $neraca->idjurnal = $jurnal->id;
        $neraca->ref = $request->get('ref');
        $neraca->perkiraan = $request->get('perkiraan');
        $neraca->debet = $request->get('debet');
        $neraca->kredit = $request->get('kredit');
        $neraca->save();

        return back();
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

        $jurnal = DB::update("UPDATE jurnalumums set tanggal = ?, ref = ?, perkiraan=?, debet=?, kredit=? where id = ?",[$request->tanggal, $request->ref, $request->perkiraan, $request->debet, $request->kredit,$request->kodeid]);
        $buku = DB::update("UPDATE bukubesars set tanggal = ?, ref = ?, perkiraan=?, debet=?, kredit=? where id = ?",[$request->tanggal, $request->ref, $request->perkiraan, $request->debet, $request->kredit,$request->kodeid]);
        $neraca = DB::update("UPDATE neracas set  ref = ?, perkiraan=?, debet=?, kredit=? where id = ?",[$request->ref, $request->perkiraan, $request->debet, $request->kredit,$request->kodeid]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {

        $jurnal = DB::delete("DELETE from jurnalumums where id = '". $request->kodeid ."' ");
        $buku = DB::delete("DELETE from bukubesars where idjurnal = '". $request->kodeid ."' ");
        $neraca = DB::delete("DELETE from neracas where idjurnal = '". $request->kodeid ."' ");
        
        return back();

    }

    public function jurnalcetak()
    {
        $akun = akun::all();
        $jurnalctk = jurnalumum::all();
        return view('jurnalumum.indexctk',compact('jurnalctk','akun'));
    }
}
