@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/articles" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title : </label>
                <input type="text" name="title" required="required" class="form-control" id=""><br>
                <label for="content">Content : </label>
                <textarea type="text" name="content" required="required" class="form-control" id=""></textarea><br>
                <label for="image">Feature Image : </label>
                <input type="file" name="image" required="required" class="form-control" id=""><br>
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection