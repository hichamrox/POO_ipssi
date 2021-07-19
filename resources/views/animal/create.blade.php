@extends('layouts.app')

@section('content')
    <form action="/animal/create" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="">Nom</label>
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Nom d'animal</small>
      </div>
      <div class="form-group">
        <label for="">Race</label>
        <input type="text" class="form-control" name="race" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">La race</small>
      </div>
      <div class="form-group">
        <label for="">Age</label>
        <input type="text" class="form-control" name="age" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">L'age</small>
      </div>
      <div class="form-group">
        <label for="">Poids</label>
        <input type="text" class="form-control" name="weight" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Le points</small>
      </div>
      <div class="form-group">
        <label for="">Date de reception</label>
        <input type="text" class="form-control" name="date_reception" id="" aria-describedby="helpId" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Photo</label>
        <input type="file" class="form-control" name="image" id="" aria-describedby="helpId" placeholder="">
        <small id="helpId" class="form-text text-muted">Image</small>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection