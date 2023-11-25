@extends('layouts.app')

@section('content')
<table>
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
@endsection