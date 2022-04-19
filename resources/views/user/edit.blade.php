@extends('inc.user.usersidenav')

@section('content')
<div class="row">
    <div class="col-md-8">
        @include('inc.message')
         <form data-parsley-validate="" id="validate_form" style="font-size: 15px;padding-left:15px; padding-right:15px; border: 15px solid rgb(132, 136, 138)" action="{{route('postReviews.update',$review->id)}}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT') <br>
             <div class="form-group">
                 <label for="title">Title: </label>
                 <input type="text" class="form-control" id="title" value="{{$review->title}}" name="title" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
             </div>

             <div class="form-group">
                 <label for="author">Author</label>
                 <input type="text" class="form-control" id="author" value="{{$review->author}}" name="author" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
             </div>

             <div class="form-group">
                 <label for="isbn_no">ISBN No:</label>
                 <input type="text" class="form-control" id="isbn_no" value="{{$review->isbn_no}}" name="isbn_no" required data-parsley-pattern="[0-9-]+$">
             </div>

             <div class="form-group">
                <label for="summaryOfBook">Summary:</label>
                {{-- <input type="text" class="form-control" id="summaryOfBook" placeholder="Summary" name="summaryOfBook"> --}}
                <textarea name="summaryOfBook" id="summaryOfBook" class="form-control" rows="15" required required data-parsley-length="[0, 3000]">{{$review->summaryOfBook}}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label" for="cover_image">Cover Image</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image"/>
           </div>
              {{-- <div class="form-group">
                  <label class="form-label" for="cover_image">Cover Image</label>
                  <input type="file" class="form-control" id="cover_image" name="cover_image" />
             </div> --}}

             <button type="submit" class="btn btn-primary form-control text-center">Submit</button><br><br>
         </form>
    </div>
    <div class="col-md-4">
        <img id="reading_img" class="d-block w-100" src="{{asset('image/woman-typing.jpg')}}" alt="First slide">
    </div>
</div>
@endsection