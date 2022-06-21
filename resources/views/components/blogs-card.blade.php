@props(['blog'])
<div class="row">
    <div class="col-md-3">
       <a href="/blogs/{{$blog->slug }}"> <img src="/storage/{{ $blog->thumbnail }}" alt="" width="100px" height="100px" class="img-responsive mb-2"></a>
    </div>
    <div class="col-md-9">
        <p class="blog-para ml-2 text-justify">{{ $blog->intro }}</p>
    </div>
</div>