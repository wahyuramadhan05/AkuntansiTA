@extends('layouts.master')

@section('content')
  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Halaman Kosong</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/backend')}}">Home</a></li>
            <li class="breadcrumb-item active">Halaman kosong</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


  <!-- main content -->
  <div class="content">
    <div class="container-fluid">
        <p> maaf, halaman yang anda tuju sedang tidak tersedia, halaman akan berfungsi saat kami sudah memperbaikinya</p>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content -->
@endsection