<x-layout>

    <x-single-nav/>
    <div class="row">
        <x-card-wrapper class="col-md-6 mx-auto">
            <h1 class="text-center">{{ $blog->title }}</h1>
            <img src="/storage/{{ $blog->thumbnail }}" alt="" width="500px" height="500px" class="img-responsive mx-auto">
            <b class="text-center">Category name- <a href="/?category={{$blog->category->slug  }}">{{ $blog->category->name }}</a></b>
            <p class="text-center">Pulished at {{ $blog->created_at->diffForHumans() }}</p>
            <span class="text-center">author - <a href="/?author={{ $blog->author->username }}">{{$blog->author->name  }}</a></span>
            <p>{!! $blog->body !!}</p>
            @auth
            <form action="/blogs/{{ $blog->slug }}/like" method="POST" >
                @csrf
               @if (auth()->user()->isLiked($blog))
               <button class="btn btn-primary" type="submit"><span>{{ $blog->likers->count() }}</span> Liked</button>
        
               @else
               <button class="btn btn-primary" type="submit"><span>{{ $blog->likers->count() }}</span> Like</button>
        
               @endif
            </form>
            @endauth
            <div class="mt-2">
                <a class="btn btn-warning" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&src=sdkpreparse" target="_blank">Share</a>
        
            </div>
        
        </x-card-wrapper>
    </div>
    @auth
    <x-comment-form :blog="$blog"/>        
    @else
        <p class="text-center">Please <a href="/login">Login</a> and this blogs in dicussion</p>
    @endauth

    <section class="container">
    <div class="col-md-8 mx-auto">
        <h5 class="my-3 text-secondary">Comments({{ $comments->count() }})</h5>
        <!-- single comments card -->
         @foreach($comments as $comment)
        <x-single-comment :comment="$comment" />
        @endforeach 
    </div>
    {{ $comments->links() }}

</section>

    <div class="card shadow-sm">
    <x-youmaylike :ramdomBlog=$ramdomBlog/>
    </div> 
    <x-footer/>
</x-layout>