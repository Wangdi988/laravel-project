@extends('inc.user.usersidenav')

@section('content')
<div class="row">
    <div class="col-md-8">
        @include('inc.message')
         <form data-parsley-validate="" id="validate_form" style="font-size: 15px;padding-left:15px; padding-right:15px; border: 15px solid rgb(132, 136, 138)" action="{{route('postReviews.store')}}" method="POST" enctype="multipart/form-data">
             @csrf 
             <br>
             <div class="form-group">
                <label for="isbn_no">ISBN No:</label>
                <input style="font-size: 12px" type="text" class="form-control" id="isbn_no" onkeyup="autofill()" placeholder="ISBN No. of book" name="isbn_no" required data-parsley-pattern="[0-9-]+$" minlength="10" maxlength="13">
                {{-- <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-triangle"></i>
                <small>
                    <p id="isbn">This field is required</p>
                </small> --}}
            </div>

             <div class="form-group">
                 <label for="title">Title: </label>
                 <input style="font-size: 12px" type="text" class="form-control" id="title" placeholder="Title of book " name="title" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                 {{-- <i class="fa fa-check-circle"></i>
                 <i class="fa fa-exclamation-triangle"></i>
                 <small><p id="user_name">This field is required</p></small> --}}

             </div>

             <div class="form-group">
                 <label for="author">Author</label>
                 <input style="font-size: 12px" type="text" class="form-control" id="author" placeholder="Author" name="author" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                 {{-- <i class="fa fa-check-circle"></i>
                 <i class="fa fa-exclamation-triangle"></i>
                 <small><p id="author_name">This field is required</p></small> --}}
             </div>

             <div class="form-group">
                <label for="summaryOfBook">Summary:</label>
                {{-- <input type="text" class="form-control" id="summaryOfBook" placeholder="Summary" name="summaryOfBook"> --}}
                {{-- <textarea style="font-size: 12px" name="summaryOfBook" id="ckeditor" class="form-control" placeholder="Summary" rows="15"></textarea> --}}
                <textarea style="font-size: 12px" name="summaryOfBook" id="summaryOfBook" class="form-control" placeholder="Summary" rows="15" required required data-parsley-length="[0, 3000]"></textarea>
                {{-- <i class="fa fa-check-circle"></i>
                 <i class="fa fa-exclamation-triangle"></i>
                 <small>
                     <p id="summary_name">This field is required</p> --}}
                 </small>
            </div>

            <div class="form-group">
                <label class="form-label" for="cover_image">Cover Image</label>
                <input type="file" class="form-control" id="cover_image" name="cover_image" required />
                {{-- <i class="fa fa-check-circle"></i>
                 <i class="fa fa-exclamation-triangle"></i>
                 <small>
                     <p id="cover">This field is required</p>
                 </small> --}}
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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
       function autofill(){
           $.ajax({
               url:"{{route('postReviews')}}",
               type:"podt",
               dataType:"json",
               data: {
                   _token: CSRF_TOKEN,
               }
           }).success(function(data){
               alert('aaa');
           });
       }
    </script> --}}
</div>

@endsection