@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col col-12">
      <h2 class="text-center"> {{ $article->title }} </h2>
    </div>
    <div class="col col-12">
      <img class="mx-auto d-block mb-20 border" src="https://picsum.photos/seed/picsum/1000/400" alt="Blog">
    </div>
    <div class="col col-md-12">
      <div class="d-flex justify-content-center">
        <div style="margin-top: 20px" class="row">
          <div class="col-6">{{ $article->category->name }}</div>
          <div class="col-6">{{ $article->created_at }}</div>
        </div>
      </div>
    </div>
    <div class="col col-md-12">
      <p class="text-center" style="margin-top: 100px;">{{ $article->content }}</p>
    </div>
  </div>
@endsection