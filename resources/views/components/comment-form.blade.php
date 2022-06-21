@props(['blog'])
<section class="container">
    <div class="col-md-8 mx-auto">
        <x-card-wrapper>
            <form method="POST" action="/blogs/{{ $blog->slug }}/comments">
                @csrf
                <div class="mb-3">
                    <textarea required name="body" id="" class="form-control border border-0" cols="10" rows="5" placeholder="say something..."></textarea>
                    @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </x-card-wrapper>
    </div>
</section>