@extends('inc.user.usersidenav')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            {{-- To show thw messages  --}}
            @include('inc.message') 
            
            {{-- @if(count($postReviews)>0)
                @foreach($postReviews as $review) --}}
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                {{-- <div class="col-md-2 col-lg-2">
                                    <img style="width:100%; height:" src="{{ asset('storage/cover_images/' . $review->cover_image)}}" alt="cover image">
                                </div> --}}
                                <div class="col-md-10 col-lg-12">
                                    {{-- <p>Title: {{$review->title}}</p>
                                    <p>Author: {{$review->author}}</p>
                                    <p>ISBN No: {{$review->isbn_no}}</p>
                                    <p>Summary: {{$review->summaryOfBook}}</p>
                                     <p>Summary: {{$review->summaryOfBook}}</p>
                                    <small>Review by: {{$review->user->name}}</small><br><br> --}}
                                    {{-- <a href="{{route('postReviews.show',$review->id)}}" class="btn btn-info">view</a> --}}
                                        {{-- @if(!Auth::guest())
                                            @if(Auth::user()->id == $review->user_id)
                                                <a href="{{route('postReviews.edit',$review->id)}}" class="btn btn-info">Edit</a>
                                                <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postReviews.destroy',$review->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                                                </form>
                                            @endif
                                        @endif --}}

                                        <table class="table table-striped table-responsive-sm table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>Status</th>
                                                    <th colspan="3">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($postReviews)>0)
                                            @foreach($postReviews as $review)
                                                <tr>
                                                    <td>{{$review->title}}</td>
                                                    <td>{{$review->author}}</td>
                                                    {{-- <td>{{$review->approve}}</td> --}}
                                                    <td>
                                                        @if($review->approve == true)
                                                            <span class="badge bg-blue">Approved</span>
                                                        @else
                                                            <span class="badge bg-pink">Pending</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{route('postReviews.show',$review->id)}}" class="btn btn-info"><i class="fa fa-eye"></i> view</a>
                                                    </td>
                                                    <td>
                                                        @if(!Auth::guest())
                                                        @if(Auth::user()->id == $review->user_id)
                                                            <a href="{{route('postReviews.edit',$review->id)}}" class="btn btn-info">Edit</a>
                                                        @endif
                                                      @endif
                                                    </td>
                                                    <td>
                                                        @if(!Auth::guest())
                                                        @if(Auth::user()->id == $review->user_id)
                                                            <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postReviews.destroy',$review->id)}}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>

                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- @endforeach
                @else
                <p>You have no post</p>
            @endif --}}
            {{-- {{$reviews->links()}} --}}
        </div>
    </div>
@endsection