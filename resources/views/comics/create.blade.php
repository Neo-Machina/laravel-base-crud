@extends('layouts.app')

@section('page_title')
    New product
@endsection

@section('main_content')
    <h1>Create your new product</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title"> 
        </div>
        <br>

        <div>
            <label for="thumb">URL src</label>
            <input type="text" name="thumb" id="thumb"> 
        </div>
        <br>

        <div>
            <label for="series">Series</label>
            <input type="text" name="series" id="series"> 
        </div>
        <br>

        <div>
            <label for="sale_date">Sale date</label>
            <input type="text" name="sale_date" id="sale_date"> 
        </div>
        <br>

        <div>
            <label for="type">Type</label>
            <input type="text" name="type" id="type"> 
        </div>
        <br>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price"> 
        </div>
        <br>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <br>

        <input type="submit" value="Save">
    </form>
@endsection 