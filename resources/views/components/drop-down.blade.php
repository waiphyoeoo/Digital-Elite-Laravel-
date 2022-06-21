
    <div class="dropdown show mb-3 text-center">
        <a class="btn btn-secondary dropdown-toggle"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ $currentCategory ? $currentCategory->name :'All'}}
        </a>
      
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/">All</a>
          @foreach ($categories as $category)
          <a class="dropdown-item" href="/?category={{ $category->slug }}{{ request('search')?'&search='.request('search'):'' }}{{ request('author')?'&author='.request('author'):'' }}">{{ $category->name }}</a>
          @endforeach
         
        </div>
      </div>