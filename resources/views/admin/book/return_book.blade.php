@extends('admin.dashboard')

@section('content')
   <div class="container-fluid">
       <div class="row">
           <div class="col-md-12">
                        <table style="border: 5px solid gray" class="table table-striped table-responsive-sm table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>ISBN NO</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($returns)>0)
                            @foreach($returns as $return)
                                <tr>
                                    <td>{{$return->name}}</td>
                                    <td>{{$return->email_id}}</td>
                                    <td>{{$return->book_title}}</td>
                                    <td>{{$return->author}}</td>
                                    <td>{{$return->isbn_no}}</td>
                                    <td>{{$return->borrow_date}}</td>
                                    <td>{{$return->due_date}}</td>
                                    {{-- <td>
                                        @if($review->approve == true)
                                            <span class="badge bg-blue">Approved</span>
                                        @else
                                            <span class="badge bg-pink">Pending</span>
                                        @endif
                                    </td> --}}
                                    <td>
                                        
                                        {{-- <a href="{{route('postReviews.edit',$review->id)}}" class="btn btn-info">Edit</a> --}}
                                        {{-- <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('cancelled',$review->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            {{-- @method('delete') --}}
                                           {{-- <input type="checkbox" class="form-control"> --}}
                                        {{-- </form> --}} 

                                        <form action="{{route('return')}}" method="POST">
                                            @csrf
                                            <div class="form-group form-check">
                                                  <input name="return_book" <?php if($return->return_book == 1){echo "checked";}?> class="form-check-input" type="checkbox" >
                                                  <input type="hidden" name="postId" value="{{$return->id}}">
                                                  <input type="submit" class="btn btn-info btn-sm" value="Submit">
                                              </div>
                                        </form>

                                     </td>

                                     <td>
                                        <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('deleteReturn',$return->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                     </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>

                        </table>
                       </div>
           </div>
   </div>
@endsection