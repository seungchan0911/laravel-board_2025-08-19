@extends('layout')

@section('main')
  <div class="form-content">
    <div class="title">Create New</div>
    <form action="{{ route('create') }}" method="POST">
      @csrf
      <div class="input-group">
        <input type="text" name="title" placeholder="title" required>
        <textarea name="content" id="" cols="30" rows="10" placeholder="content" required></textarea>
        <button type="submit">Create Post</button>
      </div>
    </form>
  </div>
@endsection