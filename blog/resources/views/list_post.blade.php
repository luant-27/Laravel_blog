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
        @foreach ($posts as $post)
            <div class="content-grid-info">
                <div class="post-info">
                <h4><a href="#">{{ $post->title }}</a> {{ $post->created_at }} </h4>
                <p>{{ $post->content }}</p>
                <a href="#"><span></span>Xem thêm</a>
                </div>
            </div>
        @endforeach
               
        
        
    </div>
 </div>
 @endsection
