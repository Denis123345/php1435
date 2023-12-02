@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/">Navbar</a>
        </nav>
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              @foreach($items as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->title }}</td>
                  <td><a href="{{ route('news.show',$item->id) }}">{{$item->title }}<a></td> 
                  <td>{{ $item->created_at }}</td>
                  <td>{{ $item->preview }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div> 
      </div>
    </div>
  </div>
                

@endsection