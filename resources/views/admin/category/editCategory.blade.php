@extends('admin.dashboard')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8 mt-3" style="border: 8px solid rgb(132, 136, 138)">
                {{-- <form action="{{route('updatecategory', $category->id)}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" id="name" value="{{$category->name}}" name="name">
                    </div>

                    <button type="submit" class="btn btn-primary form-control text-center">Submit</button>
                </form> --}}

                @if(count($categories) > 0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($categories->all() as $category)
                            <tbody>
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td><a href="{{route('editcategorybook',$category->id)}}" class=""> <i class="fa fa-edit"></i></a></td>
                                </tr>
                                </tbody>
                            
                        @endforeach
                    </table>
                @endif
           </div>
       </div>
   </div>
@endsection