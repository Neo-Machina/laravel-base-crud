@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
    <h1>COMICS</h1>

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                        <div class="card">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        
                            <div>{{ $comic->series }}</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection 