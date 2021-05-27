@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <ul>
          @foreach ($employee as $employee)
            <li>
              <h3>
                <a href="{{ route('employee', $employee -> id) }}">   
                  [{{ $employee -> id }}]
                  {{ $employee -> firstname }}
                  {{ $employee -> lastname }}
                </a>
              </h3>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
