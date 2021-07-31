@extends('layouts.master')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Jurnal Umum Cetak</h1>
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
      <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal-tambah"><i class="fa fa-plus"></i></a></th>
    </div><!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
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
@endsection

@section('scriptjs')
  <script>
    $(function(){
      $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      });
    })
  </script>
@endsection