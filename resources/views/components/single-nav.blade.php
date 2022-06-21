<!-- navBar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand smooth-scroll" href="#home">
        <img src="/contents/278919497_5182829561785521_8349739481671888978_n.png" alt="logo" width="100px" height="100px" class="img-responsive rounded-circle">
    </a>
    <button class="navbar-toggler js--mobile-nav-icon mobile-nav-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
    </button>
  
    <div class="collapse navbar-collapse js--main-nav justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto main-nav">
        <li class="nav-item">
         <a href="/" class="nav-link">Home</a>
        </li>
      </div>

          <ul>
          @if (!auth()->check())
          <a href="/register" class="nav-link btn btn-link btn-warning ml-2 text-dark d-inline" >Register</a>
          <a href="/login" class="nav-link btn btn-link btn-info ml-2 text-dark d-inline">Login</a>
          @else
          <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="profile"  width="50" height="50" class="rounded-circle  d-inline">
          <a href="/" class="btn btn-link nav-link btn-secondary text-light d-inline">{{ auth()->user()->name }}</a>
          <form action="/logout" method="POST" class="my-2 mx-5">
            @csrf
          <button class="btn btn-info text-dark  text-dark d-inline mx-5">Logout</button>
          </form>
          @endif
           
        </ul> 
  </nav>