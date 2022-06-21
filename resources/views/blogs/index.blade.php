<x-layout>
   
    <!-- preloader -->
    {{-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> --}}
    <x-nav />
    @if (session('success'))
    <p class="alert alert-success text-center">{{ session('success') }}</p>
@endif
    <x-home />
    <x-sponsor />
   <x-about />
   <x-blogs :blogs="$blogs" :randomBlogs="$randomBlogs"/>
   <x-services/>
   <x-contact/>
    <x-footer />  
</x-layout>


 