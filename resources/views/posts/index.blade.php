@extends('main')

@section('content')
<h1>Articles</h1>




<table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Body</th>
         <th>Created At</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($all_post as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td>{{substr($post->body, 0, 100)}}{{strlen($post->body)>100 ? "...": ""}}</td>
         <td>{{$post->created_at}}</td>
         <td><a href="{{route('posts.edit',$post->id)}}"><button type="button" class="btn btn-info">Edit</button></a>


        <a href="{{route('posts.show',$post->id)}}"> <button type="button" class="btn btn-info">View</button></a>


        

</td>

      </tr>
      @endforeach
    </tbody>
  </table>










@endsection