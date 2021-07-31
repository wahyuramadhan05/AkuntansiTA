<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\akun;

class akuncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = akun::all();

        return view('akun.index',compact('akun'));
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

        $akun = new akun;
        $akun->noAkun = $request->get('noAkun');
        $akun->nmAkun = $request->get('nmAkun');
        $akun->save();

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
        $akun = akun::findOrFail($request->kodeid);
        $akun->noAkun = $request->get('noAkun');
        $akun->nmAkun = $request->get('nmAkun');
        $akun->update();

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
        $akun = akun::findOrfail($request->kodeid);
        if($akun)
        {
            $akun->delete();
            //Alert::warning('Data Berhasil Dihapus');
        }
        return back();
    }
}
