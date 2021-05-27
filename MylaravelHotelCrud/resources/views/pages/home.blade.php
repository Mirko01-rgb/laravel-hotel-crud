@extends('layouts.main-layout')
@section('content')
  <div class="container text-center">
    <div class="row">
      <div class="col-12">
        <ul>
          @foreach ($employees as $employee)
            <li>
              <h3>
                <a href="{{ route('employee', $employee -> id) }}">
                  [{{ $employee -> id }}]
                  {{ $employee -> firstname }}
                  {{ $employee -> lastname }}
                </a>
                <a href="{{route('edit', $employee -> id)}}">
                  &#9998;
                </a>
                <a href="{{route('destroy', $employee -> id)}}">
                  &#10060;
                </a>
              </h3>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
