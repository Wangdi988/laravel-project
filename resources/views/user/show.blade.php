@extends('inc.user.usersidenav')

@section('content')
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <img style="width:100%; height:" src="{{ asset('storage/cover_images/' . $review->cover_image)}}" alt="cover image">
                    </div>

                    <div class="col-md-10 col-lg-10">
                        <p>Title: {{$review->title}}</p>
                        <p>Author: {{$review->author}}</p>
                        <p>ISBN No: {{$review->isbn_no}}</p>
                        <p>Summary: {{$review->summaryOfBook}}</p>
                        <small>Review by: {{$review->user->name}}</small><br><br>
                        <a href="{{route('likes',$review->id)}}" class="btn btn-info">
                            <i class="fa fa-thumbs-up"></i>
                            <span>Like ({{$likeCount}})</span>
                        </a>
                        {{-- <a href="{{route('dislikes',$review->id)}}" class="btn btn-info">
                            <i class="fa fa-thumbs-down"></i>
                            <span>Dislike ({{$dislikeCount}})</span>
                        </a> --}}
                        {{-- <button data-modal-target="#modal" class="btn btn-info"> --}}
                        {{-- <a href="" class="btn btn-info"> --}}
                            {{-- <i class="fa fa-comment"></i>
                            <span>Comment</span> --}}
                        {{-- </a> --}}
                    {{-- </button>  --}}
                        {{-- model for the comment --}}
                        {{-- <div class="modal" id="modal"> 
                            <div class="modal-header">
                                <div class="title">Comment</div>
                                <button data-close-button class="close-button">&times;</button>
                            </div>
                            <div class="modal-body">
                                This is try for the model
                            </div>
                        </div>
                        <div id="overlay"></div> --}}

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-comment"></i>
                            <span>Comment</span>
                        </button>
  
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Comment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form action="{{route('comments',$review->id)}}" method="POST">
                                                @csrf
                                                  <div class="form-group">
                                                    <textarea class="form-control" name="comment" id="comment" rows="4"></textarea>
                                                  </div>
                                                  <button type="submit" class="form-control btn btn-info">Post Comment</button>
                                            </form><br>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><br>

                                            <h4>Comments</h4>
                                            @if(count($comments) > 0)
                                                @foreach($comments->all() as $comment)
                                                    {{ $comment->comment }}
                                                    <p class="text-sm">Comment by: {{$comment->name}}</p><hr><br>
                                                @endforeach
                                                @else
                                                <p>No comment</p>
                                            @endif
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- ccc --}}
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $review->user_id)
                                <a href="{{route('postReviews.edit',$review->id)}}" class="btn btn-info">Edit</a>
                                <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postReviews.destroy',$review->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger float-right">Delete</button>
                                </form>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection