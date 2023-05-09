@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/articles/{{$article->id}}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title : </label>
                <input type="text" name="title" required="required" class="form-control" value="{{$article->title}}" id=""><br>
            </div>
            <div class="form-group">
                <label for="content">Content : </label>
                <textarea type="text" name="content" required="required" class="form-control" id=""></textarea><br>
            </div>
            <div class="form-group">
                <label for="image">Feature Image : </label>
                <input type="file" name="image" required="required" class="form-control" id=""><br>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection