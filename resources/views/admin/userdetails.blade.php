@extends('admin.dashboard')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<table style="border: 5px solid gray" class="table table-striped table-responsive-sm table-hover">
    <tr>
        <th>Name</th>
        <th>userType</th>
        <th>Email</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($posts as $post)
      <tr>
          <td>{{$post->name}}</td>
          <td>{{$post->usertype}}</td>
          <td>{{$post->email}}</td>
          {{-- <td>
                @if($post->usertype == 'admin')
                     <a href="{{route('userRole',$post->id)}}" class="btn btn-info">edit</a>
                @endif
          </td> --}}
          <td><a href="{{route('addBook',$post->id)}}" class="btn btn-info btn-sm">Add Book</a></td>
          {{-- <td> --}}
            {{-- <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('RoleDestory',$post->id)}}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form> --}}

                        {{-- @if($post->usertype != 'admin')
                            <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('RoleDestory',$post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        @endif --}}
          {{-- </td> --}}
      </tr>
   @endforeach
  
</table>

{!! $posts->links() !!}

@endsection