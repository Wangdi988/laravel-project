@extends('admin.dashboard')

@section('content')
   {{-- <div class="container">
       <div class="row">
           <div class="col-md-">
                    <div class="jumbotron mb-3">
                        <b>Title: </b>{{$post->title}}<br>
                        <b>Author: </b>{{$post->author}}<br>
                        <b>ISBN No: </b>{{$post->isbn_no}}<br>
                        <a href="{{route('postbook.edit',$post->id)}}" class="btn btn-info">Edit</a>

                        <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postbook.destroy',$post->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right">Delete</button>
                        </form>

                        <p>Category: {{$post->category->name}}</p>
                        
                    </div>
           </div>
       </div>
   </div> --}}
   <div class="container">
       <div class="row mt-5" style="border: 1px solid rgb(132, 136, 138)">
           <div class="col-md-2">
               <img class="mt-4 mb-4" style="width:100%" src="{{ asset('storage/cover_image/' . $post->cover_image)}}">
           </div>
           <div class="col-md-9 mt-4 mb-4" style="border: 1px solid rgb(132, 136, 138)"><br>
                    <b>Title: </b>{{$post->title}}<br>
                    <b>Author: </b>{{$post->author}}<br>
                    <b>ISBN No: </b>{{$post->isbn_no}}<br>
                    <p>Category: {{$post->category->name}}</p>
                    <a href="{{route('postbook.edit',$post->id)}}" class="btn btn-info btn-sm">Edit</a>
                    
                    <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postbook.destroy',$post->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm float-right">Delete</button>
                    </form>
           </div>
       </div>
   </div>

@endsection