@extends('layouts.master')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Pengaturan User/pengguna</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{url('/backend')}}">Home</a></li>
          <li class="breadcrumb-item active">user</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content-header -->


<!-- main content -->
<div class="content">
  <div class="card">
    <div class="card-header text-center">
      <h3 class="card-title ">user</h3>
    </div><!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>nomor Admin</th>
            <th>nama</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>email</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($user as $data)
          <tr>
            <td>{{ $data->noAdmin }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->tglLhr }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->email }}</td>
          </tr>
        @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>nomor Admin</th>
            <th>nama</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>email</th>
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
    });

  </script>
@endsection