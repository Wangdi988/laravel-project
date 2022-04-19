@extends('public-layout.navbar')
@section('content')
<div class="bg-white">
   <div class="container">
       <br>
       <div class="row mb-4">
           <div class="col-md-12 col-lg-12">
                <form action="{{route('search')}}" method="get">
                    @csrf
                    <div class="input-group form-inline">
                        <input style="border-radius: 50px 0px 0px 50px" class="form-control shadow-sm" type="search" name="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            
                                <button style="border-radius: 0px 50px 50px 0px" class="btn btn-outline-success shadow-sm" type="submit">Search</button>
                
                          </div>
                    </div>
                </form>
           </div>
       </div>
    <div class="row">
                {{-- @if(isset($books)) --}}
                {{-- @foreach($books as $book)
                <div class="col-md-6 col-lg-6">
                    <div class="container">
                    <div class="row shadow-sm bg-white mb-3">
                        <div class="col-md-2 col-lg-2 mb-2 mt-2">
                            <img style="width:100%" src="{{ asset('storage/cover_image/' . $book->cover_image)}}"><br>
                        </div>
                        <div class="col-md-10 col-lg-10 mb-2 mt-2" style="padding-right: 3px">
                            <div class="">
                                <table>
                                    <tr>
                                        <th>Title: </th>
                                        <td>{{$book->title}}</td>
                                    </tr>
                                    <tr>
                                        <th>Author: </th>
                                        <td>{{$book->author}}</td>
                                    </tr>
                                    <tr>
                                        <th>ISBN No: </th>
                                        <td>{{$book->isbn_no}}</td>
                                    </tr>
                                </table>

                                {{-- <a href="{{route('postbook.show',$book->id)}}" class="btn btn-info">View</a> --}}
                            {{-- </div>
                            <br>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach --}} 
                @forelse($books as $book)
                    {{-- // result is found --}}
                    <div class="col-md-6 col-lg-6">
                        <div class="container">
                        <div class="row shadow-sm bg-white mb-3">
                            <div class="col-md-2 col-lg-2 mb-2 mt-2">
                                <img style="width:100%" src="{{ asset('storage/cover_image/' . $book->cover_image)}}"><br>
                            </div>
                            <div class="col-md-10 col-lg-10 mb-2 mt-2" style="padding-right: 3px">
                                <div class="">
                                    <table>
                                        <tr>
                                            <th>Title: </th>
                                            <td>{{$book->title}}</td>
                                        </tr>
                                        <tr>
                                            <th>Author: </th>
                                            <td>{{$book->author}}</td>
                                        </tr>
                                        <tr>
                                            <th>ISBN No: </th>
                                            <td>{{$book->isbn_no}}</td>
                                        </tr>
                                    </table>

                                    {{-- <a href="{{route('postbook.show',$book->id)}}" class="btn btn-info">View</a> --}}
                                </div>
                                <br>
                            </div>
                        </div>
                        </div>
                    </div>
                @empty
                {{-- // result is not found --}}
                    <h4>Not available</h4>
                @endforelse
                {!! $books->links() !!}
                {{-- @else
                {{$message}}
                @endif --}}
        </div>
   </div>
</div>
@endsection