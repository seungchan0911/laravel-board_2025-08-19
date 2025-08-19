@extends('layout')

@section('main')
  <div class="form-content">
    <div class="title">Sign Up</div>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="input-group">
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Sign Up</button>
      </div>
    </form>
  </div>
@endsection