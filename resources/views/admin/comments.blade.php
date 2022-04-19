@extends('inc.admin.sidebar')

@section('content')
            <h4 class="mb-3">Comment from user</h4>
                @foreach($dashs as $dash)
                <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>{{$dash->message}}</p>
                        <small><a href="{{url('show_comment',$dash->id)}}" style="font-size: 10px" class="btn btn-info">view</a><br><br></small> 
                    </div>  
               </div>         
            </div>                        
                @endforeach   
@endsection