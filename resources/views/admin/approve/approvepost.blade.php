@extends('admin.dashboard')
@section('content')
<div class="row">
    <div class="col-8">

    </div>
    <div class="col-4">
        @include('inc.message')
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-12">
        {{-- To approve by the admin  --}}
        @include('inc.message')
                        <div class="row">
                            <div class="col-md-10 col-lg-12">

                                    <table style="border: 5px solid gray" class="table table-striped table-responsive-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Author</th>
                                                <th>Status</th>
                                                <th>Approval</th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($reviews)>0)
                                        @foreach($reviews as $review)
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
                                                    
                                                    {{-- <a href="{{route('postReviews.edit',$review->id)}}" class="btn btn-info">Edit</a> --}}
                                                    {{-- <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('cancelled',$review->id)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        {{-- @method('delete') --}}
                                                       {{-- <input type="checkbox" class="form-control"> --}}
                                                    {{-- </form> --}} 

                                                    <form onsubmit="return confirm('Are you sure want to approve this post')" action="{{route('approval')}}" method="POST">
                                                        @csrf
                                                        <div class="form-group form-check">
                                                              <input name="approve" <?php if($review->approve == 1){echo "checked";}?> class="form-check-input" type="checkbox" >
                                                              <input type="hidden" name="postId" value="{{$review->id}}">
                                                            
                                                                <input type="submit" class="btn btn-info btn-sm" value="Approve">
                                                              
                                                          </div>
                                                    </form>

                                                 </td>

                                                 <td>
                                                    <form onsubmit="return confirm('Are you sure want to delete this record')" action="{{route('cancelled',$review->id)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                                    </form>
                                                 </td>

                                                <td>
                                                    <a href="{{route('view_post',$review->id)}}" class="btn btn-info btn-sm">view</a>
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
@endsection