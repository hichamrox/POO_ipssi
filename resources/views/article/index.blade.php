@extends('layouts.app')
@section('content')
  <div class="row">
    @foreach ($articles as $item)
      <div class="col-4">
        <div class="card">
          <img class="card-img-top" src="https://picsum.photos/200" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">{{$item->created_at}}</h4>
            <p class="card-text text-center">{{ $item->title }}</p>
          </div>
          <div class="card-footer">
            <h4 class="float-left">{{$item->category->name}}</h4>
            <a href="/article/{{$item->id}}" class="float-right">Voir</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection