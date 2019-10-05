@extends('layout_folder.index_layout')

@section('content')

  <aside class="">
    <a href="{{ route('book.create') }}">ADD NEW ENTITY</a>
  </aside>

    <div class="wrapper-box">

      @foreach ($values as $value)
        <div class="box">
          <span>Title:</span>
          <p> {{ $value -> title }} </p>
          <span>Description:</span>
          <p> {{ $value -> description }} </p>
          <span>Author:</span>
          <p> {{ $value -> author }} </p>
        </div>
      @endforeach

    </div>

@endsection
