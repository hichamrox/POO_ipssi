@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <form action="/dons" method="post">
            @csrf
            <div class="col col-12">
              <div class="form-group">
                <label for="don">Don</label>
                <input type="text"
                  class="form-control" name="don" id="don" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Entrer la somme</small>
              </div>
            </div>
            <div class="col col-12">
              <button class="btn btn-primary" type="submit">
                submit
              </button>
            </div>
        </form>
      </div>
    </div>
@endsection