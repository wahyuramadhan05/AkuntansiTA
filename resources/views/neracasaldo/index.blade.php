@extends('layouts.master')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Neraca Saldo</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/backend')}}">Home</a></li>
          <li class="breadcrumb-item active">neraca saldo</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content-header -->


<!-- main content -->
<div class="content">
    <div class="card card-navy">
        <div class="card-header">
            <h3 class="card-title">Neraca Saldo</h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="noAkun" class="col-sm-2 form-label">Pilih No Akun/Ref</label>
                <div class="col-sm-3">
                    <select id="noAkun" name="noAkun" class="form-control">
                    <option value="0"></option>
                        @foreach($akun as $data)
                            <option value="{{ $data->noAkun }}" data-noAkun="{{ $data->noAkun }}" data-nmAkun="{{ $data->nmAkun }}">{{ $data->nmAkun}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- @include('bukubesar.data') -->

            <table id = "example" class="table table-bordered table-striped" style="height: 300px;">
            <thead>
            <tr>
                <th>Tanggal</th>
                <th>Perkiraan</th>
                <th>Ref</th>
                <th>Debet</th>
                <th>Kredit</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Tanggal</th>
                <th>Perkiraan</th>
                <th>Ref</th>
                <th>Debet</th>
                <th>Kredit</th>
            </tr>
            </tfoot>
          
            </table>
        </div>
        <div class="text-center">
        <h6>lakukan refresh terlebih dahulu saat ingin mencari pembayaran siswa yang lain.</h6>
        </div>
    </div>
</div>


@endsection

@section('scriptjs')
  <script>
    $(doument).on(ready,function(){
      
    var akun = $('#noAkun').val();

    $('#example').DataTable({
      "ajax"    : {
      "url"     : '/getData/'+ akun,
      "dataSrc" : function (json) {
          var return_data = new Array();
          for(var a=0; a < json.length; a++){
            return_data.push({
              'tanggal'     : json[a].tanggal,
              'perkiraan'   : json[a].perkiraan,
              'ref'         : json[a].ref,
              'debet'       : json[a].debet,
              'kredit'      : json[a].kredit
              })
            }
            return return_data;
          }
        },
        "columns" : [
          {'data' : 'tanggal'},
          {'data' : 'perkiraan'},
          {'data' : 'ref'},
          {'data' : 'debet'},
          {'data' : 'kredit'}
        ],
      "responsive": true,
      "autoWidth": false,
    });
  });



  // $(function(){
  //     $("#example").DataTable({
  //     "responsive": true,
  //     "autoWidth": false,
  //     });
  //   })

  </script>
@endsection