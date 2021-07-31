@extends('layouts.master')

@section('content')

    <p style="text-align: center">Jurnal Umum</p>
    <p style="text-align: center">Bulan</p>
    <p style="text-align: center">Juni 2021</p>

    {{-- <th style="margin-left: 10%;"><a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i>Tambah</a></th> --}}

    <div class="row">
      <div class="col">
        <div class="content">
          <div class="card card-primary" id="detailtambah">           
              <div>
                <a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-default" style="margin-top: 3%; margin-left: 2%"><i class="fa fa-plus-circle"></i>Tambah</a>
              </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tanggal</th>
                    <th>Perkiraan</th>
                    <th>Ref</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                </tr>
                </thead>
                <tbody>                      
                    <tr>
                      <td></td>                                          
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>                
                    </tr>
                </tbody>
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
          </div>
        </div>
      </div>
    </div>
</div>

    {{-- <div class="content">
      <div class="card">
          <div class="card-header">
          <h3 class="card-title">Hukum Lalu Lintas</h3>
          </div>
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                  <th><a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i></a></th>                    
                  <th>Pasal</th>
                  <th>Peraturan</th>
                  <th>Denda</th>
              </tr>
              </thead>
              <tbody>
              @foreach($admin as $data)                
                  <tr>
                      <td><a href="#" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-warning" data-kode="{{ $data->id }}" data-psl="{{ $data->pasal }}" data-prtrn="{{ $data->peraturan }}" data-dnd="{{ $data->denda }}"><i class="fa fa-exchange-alt"></i></a> <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-danger" data-kode="{{ $data->id }}"><i class="fa fa-trash-alt"></i></a></td>                        
                      <td>{{ $data->pasal }}</td>
                      <td>{{ $data->peraturan }}</td>
                      <td>{{ $data->denda }}</td>                
                  </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                  <th><a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus-circle"></i></a></th>
                  <th>Pasal</th>
                  <th>Peraturan</th>
                  <th>Denda</th>
              </tr>
              </tfoot>
          </table>
          </div>
      </div>
  </div> --}}

    {{-- Modal Default --}}
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('adminpage.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}                                   
                @include('adminpage.form')              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
            </form>
          </div>
        </div>
      </div>

      {{-- Modal Edit --}}
    <div class="modal fade" id="modal-warning">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="{{ route('adminpage.update', 'adminpage') }}" method="POST" enctype="multipart/form-data">
                  {{ method_field('patch') }}
                  {{ csrf_field() }}                                   
              @include('adminpage.form')  
              <input type="hidden" name="kodeid" id="kodeid">            
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-warning">Simpan Data</button>
          </div>
          </form>
        </div>
      </div>
    </div>

    {{-- Modal Danger --}}
    <div class="modal fade" id="modal-danger">
      <div class="modal-dialog">
        <div class="modal-content bg-danger">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          <form action="{{ route('adminpage.destroy', 'adminpage') }}" method="POST" enctype="multipart/form-data">
                  {{ method_field('delete') }}
                  {{ csrf_field() }}   
            <h3>Apakah Data Ingin Dihapus?</h3>
            <input type="hidden" name="kodeid" id="kodeid">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-outline-light">Hapus</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    {{-- Modal Success --}}
    <div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Apakah Data Ingin di Simpan?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            </div>            
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-outline-light">Yes and Save</button>
            </div>
          </div>
        </div>
      </div>

    
    
@endsection

@section('scriptjs')
    <script>
        $(function(){
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
        })

        $('#modal-warning').on('show.bs.modal', function(event){
            var tombol = $(event.relatedTarget)
            var pasal = tombol.data('psl')
            var peraturan = tombol.data('prtrn')
            var denda = tombol.data('dnd')
            var id = tombol.data('kode')
            var modal = $(this)

            modal.find('.modal-body #pasal').val(pasal);
            modal.find('.modal-body #peraturan').val(peraturan);
            modal.find('.modal-body #denda').val(denda);
            modal.find('.modal-body #kodeid').val(id);
        });

        $('#modal-danger').on('show.bs.modal', function(event){
            var hps = $(event.relatedTarget)
            var id = hps.data('kode')

            var modal = $(this)

            modal.find('.modal-body #kodeid').val(id);
        });

    </script>
@endsection