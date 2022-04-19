@extends('admin.dashboard')

@section('content')
   <div class="container">
    <link rel="stylesheet" href="{{asset('form/form.css')}}">
    <script src="{{asset('form/jquery.js')}}"></script>
       <div class="row">
         <div class="col-md-2"></div>
           <div class="col-md-8" style="border: 5px solid rgb(132, 136, 138)">
                    <div class="mb-5"><br>
                      <h4 class="text-center">lending Books</h4>
                        <b>user Id: </b>{{$bookUsers->id}}<br>
                        <b>Name: </b>{{$bookUsers->name}}<br>
                        <b>email: </b>{{$bookUsers->email}}<br><br>

                        {{-- <a href="{{route('postbook.edit',$post->id)}}" class="btn btn-info">Edit</a>

                        <form onsubmit="return confirm('Are you sure want to delete this post')" action="{{route('postbook.destroy',$post->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger float-right">Delete</button>
                        </form>

                        <p>Post In: {{$post->category->name}}</p> --}}

                        {{-- <form action="{{route('updateRole', $users->id)}}" method="POST"> --}}
                        <form data-parsley-validate="" id="validate_form" action="{{route('borrow_book')}}" method="POST">
                            @csrf
                           
                            <div class="form-group">
                              <label for="user_id">USER ID</label>
                              <select name="user_id" id="user_id" class="form-control">
                                  <option value="{{$bookUsers->id}}">{{$bookUsers->id}}</option>
                              </select>
                            </div>

                            <div class="form-group">
                                <label for="">USER NAME</label>
                                <select name="name" id="name" class="form-control">
                                    <option value="{{$bookUsers->name}}">{{$bookUsers->name}}</option>
                                </select>
                            </div>
                              
                            <div class="form-group">
                                <label for="email_id">Email address:</label>
                                <select name="email_id" id="email_id" class="form-control">
                                    <option value="{{$bookUsers->email}}">{{$bookUsers->email}}</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="book_title">Title of book</label>
                                <input type="text" name="book_title" class="form-control" placeholder="Title of Book"  required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                              </div>

                              <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" name="author" class="form-control" placeholder="Author of Book"  required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                              </div>

                              <div class="form-group">
                                <label for="isbn_no">ISBN No.</label>
                                <input type="text" name="isbn_no" class="form-control" placeholder="ISBN NO"  required data-parsley-pattern="[0-9-]+$" minlength="10" maxlength="13">
                              </div>

                              <div class="form-group">
                                <label for="borrow_date">Start Date</label>
                                <input type="date" name="borrow_date" class="form-control" placeholder="start Date" required data-parsley-pattern="[0-9-/]+$">
                              </div>

                              <div class="form-group">
                                <label for="due_date">Due Date</label>
                                <input type="date" name="due_date" class="form-control" placeholder="start Date" required data-parsley-pattern="[0-9-/]+$">
                              </div>

                            <button type="submit" class="btn btn-primary">submit</button>
                            {{-- <a href="{{('')}}" class="btn btn-secondary">Cancel</a>
                            <a href="{{('')}}" class="btn btn-secondary">View</a> --}}
                        </form>
                        
                    </div>
           </div>
       </div>
   </div>
@endsection