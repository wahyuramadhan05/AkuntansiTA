<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use PDF;
use App\Admin;
use App\Detail;
use App\detailtambah;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function cetaknota($notrans)
    {
        // $hasil = DB::table('details')->join('detailtambahs','details.nmtlg','=','detailtambahs.nmtlg')
        //         ->join('admins','admins.id','=','detailtambahs.id')
        //         ->where('details.nmtlg', $notrans)
        //         ->select('details.*','admins.pasal')->get();
                // dd($hasil);
        $admin = Admin::all();
        $hasil = $notrans;
        $pdf = PDF::loadView("nota.nota",$admin,[],[
                "Format" => "A5-L"
        ]);
        return $pdf->stream("nota.pdf");
    }
}
