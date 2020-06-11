@extends('layout.default')

@section('title')
    Danh sách bài viết
@endsection

@section('aside')
    @include('layout.aside')
@endsection

@section('content')
<div class="col-md-8 content-main">
    <div class="content-grid">	
        <form method="post" action="postStore">
            @csrf
            <label>Title:</label><br>
            <input type="text" id="title" name="title"><br>
            <label>Content:</label><br>
            <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Submit">
          </form>                      
           
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </div>
 </div>
 @endsection
