@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                       <div class="row"> 
                          <div class="col-lg-4 col-md-4 col-sm-12">
                            <div><img class="news__img" src="{{asset('storage/' . $item->image)}}" alt=""></div>
                            <div><img class="news__img" src="{{asset('storage/images' . $item->image)}}" alt=""></div>
                             <p><div class="text-center">{{ $item->published_at }}</div></p>  
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-12">
                             <h1 class="mt-2"><span class="text-justify">Название: </span>{{ $item->title }}</h1>
                             <div class="mt-1"><span class="text-justify">Аннотация: </span><i>{{ $item->preview }}</i></div>
                             <div class="mt-1">{{ $item->content }}</div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection