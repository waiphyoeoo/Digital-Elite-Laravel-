<x-admin-layout>
    
    <div class="container">
        <div class="row">
                <div class="p-4 card  shadow-sm">
    <h3 class="text-center"> Blogs Edit Form</h3>
    <form action="/admin/blogs/{{ $blog->slug }}/update" method="POST" enctype="multipart/form-data">
        @method("PATCH")
        @csrf
        <x-form.input name='title' value="{{ $blog->title }}"/>
        <x-form.input name='slug' value="{{ $blog->slug }}"/>            
        <x-form.input name='intro' value="{{ $blog->intro }}"/>
        <x-form.textarea name='body'  value="{{   $blog->body  }}"/>
        <x-form.input name="thumbnail" type="file"/>
        <img src="/storage/{{ $blog->thumbnail }}" alt="photo" width="200px" height="100px" class="img-responsive">
        <x-form.card-wrapper>
            <x-form.label name="category"/>
        <select name="category_id" id="category" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ $category->id == old('category_id',$blog->category->id) ? 'selected' :'' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        <x-error name='category_id'/>
    </x-form.card-wrapper>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
</div>
</div>
</x-admin-layout>