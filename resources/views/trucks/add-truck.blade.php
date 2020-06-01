@extends('welcome')
@section('content')
<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{$title}}</h1>
        </div>
        <!-- Content -->
        {!! form($form) !!}


    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  @endsection