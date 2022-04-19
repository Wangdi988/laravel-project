@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger mt-2">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success mt-2">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger mt-2">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session('error')}}
    </div>
@endif