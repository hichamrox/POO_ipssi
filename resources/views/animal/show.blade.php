@extends('layouts.app')

@section('content')
<div class="animal-ct center">
  <div class="image-animal-ct">
      <img src="{{asset('img/'.$animal->photo.'.jpg')}}" alt="Animal">
      </a>
  </div>
  <div class="text-animal-ct textAnimaux">
      <div class="infoAnimal"> Race : {{$animal->race}} </div>
      <div class="infoAnimal"> Nom : {{ $animal->name }} </div>
      <div class="infoAnimal"> Age : {{ $animal->age }} </div>
      <div class="infoAnimal"> Poids : {{ $animal->weight }} </div>
      <div class="infoAnimal">Disponible : {{ $animal->dispo ? 'Oui' : 'Non' }} </div>
      <div class="infoAnimal">Arrivé chez nous : {{ $animal->date_reception }} </div>
    
      @if ($animal->dispo)
      <div class="boutonAdopter">
          <a id="adoption" href="/animal/{{$animal->id}}/adopte" >  Adopter </a>
      </div>
      @else 
        <div class="infoAnimal">
            <p>Adoptée par: <h5>{{$animal->adopted->by->name}}</h5></p>
        </div>
      @endif
      
      <br/>
      
  </div>
</div>
@endsection