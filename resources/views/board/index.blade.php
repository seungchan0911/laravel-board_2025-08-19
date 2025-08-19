@extends('layout')

@section('main')
    <div class="title">Board</div>
    <div class="button"><a href="{{ route('create') }}">create new</a></div>
    <div class="board">
        <div class="thead">
            <div class="tr">
                <div class="th">id</div>
                <div class="th">name</div>
                <div class="th">title</div>
                <div class="th">date</div>
            </div>
        </div>
        <div class="tbody">
            @foreach ($posts as $post)
                <div class="tr">
                    <div class="td">{{ $post->id }}</div>
                    <div class="td">{{ $post->user->name }}</div>
                    <div class="td"><a href="{{ $post->id }}">{{ $post->title }}</a></div>
                    <div class="td">{{ $post->created_at->format('Y. m. d.') }}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection