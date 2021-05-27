@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <ul>
          @foreach ($employee as $employee)
            <li>
              <h3>
                [{{ $employee -> id }}]
                {{ $employee -> firstname }}
                {{ $employee -> lastname }}
              </h3>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
