@extends('layouts.master')

@section('content')
  
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Halaman Utama</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/backend')}}">Home</a></li>
            <li class="breadcrumb-item active">Halaman Utama</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <!-- main content -->
  <div class="content">
  <div class="container-fluid">

    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1 class="">Aplikasi Akuntansi Keuangan</h1>
        <p>Aplikasi ini merupakan sebuah Aplikasi Akuntansi Keuangan berbasis web</p>
        <p>Aplikasi ini bersifat opensource, jadi siapapun bisa mengembangkanya</p>
      </div>
    </div>


    <div class="row">
      <div class="col-md-4">
        <a href="{{url('/transaksi')}}" class="card align-items-center bg-lightblue">
          <p></p>
          <i class="fas fa-cash-register fa-7x" ></i>
          <p></p>
          <p>Transaksi</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{url('/laporan')}}" class="card align-items-center bg-lightblue">
          <p></p>
          <i class="fas fa-file fa-7x" ></i>
          <p></p>
          <p>Laporan</p>
        </a>
      </div>
      <div class="col-md-4">
        <a href="{{url('/pengaturan')}}" class="card align-items-center bg-lightblue">
          <p></p>
          <i class="fas fa-cog fa-7x" ></i>
          <p></p>
          <p>pengaturan</p>
        </a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content -->
@endsection