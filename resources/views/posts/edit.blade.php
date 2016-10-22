@extends('main')

@section('content')

<div class="row">
<div class=" col-sm-8">


<h3>Edit Blog Post</h3>
<form action="{{route('posts.update',$post->id)}}" method="PUT">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
  </div>
  <div class="form-group">
    <label for="pwd">Body:</label>
    <input type="text" name="body" class="form-control" id="body" value="{{$post->body}}">
  </div>

 
  <button type="submit" class="btn btn-default">Save Changes</button>
</form>

</div>
<div class=" col-sm-4">

<h3>Edit Blog Post</h3>
 <table class="table">
    <thead>
      <tr>
        <th>Created At</th>
     

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   
      <tr>
      
         <td>{{date('M j, Y h: ia', strtotime($post->created_at))}}</td>
         <td><a href="{{route('posts.show',$post->id)}}"><button type="button" class="btn btn-info">Cancel</button></a>


  <form action="{{route('posts.destroy',$post->id)}}" method="DELETE" class="form-inline">
                    <input type="hidden" name="_token"  value="{{ csrf_token() }}">

<button type="submit" class="btn btn-info">DELETE</button>



                 
                </form>

   

</td>

      </tr>
    
    </tbody>
  </table>

</div>



@endsection