@extends('admin.dashboard')
@section('content')
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-4">
              <div class="main">
                  <div class="container">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- category --}}
                        <div class="row bg-secondary"><br>
                            <div class="col-md-12">
                            {{-- For add and edit category --}}
                                <div class="text-right">
                                        <a href="{{route('addcategory')}}" style="color: white; padding-right: 20px">
                                            <i class="fa fa-plus"></i>
                                        </a>
            
                                        <a href="{{route('editcategory')}}" style="color: white;padding-right: 5px">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    </div><br>
                                    <ul class="list-group">
                                        @if(count($categories)>0)
                                                @foreach($categories->all() as $category)
                                                <li class="list-group-item"><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
                                                @endforeach
                                        @endif
                                    </ul>
                                    <br>
                                </div>
                            </div>
                        {{-- end category --}}
                  </div>
              </div>
          </div>
          <div class="col-md-8">
            <div style="border: 1px solid rgb(132, 136, 138)">
                <div class="container">
                    @foreach($posts as $post)
                    <div class="card mb-2 mt-2">
                        <div class="row card-body">
                            <div class="col-md-4 col-lg-4">
                                <img style="width:100%" src="{{ asset('storage/cover_image/' . $post->cover_image)}}">
                            </div>
                            <div class="col-md-8 col-lg-8">
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
                                    {{-- <a href="{{route('postbook.show',$post->id)}}" class="btn btn-info">View</a> --}}
                                    {{-- <a href="{{route('postbook.edit',$post->id)}}" class="btn btn-info">Edit</a>

                                    <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postbook.destroy',$post->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger float-right">Delete</button>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                     
               @endforeach
                </div>
            </div>
          </div>
      </div>
  </div>
@endsection