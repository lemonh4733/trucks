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
        <!-- Alert -->
        @if(Session::has('success'))
            <p class="alert alert-success">{{ Session::get('success') }}</p>
        @endif
        @if(Session::has('danger'))
            <p class="alert alert-danger">{{ Session::get('danger') }}</p>
        @endif
        <!-- Content -->
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Modelis</th>
                <th scope="col">Gamybos Metai</th>
                <th scope="col">Savininkas</th>
                <th scope="col">Savininkų skaičius</th>
                <th scope="col">Komentarai</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trucks as $truck)
                  <tr>
                    <th scope="row">{{$truck->id}}</th>
                    <td>{{$truck->brand->brand_name}}</td>
                    <td>{{$truck->years}}</td>
                    <td>{{$truck->owner}}</td>
                    <td>{{$truck->numb_of_owners}}</td>
                    <td>{{$truck->comment}}</td>
                    <td><a href="/trucks/delete&id={{$truck->id}}" class="btn btn-danger">Šalinti</a></td>
                    <td><a href="/trucks&update&id={{$truck->id}}" class="btn btn-success">Redaguoti</a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          


    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->
  @endsection