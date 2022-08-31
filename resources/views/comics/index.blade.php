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

                    <div class="edit_link">
                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                            Edit comic
                        </a>
                    </div>

                    <div class="delete_button">
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                
                            <input type="submit" value="Delete" onclick="return confirm('Are you sure to delete this comic?');">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection 