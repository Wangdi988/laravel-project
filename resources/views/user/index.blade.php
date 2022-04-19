@extends('inc.user.usersidenav')

@section('content')
    <div class="row">
        <div class="col-md-8 col-lg-8">
            {{-- To show thw messages  --}}
            @include('inc.message') 
            
            @if(count($reviews)>0)
                @foreach($reviews as $review)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2 col-lg-2">
                                    <img style="width:100%; height:" src="{{ asset('storage/cover_images/' . $review->cover_image)}}" alt="cover image">
                                </div>
                                <div class="col-md-10 col-lg-10">
                                    <p>Title: {{$review->title}}</p>
                                    <p>Author: {{$review->author}}</p>
                                    <p>ISBN No: {{$review->isbn_no}}</p>
                                    <p>Summary: {{substr($review->summaryOfBook, 0, 220)}}{{ strlen($review->summaryOfBook) > 220 ? "..." : ""}}</p>
                                    {{-- <small>Review by: {{$review->user->name}}</small><br><br> --}}
                                    {{-- <a href="{{route('likes',$review->id)}}" class="btn btn-info">
                                        <i class="fa fa-thumbs-up"></i> --}}
                                        {{-- <span>Liks ({{$likeCount}})</span> --}}
                                        {{-- @if(post_reviews()->id == $review->user_id)

                                           <span>Liks ({{ $review->where(['post_id' => $review->id])->get()->count() }})</span>
                                        @endif --}}
                                        {{-- <span>Liks ()</span>
                                    </a>
                                    <a href="" class="btn btn-info">
                                        <i class="fa fa-thumbs-down"></i>
                                        <span>Disliks ( )</span>
                                    </a>
                                    <a href="" class="btn btn-info">
                                        <i class="fa fa-comment"></i>
                                        <span>Comment</span>
                                    </a> --}}
                                    <a href="{{route('postReviews.show',$review->id)}}" class="btn btn-info">
                                        <i class="fa fa-eye"></i>
                                        <span>view</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            {{$reviews->links()}}
        </div>

        <div class="col-md-4">
            <img id="reading_img" class="d-block w-100" src="{{asset('image/Bhutanese.jpg')}}" alt="First slide">
        </div>
    </div>
@endsection