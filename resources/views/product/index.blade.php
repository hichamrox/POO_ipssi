@extends('layouts.app')

@section('content')
@section('content')
@foreach ($products as $product)
<div class="animal-ct center">
  <div class="image-animal-ct">
      <img src="{{asset('img/'.$product->photo.'.jpg')}}" alt="produit">
      </a>
  </div>
  <div class="text-animal-ct textAnimaux">
      <div class="infoAnimal"> Nom : {{$product->name}} </div>
      <div class="infoAnimal">Prix : {{$product->price}} € </div>
      <div class="boutonVoir">
          <a href="animal/{{$product->id}}" >  voir </a>
      </div>
      
      <br/>
      
  </div>
</div>
@endforeach
@endsection
@endsection