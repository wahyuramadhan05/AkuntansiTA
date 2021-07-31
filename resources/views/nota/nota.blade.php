    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Nota Pembayaran</title>

      <style>

        .kiri{
            text-align: left;
        }
  
        .kanan{
            text-align: right;
        }

        .tengah{
            text-align: center;
        }
      </style>

    </head>
    <body>      
        <table class="table-responsive" border="1" width="100%">
            <thead >
            <tr>
              <th class="kiri" style="border-color: white"><h5>KESATUAN : Polda Metro Jaya</h5></th>             
            </tr>
            <tr>             
              <th class="kiri" width="30%" style="border-color: white"><h5>PRO JUSTITIA </h5></th>
              <th style="border-color: white"><h4>"BUKTI PELANGGARAN LALULINTAS JALAN TERTENTU"</h4></th>
            </tr>
            <tr>
              <th class="kanan" style="color: white; border-color: white"><H3>TILANG NO.</H3></th>
              <th class="kiri" style="border-color: white"><H3>TILANG NO. </H3></th>
            </tr>
            </thead>
            <tbody>                      
                <tr>
                  <td style="border-color: white">PENYIDIK PENYIDIK PEMBANTU YANG BERTANDA TANGAN DIBAWAH INI MENGINGAT SUMPAH JABATAN MENYATAKAN DENGAN SEBENARNYA BAHWA SWEORANG</td>
                  <td width="40%" class="tengah"><h3>RUANG BAGI TERDAKWA</h3></td>                                                          
                </tr> 
                <tr>
                  <td>Nama : </td>
                  {{-- @foreach ($hasil as $item) --}}
                  <td>Melanggar Pasal :</td>
                  {{-- @endforeach                                     --}}
                </tr>
                <tr>
                  <td>Nomor KTP : </td>
                  <td>Total Denda yang Harus Dibayar : </td>
                </tr>
            </tbody>
            <tfoot>
            {{-- <tr>
              <th></th>
              <th>Pasal</th>
              <th>Peraturan</th>
              <th>Denda</th
            </tr> --}}
            </tfoot>
          </table>
    </body>
    </html>
