<x-layout>
    <x-nav/>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto ">
                <div class="p-4 card my-4 shadow-sm">
                    <h3 class="text-primary text-center">Login Form</h3>
                    <form method="POST" action="/login">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                            <x-error name='email'/>
                        </div>
                      
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <x-error name='password'/>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</x-layout>