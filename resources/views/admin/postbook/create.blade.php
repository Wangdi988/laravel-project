@extends('admin.dashboard')

@section('content')
    {{-- for parsly.js --}}
    <link rel="stylesheet" href="{{asset('form/form.css')}}">
	<script src="{{asset('form/jquery.js')}}"></script>
    <section class="section bg-howitworks">

        <div class="container-fluid">
       
            <div class="row">
                {{-- <div class="col-md-2">
     
                </div> --}}
                
                <div class="col-md-10 col-sm-12 offset-1 bg-color bg-white mt-4 mb-4"><br>
                     <form data-parsley-validate="" id="validate_form" action="{{route('postbook.store')}}" style="font-size: 15px;padding-left:15px; padding-right:15px; border: 15px solid rgb(132, 136, 138)" method="POST" enctype="multipart/form-data">
                         @csrf
                         <br>
                           <h4 class="text-center">Post Book Details</h4>
                         <div class="form-group"><br>
                             <label for="title"><b>Title:</b> </label>
                             <input type="text" class="form-control" id="title" placeholder="Title of book " name="title" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                             {{-- @error('title')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror --}}
                         </div>
     
                         <div class="form-group">
                             <label for="author"><b>Author:</b></label>
                             <input type="text" class="form-control" id="author" placeholder="Author" name="author" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                             {{-- @error('author')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror --}}
                         </div>
     
                         <div class="form-group">
                             <label for="isbn_no"><b>ISBN No:</b></label>
                             <input type="text" class="form-control" id="isbn_no" placeholder="ISBN No. of book" name="isbn_no" required data-parsley-pattern="[0-9-]+$" minlength="10">
                             {{-- @error('isbn_no')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror --}}
                         </div>
     
                          <div class="form-group">
                              <label class="form-label" for="cover_image"><b>Cover Image:</b></label>
                              <input type="file" class="form-control" id="cover_image" name="cover_image" required/>
                              {{-- @error('cover_image')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror --}}
                         </div>
     
                         <div class="form-group">
                             <label for="exampleFormControlSelect1"><b>Book Category</b></label>
                             <select class="form-control" id="category_id" name="category_id" required>
                               
                               @if(count($categories)>0)
                                  @foreach($categories->all() as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                               @endif
                             </select>
                             @error('category_id')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                         </div>
     
                         <button type="submit" class="btn btn-primary form-control text-center">Upload Book Detail</button><br><br>
                     </form><br>
                </div>
            </div>
        </div>
    </section>
@endsection