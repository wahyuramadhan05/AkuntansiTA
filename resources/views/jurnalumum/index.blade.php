@extends('layouts.master')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Jurnal Umum</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/backend')}}">Home</a></li>
          <li class="breadcrumb-item active">Jurnal Umum</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content-header -->


<!-- main content -->
<div class="content">
  <div class="card">
    <div class="card-header text-center">
      <h3 class="card-title ">Jurnal Umum</h3>
    </div><!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
          <th><a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i></a></th>
            <th>Tanggal</th>
            <th>Perkiraan</th>
            <th>Reff</th>
            <th>Debet</th>
            <th>Kredit</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($jurnal as $data)
          <tr>
            <td><a href="#" class="btn btn-outline-success" data-toggle="modal" data-target="#modal-edit" data-id="{{ $data->id }}" data-tanggal="{{ $data->tanggal }}" data-perkiraan="{{ $data->perkiraan }}" data-ref="{{ $data->ref }}" data-debet="{{ $data->debet }}" data-kredit="{{ $data->kredit }}" ><i class="fa fa-pencil-alt"></i></a> <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-hapus" data-id="{{ $data->id }}"><i class="fa fa-trash-alt"></i></a></td>
            <td>{{ $data->tanggal }}</td>
            <td>{{ $data->perkiraan }}</td>
            <td>{{ $data->ref }}</td>
            <td>{{ $data->debet }}</td>
            <td>{{ $data->kredit }}</td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
          <th><a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i></a></th>
            <th>Tanggal</th>
            <th>Perkiraan</th>
            <th>Reff</th>
            <th>Debet</th>
            <th>Kredit</th>
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
        <form action="{{route('jurnalumum.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('jurnalumum.form')
        <input type="hidden" id="idjurnal" name="idjurnal">
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
        <form action="{{ route('jurnalumum.update','jurnalumum') }}" method="POST" enctype="multipart/form-data">
        {{ method_field('PATCH')}} 
        {{ csrf_field() }}
        @include('jurnalumum.form')
        <input type="hidden" id="kodeid" name="kodeid">
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
        <form action="{{ route('jurnalumum.destroy','jurnalumum') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
          {{ method_field('delete') }}
          {{ csrf_field() }}
          <p>pastikan data yang akan dihapus benar</p>
          <input type="text" id="kode" name="kode">
          <input type="hidden" id="kodeid" name="kodeid">
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
    })

    $('#modal-edit').on('show.bs.modal', function(event){
      var tombol = $(event.relatedTarget)
      var id = tombol.data('id')
      var tanggal = tombol.data('tanggal')
      var perkiraan = tombol.data('perkiraan')
      var ref = tombol.data('ref')
      var debet = tombol.data('debet')
      var kredit = tombol.data('kredit')
      var modal = $(this)

      modal.find('.modal-body #tanggal').val(tanggal);
      modal.find('.modal-body #perkiraan').val(perkiraan);
      modal.find('.modal-body #ref').val(ref);
      modal.find('.modal-body #debet').val(debet);
      modal.find('.modal-body #kredit').val(kredit);
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