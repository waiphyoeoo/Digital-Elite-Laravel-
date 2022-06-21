@props(['blogs','randomBlogs'])
<section id="blog" class="blog-section">
    <div class="content-box-lg blog">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Blog</h2>
            </div>
        </div>
        <!-- search -->
        <div class="row">
            <div class="col-md-12">
              <form action="/" method="GET">
                <div class="input-group d-flex justify-content-end">
                    <div class="form-outline">
                      @if (request('category'))
                      <input name="category"  type="hidden"class="form-control" value="{{ request('category') }}" />
                      @endif
                      @if (request('author'))
                      <input name="author"  type="hidden"  class="form-control" value="{{ request('author') }}" />
                      @endif
                      <input name="search" id="search-input" type="search" id="form1" class="form-control" placeholder="Search" value="{{ request('search') }}"/>
                    </div>
                    <button id="search-button" type="type" class="btn btn-primary ">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
              </form>
            </div>
        </div>
         <!-- blog post -->
         <div class="row blog-imgs">
          <!-- left post -->
          <div class="col-md-6">
            <h3>Trending</h3>
            @foreach ($randomBlogs as $blog)
            <img src="/storage/{{ $blog->thumbnail }}" alt="photo" width="300px" height="200px" class="img-responsive">
            <h5>{{ $blog->intro }}</h5>
        
            <a href="/blogs/{{ $blog->slug }}" class="text-center btn btn-link text-dark btn-primary">Read More ></a>
            @endforeach
        
        </div>
          <!-- right post -->
          <div class="col-md-6">
              <h3>Latest Posts</h3>
           <x-drop-down/>
           
              <div class="container">
                  @forelse ($blogs as $blog)
                  <x-blogs-card :blog="$blog"/>
                  @empty
                  <p class="text-center">Not Found Blogs</p>
                  @endforelse
              </div>
              {{ $blogs->links() }}

          </div>
      </div>
  </div>
  </div>
</section>