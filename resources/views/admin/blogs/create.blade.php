<x-admin-layout>
        <div class="container">
            <div class="row">
                    <div class="p-4 card  shadow-sm">
        <h3 class="text-center"> Blogs Create Form</h3>
        <form action="/admin/blogs/store" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name='title'/>
            <x-form.input name='slug'/>            
            <x-form.input name='intro'/>
            <x-form.textarea name='body' />
            <x-form.input name="thumbnail" type="file"/>
            <x-form.card-wrapper>
                <x-form.label name="category"/>
            <select name="category_id" id="category" class="form-control">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' :'' }}>{{ $category->name }}</option>
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