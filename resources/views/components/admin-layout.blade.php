<x-layout>
    <x-single-nav/>

   <div class="container">
    <div class="row">
        <div class="col-md-2 ">
            <ul class="list-group">
                <li class="list-group-item"><a href="/admin/blogs">Blogs</a></li>
                <li class="list-group-item"><a href="/admin/blogs/create">DashBoard</a></li>
                <li class="list-group-item"><a href="/admin/blogs/contact">Contacts</a></li>
               
            </ul>
        </div>
        <div class="col-md-10 ">
              {{ $slot }}
         </div>
    </div>
   </div>
    <x-footer/>

</x-layout>