@extends('layouts.app')

@section('page_title')
    {{ $comic->title }}
@endsection

@section('main_content')
    <h1>COMIC</h1>

    <div class="container">  
        <div class="comic_info">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

            <div>
                <span>Title:</span> {{ $comic->title }}
            </div>

            <div>
                <span>Series:</span> {{ $comic->series }}
            </div>

            <div>
                <span>Price:</span> {{ $comic->price }}
            </div>

            <div>
                <span>Sale date:</span> {{ $comic->sale_date }}
            </div>

            <div>
                <span>Type:</span> {{ $comic->type }}
            </div>

            <div>
                <span>Description:</span> {{ $comic->description }}
            </div>
        </div>
    </div>
@endsection 