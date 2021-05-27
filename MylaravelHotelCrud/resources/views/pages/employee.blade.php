@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <h3>Id -->[{{ $employee -> id }}]</h3>
        <h3>Firstname -->{{ $employee -> firstname }}</h3>
        <h3>Lastname -->{{ $employee -> lastname }}</h3>
        <h3>Role --> {{$employee -> role}}</h3>
        <h3>Ral --> {{$employee -> ral}}</h3>
      </div>
    </div>
  </div>
@endsection
