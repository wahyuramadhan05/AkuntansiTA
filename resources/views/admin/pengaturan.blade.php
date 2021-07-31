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


  <!-- main content -->
  <div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <a href="{{url('/akun')}}" class="card align-items-center bg-lightblue">
          <p></p>
          <i class="fas fa-cog fa-7x" ></i>
          <p></p>
          <p>akun</p>
        </a>
      </div>
      <div class="col-sm-6">
        <a href="{{url('/user')}}" class="card align-items-center bg-lightblue">
          <p></p>
          <i class="fas fa-user fa-7x" ></i>
          <p></p>
          <p>user</p>
        </a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div><!-- /.content -->
@endsection