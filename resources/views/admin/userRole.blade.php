@extends('inc.admin.sidebar')

@section('content')

    <div class="container">
            <div class="row">
                <div class="card-body"><h2>Edit Users roles</h2></div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <form action="{{route('updateRole', $users->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{$users->name}}" class="form-control">
                          </div>
                        <div class="form-group">
                          <label for="usertype">Assign User Role:</label>
                          <select name="usertype" id="usertype" class="form-control">
                              <option value="admin">Admin</option>
                              <option value="">None</option>
                          </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" value="{{$users->email}}" class="form-control">
                          </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{('')}}" class="btn btn-secondary">Cancel</a>
                      </form>
                </div>
            </div>
    </div>
@endsection