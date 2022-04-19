@extends('inc.user.usersidenav')

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            {{-- To show thw messages  --}}
            @include('inc.message') 
        
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10 col-lg-12">

                                        <table class="table table-striped table-responsive-sm table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Author</th>
                                                    <th>ISBN No</th>
                                                    <th>Borrow Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                            
                                            @if(count($submits)>0)
                                            @foreach($submits as $review)
                                                @if(Auth::user()->id == $review->user_id)
                                                <tr>
                                                    <td>{{$review->book_title}}</td>
                                                    <td>{{$review->author}}</td>
                                                    <td>{{$review->isbn_no}}</td>
                                                    <td>{{$review->borrow_date}}</td>
                                                    <td>{{$review->due_date}}</td>
                                                    <td>
                                                        @if($review->return_book == true)
                                                            <span class="badge bg-blue">Submitted</span>
                                                        @else
                                                            <span class="badge bg-pink">Not Submitted</span>
                                                        @endif
                                                    </td>
                                                    @endif
                                                
                                                    {{-- <td>
                                                        @if(!Auth::guest())
                                                        @if(Auth::user()->id == $review->user_id)
                                                            <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postReviews.destroy',$review->id)}}" method="POST" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                            </form>
                                                        @endif
                                                    @endif
                                                    </td> --}}
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>

                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection