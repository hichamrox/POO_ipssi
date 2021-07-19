@extends('layouts.app')

@section('content')
    @auth
        @if (auth()->user()->role == "ADMIN")
            <a class="btn btn-primary btn-sm float-right" href="/animal/create" role="button">Ajouter un animal</a>
        @endif 
    @endauth
   
    @foreach ($animals as $animal)
    <div class="animal-ct center">
      <div class="image-animal-ct">
          <img src="{{asset('img/'.$animal->photo.'.jpg')}}" alt="Animal">
          </a>
      </div>
      <div class="text-animal-ct textAnimaux">
          <div class="infoAnimal"> Nom : {{$animal->name}} </div>
          <div class="infoAnimal">Disponible : {{$animal->dispo ? 'Oui': 'Non'}} </div>
          <div class="infoAnimal">Arrivé chez nous : {{$animal->date_reception}} </div>
          <div class="boutonVoir">
              <a href="animal/{{$animal->id}}/show" >  voir </a>
          </div>
          
          <br/>
          
      </div>
  </div>
    @endforeach
@endsection