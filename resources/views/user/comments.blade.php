@extends('inc.user.usersidenav')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="{{route('commentstore')}}" method="POST">
                        @csrf
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Comment</label>
                            <textarea class="form-control" id="" rows="4"></textarea>
                          </div>
                          <button type="submit" class="form-control btn btn-info">Submit</button>
                        </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
@endsection