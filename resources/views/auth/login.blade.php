@extends('layout')

@section('main')
  <div class="form-content">
    <div class="title">Sign In</div>
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <div class="input-group">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Sign In</button>
      </div>
    </form>
  </div>
@endsection