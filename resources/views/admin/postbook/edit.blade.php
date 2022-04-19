@extends('admin.dashboard')

@section('content')
    {{-- for parsly.js --}}
    <link rel="stylesheet" href="{{asset('form/form.css')}}">
	<script src="{{asset('form/jquery.js')}}"></script>
    <section class="section bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div style="font-size: 15px;padding-left:15px; padding-right:15px; border: 6px solid rgb(132, 136, 138)">
                        <form class="mt-3 mb-3" data-parsley-validate="" id="validate_form" action="{{route('postbook.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title: </label>
                                <input type="text" class="form-control" id="title" value="{{$post->title}}" name="title"  required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                            </div>
        
                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" value="{{$post->author}}" name="author" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                            </div>
        
                            <div class="form-group">
                                <label for="isbn_no">ISBN No:</label>
                                <input type="number" class="form-control" id="isbn_no" value="{{$post->isbn_no}}" name="isbn_no" required data-parsley-pattern="[0-9-]+$">
                            </div>
        
                            <div class="form-group">
                                <label class="form-label" for="cover_image">Cover Image</label>
                                <input type="file" class="form-control" id="cover_image" value="{{$post->cover_image}}" name="cover_image"/>
                           </div>
        
                            <div class="form-group">
                                <label for="category_id">Select Category</label>
                                <select class="form-control" id="category_id" name="category_id" required>
                                  {{-- <option value="">Select</option> --}}
                                  @if(count($categories)>0)
                                     @foreach($categories->all() as $category)
                                         <option value="{{$category->id}}">{{$category->name}}</option>
                                     @endforeach
                                  @endif
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary form-control text-center">Submit</button>

                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="border: 6px solid gray; padding-left:7px">
                        <img class="d-block" src="{{asset('image/edit.jpg')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection