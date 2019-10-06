@extends('layout_folder.index_layout')
@section('content')

  {{-- @dd($value); --}}

  <form class="" action="{{ route('book.update', $value -> id) }}" method="post">
    @csrf
      @method('POST')
    <label for="title">Title</label><br>
    <input type="text" name="title" value="{{ $value -> title }}"><br>
    <label for="description">Description</label><br>
    <input type="text" name="description" value="{{ $value -> description }}"><br>
    <label for="author">Author</label><br>
    <input type="text" name="author" value="{{ $value -> author }}"><br>
    <button type="submit" name="button">Update</button>
  </form>
@endsection
