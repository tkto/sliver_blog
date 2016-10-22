@extends('main')
@section('content')

<div class="row">
  

</div>



<form action="{{route('posts.store')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="col-sm-offset-2 col-sm-8">
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="pwd">Body:</label>
    <input type="text" name="body" class="form-control" id="body">
  </div>
 <div class="form-group">
    <label for="pwd">Published at:</label>
    <input type="date" name="created_at" class="form-control" id="created_at">
  </div>
 
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection