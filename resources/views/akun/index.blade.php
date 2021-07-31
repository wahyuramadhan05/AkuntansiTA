@extends('layouts.master')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pengaturan Akun/REF</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/backend')}}">Home</a></li>
          <li class="breadcrumb-item active">akun</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content-header -->


<!-- main content -->
<div class="content">
  <div class="card">
    <div class="card-header text-center">
      <h3 class="card-title ">akun/ref</h3>
    </div><!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i></a></th>
            <th>id akun</th>
            <th>nomor akun</th>
            <th>nama akun</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($akun as $data)
          <tr>
            <td><a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-edit"  data-id="{{ $data->id }}" data-no="{{ $data->noAkun }}" data-nm="{{ $data->nmAkun }}"><i class="fa fa-pencil-alt"></i><a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-hapus" data-id="{{ $data->id }}"><i class="fa fa-trash-alt"></i> </td>
            <td>{{ $data->id }}</td>
            <td>{{ $data->noAkun }}</td>
            <td>{{ $data->nmAkun }}</td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th></th>
            <th>id akun</th>
            <th>nomor akun</th>
            <th>nama akun</th>
          </tr>
        </tfoot>
      </table>
    </div><!-- /.card-body --> 
  </div><!-- /.card -->
</div><!-- /.content-->

<!-- Modal tambah-->
<div class="modal fade" id="modal-tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('akun.store')}}" method="POST" enctype="multipart/form-data"> 
        {{ csrf_field() }}
        @include('akun.form')
          <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal edit -->
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Rubah Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('akun.update','akun') }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH')}} 
        {{ csrf_field() }}
        @include('akun.form')
        <input type="text" id="kodeid" name="kodeid">
          <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- modal hapus -->
<div class="modal fade" id="modal-hapus">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hapus Data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('akun.destroy','akun') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
          {{ method_field('delete') }}
          {{ csrf_field() }}
          <p>pastikan data yang akan dihapus benar</p>
          <input type="" id="kodeid" name="kodeid">
          <div class="modal-footer justify-content-right">
            <button type="submit" class="btn btn-danger">hapus</button>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('scriptjs')
  <script>
    $(function(){
      $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      });
    });

    $('#modal-edit').on('show.bs.modal', function(event){
        var tombol = $(event.relatedTarget)
        var id = tombol.data('id')
        var nomor = tombol.data('no')
        var nama = tombol.data('nm')
        var modal = $(this)

        modal.find('.modal-body #noAkun').val(nomor);
        modal.find('.modal-body #nmAkun').val(nama);
        modal.find('.modal-body #kodeid').val(id);
    });

   $('#modal-hapus').on('show.bs.modal', function(event){
      var hps = $(event.relatedTarget)
      var id = hps.data('id')
      var modal = $(this)

      modal.find('.modal-body #kodeid').val(id);
    });
  </script>
@endsection