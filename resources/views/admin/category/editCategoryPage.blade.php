@extends('admin.dashboard')

@section('content')
{{-- for parsly.js --}}
<link rel="stylesheet" href="{{asset('form/form.css')}}">
<script src="{{asset('form/jquery.js')}}"></script>
   <div class="container">
       <div class="row">
           <div class="col-md-2">

           </div>
           <div class="col-md-8 mt-5" style="border: 15px solid rgb(132, 136, 138)"><br>
               <h4>Edit Categories of Book</h4>
                <form data-parsley-validate="" id="validate_form" action="{{route('updatecategory', $category->id)}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="name" value="{{$category->name}}" name="name" required data-parsley-pattern="[a-zA-Z ]+$" minlength="3">
                    </div>

                    <button type="submit" class="btn btn-primary form-control text-center">Submit</button><br><br>
                </form>
           </div>
       </div>
   </div>
@endsection