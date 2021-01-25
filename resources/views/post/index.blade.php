@extends('layouts.app')

@section('content')
    <h1>POST</h1>
    <div class="d-flex justify-content-center">
        <form action="{{ route('posts') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" rows="3" name="body"></textarea>
            </div>
            @error('body')
                    <span style="red">{{ $message }}</span>
            @enderror
            <br>
            <button type="submit">Submit</button>
        </form>
        
    </div>

    <hr>

        @if($posts->count())
            @foreach($posts as $post) 
            <div>
                <a href="">{{ $post->user->name }}</a> <span>{{ $post->created_at->diffForHumans() }}</span>
                <div>
                @auth
                <ul class="list-inline">

                @if(!$post->likedBy(auth()->user()))
                <li class="list-inline-item">
                    <form action="{{ route('posts.likes',$post->id) }}" class="form-inline pull-right" method="post" role="form">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">Like</button>
                    </form>
                </li>
                @else
                <li class="list-inline-item">
                <form action="{{ route('posts.likes',$post->id) }}"  class="form-inline pull-right" method="post" role="form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-primary">Unlike</button>
                    </form>
                </li>
                @endif
            
            
        </ul>
        @endauth
               
                
                </div>

                @if($post->likes->count())
                <span>{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count()) }} </span>
                @endif
                
                <p>
                    {{ $post->body }}
                </p>

              
            </div>
            <hr>
            @endforeach

            {{ $posts->links() }}
        @else
            <p>NO POSTS HERE</p> 
        @endif
@endsection