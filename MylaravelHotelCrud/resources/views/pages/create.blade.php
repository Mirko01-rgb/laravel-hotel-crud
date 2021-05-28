@extends('layouts.main-layout')
@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form method="POST" action="{{route('store')}}">
    @csrf
    @method('POST')
    <div class="form-group row">
      <label for="firstname" class="col-md-3 col-form-label text-md-right">
        Firstame
      </label>
      <div class="col-md-6">
        <input id="firstname" type="text" class="form-control" name="firstname">
      </div>
    </div>

    <div class="form-group row">
      <label for="lastname" class="col-md-3 col-form-label text-md-right">
        Lastname
      </label>
      <div class="col-md-6">
        <input id="lastname" type="text" class="form-control" name="lastname">
      </div>
    </div>

    <div class="form-group row">
      <label for="role" class="col-md-3 col-form-label text-md-right">
        Role
      </label>
      <div class="col-md-6">
        <input id="role" type="number" class="form-control" name="role">
      </div>
    </div>

    <div class="form-group row">
      <label for="ral" class="col-md-3 col-form-label text-md-right">
        Ral
      </label>
      <div class="col-md-6">
        <input id="ral" type="number" class="form-control" name="ral">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">
          Create
        </button>
      </div>
    </div>
  </form>

@endsection
