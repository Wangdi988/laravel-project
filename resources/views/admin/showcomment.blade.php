@extends('inc.admin.sidebar')

@section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-12 mb-4 bg-white">
                    <a href="{{url('adminDashboard')}}" style="font-size: 25px; color:rgb(95, 77, 77)"><i class="fa fa-arrow-circle-left"></i></a>
                    <p>Name: {{$dash->name}}</p>
                    <p>Email: {{$dash->email}}</p>
                    <p>Message: {{$dash->message}}</p> 
                    <form onsubmit="return confirm('Are you sure want to delete this comment')" action="{{url('delete_comment',$dash->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" style="font-size: 10px" class="btn btn-danger">Delete</button>
                    </form>
                </div>                                 
        </div>
    </div>
@endsection