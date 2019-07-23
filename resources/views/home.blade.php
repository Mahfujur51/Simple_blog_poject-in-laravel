@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <h2>Add A post</h2>
                  <form class="" action="{!!route('posts.store')!!}" method="post">
                    @csrf
                     <label for="">Enter Post Title</label>
                     <input type="text" name="title" value="" class="form-control">
                     <label for="">Enter Post Discription</label>
                     <textarea name="description" rows="8" class="form-control"></textarea>
                     <label for="">Select Category</label>
                     <select class="form-control" name="category_id">
                      @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>


                      @endforeach

                     </select>

                     <input type="submit" class="mt-2 btn btn-success" value="Published">
                  </form>
                </div>
            </div>
        </div>

        <div class="card card-body">
            @foreach($posts as $post)
            <div class="card card-body">
              <h3>{{$post->title}}in
                <mark>
                  <small>
                    <a href="{!!route('category',$category->id)!!}">{{$post->category->name}}</a>

                  </small>
            </mark></h3>
              <div>
                {!!$post->description!!}
              </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
