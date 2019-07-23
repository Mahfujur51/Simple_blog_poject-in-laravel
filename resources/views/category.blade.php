@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <h2>Category = {{$category->name}}</h2>
                  @foreach($category->posts as $post)
                  <div class="card card-body mt-2">
                    <h3>{{$post->title}}in <mark><small>{{$post->category->name}}</samall></mark></h3>

                  </div>
                  {!!$post->description!!}
                </div>
            </div>
        </div>


    </div>

</div>
@endsection
