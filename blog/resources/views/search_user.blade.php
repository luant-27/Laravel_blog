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
        <form method="get" action="{{ route('search') }}">
            
            <label>Id:</label><br>
            <input type="text" id="id" name="id"><br>
            <label>Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label>Class:</label><br>
            <input type="text" id="class" name="class"><br>
            
            <input type="submit" value="Search">
        </form>                      
        
        @if(isset($users))      
        <table style="width:100%">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Class</th>
            </tr>
                @foreach ($users as $user )
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->class }}</td>
                </tr>
                @endforeach       
                    
            
          </table>
          @endif
    </div>
 </div>
 @endsection
