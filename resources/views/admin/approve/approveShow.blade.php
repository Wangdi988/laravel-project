@extends('admin.dashboard')
@section('content')
    <div class="container">
        <div class="row" style="border: 1px solid rgb(132, 136, 138)">
            <div class="col-md-2 col-lg-2">
                <img class="mt-2 mb-2" style="width:100%; height:" src="{{ asset('storage/cover_images/' . $review->cover_image)}}" alt="cover image">
            </div>

            <div class="col-md-10 col-lg-10 mt-2 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12" style="border: 1px solid rgb(132, 136, 138)">
                            <p>Title: {{$review->title}}</p>
                            <p>Author: {{$review->author}}</p>
                            <p>ISBN No: {{$review->isbn_no}}</p>
                            <p>Summary: {{$review->summaryOfBook}}</p>
                            <small>Review by: {{$review->user->name}}</small><br><br>
                                <form class="mb-2" onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('cancelled',$review->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection