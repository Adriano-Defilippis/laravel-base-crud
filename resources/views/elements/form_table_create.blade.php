@extends('layout_folder.index_layout')
@section('content')
  <a href="{{ route('book.index') }}">BACK</a>
  <form class="" action="{{ route('book.store') }}" method="post">
    @csrf
      @method('POST')
    <label for="title">Title</label><br>
    <input type="text" name="title"><br>
    <label for="description">Description</label><br>
    <input type="text" name="description"><br>
    <label for="author">Author</label><br>
    <input type="text" name="author"><br>
    <button type="submit" name="button">Create</button>
  </form>
@endsection
