@extends('layouts.app')

@section('content')
<div>
        <h1>{{ $item->title }}</h1>
        <div><i>{{ $item->preview }}</i></div>
        <div>{{ $item->content }}</div>
        <p>{{ $item->is_active }}</p>
        <p>{{ $item->published_at }}</p>
</div>
@endsection