@extends('layout.default')

@section('title')
    Tìm kiếm
@endsection

@section('aside')
    @include('layout.aside')
@endsection

@section('content')
<div class="col-md-8 content-main">
    
    
    <div class="content-grid">	
        <form method="get" action="{{ route('search2') }}">            
            <label>User Id:</label><br>
            <input type="text" id="id" name="id"><br>
            <label>Phone:</label><br>
            <input type="text" id="phone" name="phone"><br>
            <label>Role:</label><br>
            <input type="text" id="role" name="role"><br>            
            <input type="submit" value="Search">
        </form>                      
        
        @if(isset($users))      
        <table style="width:100%">
            <tr>
                <th>Id</th>
                <th>Phone</th>
                <th>Role</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>@foreach($user->phone as $user_phone) {{ $user_phone->number }}   @endforeach</td>
                <td>@foreach($user->role as $user_role) {{ $user_role->name }}   @endforeach</td>
            </tr>
            @endforeach          
        </table>
        @endif
    </div>
 </div>
 @endsection
