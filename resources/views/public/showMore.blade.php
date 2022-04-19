@extends('public-layout.navbar')

@section('content')
<div class="container bg-white">
    <br>
    <div class="row">
        <div class="col-md-12">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 col-lg-2">
                                <img style="width:100%; height:" src="{{ asset('storage/cover_images/' . $shows->cover_image)}}" alt="cover image">
                            </div>
                            <div class="col-md-10 col-lg-10">
                                <table>
                                  <tr>
                                    <th>Title:</th>
                                    <td>{{$shows->title}}</td>
                                  </tr>
                                  <tr>
                                    <th> Author:</th>
                                    <td>{{$shows->author}}</td>
                                  </tr>
                                  <tr>
                                    <th>ISBN No:</th>
                                    <td>{{$shows->isbn_no}}</td>
                                  </tr>
                                </table><br>
                                {{($shows->summaryOfBook)}}
                                <br>
                                <small>Review by: {{$shows->name}}</small><br><br>
                                <a href="{{route('likes',$shows->id)}}" class="btn btn-info">
                                    <i class="fa fa-thumbs-up"></i>
                                    <span>Like ({{$likeCount}})</span>
                                    {{-- <span>Liks</span> --}}
                                </a>
                                {{-- <a href="{{route('dislikes',$shows->id)}}" class="btn btn-info">
                                    <i class="fa fa-thumbs-down"></i>
                                    <span>Dislike ({{$dislikeCount}})</span>
                                    {{-- <span>Disliks</span> --}}
                                {{-- </a> --}} 
        
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
                                        <div class="col-md-12">
                                            <form action="{{route('comments',$shows->id)}}" method="POST">
                                                @csrf
                                                  <div class="form-group">
                                                    <textarea class="form-control" name="comment" id="comment" rows="4"></textarea>
                                                  </div>
                                                  <button type="submit" class="form-control btn btn-info">Post Comment</button>
                                            </form><br>

                                            <h4>Comments</h4>
                                            @if(count($comments) > 0)
                                                @foreach($comments->all() as $comment)
                                                    <p>{{ $comment->comment }}</p>
                                                    <p>Comment by: {{$comment->name}}</p><hr><br>
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
                                {{-- <a href="{{route('postReviews.show',$review->id)}}" class="btn btn-info">view</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <br>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection