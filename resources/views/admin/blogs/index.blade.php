<x-admin-layout>
    
    <h3 class="text-center">Blogs</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Intro</th>
                <th>Published Date</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($blogs as $blog)
            <tr>
                <th><a href="/blogs/{{ $blog->slug }}" target="_blank">{{ $blog->title }}</a></th>
                <td>{{ $blog->intro }}</td>
                <td>{{ $blog->created_at->format("F j,Y,g:i a") }}</td>
                <td><a href="/admin/blogs/{{ $blog->slug }}/edit" class="btn btn-warning" >Edit</a></td>
                <td>
                    <form action="/admin/blogs/{{ $blog->slug }}/delete" method="POST">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            @endforeach
            </tr>
        </tbody>
    </table>
    {{ $blogs->links() }}
</x-admin-layout>


