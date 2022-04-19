@extends('admin.dashboard')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-4">
               <h4>Category</h4>
               <ul class="list-group">
                    @if(count($categories)>0)
                            @foreach($categories->all() as $category)
                            <li class="list-group-item"><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
                            @endforeach
                    @endif
               </ul>
               <br>
           </div>
           
           <div class="col-md-8" style="border: 1px solid rgb(132, 136, 138)">
            <div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($posts as $post)
                            <div class="mb-3" style="border: 1px solid rgb(132, 136, 138)">
                                <div class="row mt-4 mb-4 ml-1">
                                    <div class="col-md-2 col-lg-2">
                                        <img style="width:100%" src="{{ asset('storage/cover_image/' . $post->cover_image)}}">
                                    </div>
                                    <div class="col-md-10 col-lg-10">
                                        <div class="">
                                            <table>
                                                <tr>
                                                    <th>Title:</th>
                                                    <td>{{$post->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Author:</th>
                                                    <td>{{$post->author}}</td>
                                                </tr>
                                                <tr>
                                                    <th>ISBN No:</th>
                                                    <td>{{$post->isbn_no}}</td>
                                                </tr>
                                            </table>
                                            <a href="{{route('postbook.show',$post->id)}}" class="btn btn-info btn-sm">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    {!! $posts->links() !!}

                    </div>
                </div>
            </div>  
           </div>
       </div>
   </div>
@endsection