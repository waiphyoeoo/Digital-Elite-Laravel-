<section id="contact">
    <div class="content-box-lg contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Contact Form</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 contact-text">
                    <h5 class="text-center mb-5 mt-5">
                        Are you ready to <br> grow your business <br> by working with us?
                    </h5>
                    <img src="/contents/119-working.png" alt="photo" width="400px" height="400px">
                    <h5 class="text-center mt-5">Use this contact form <br> to start a convensation. <br> I'll reply to you <br> as soon as possible.</h5>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 my-3 shadow-sm">
                       <form action="/contact" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{ old('name') }}" placeholder="Please Your Enter Name" required>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="emailaddress" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailaddress" aria-describedby="email" name="email" value="{{ old('email') }}" placeholder="Please Your Enter emailaddress" required>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ph_number" class="form-label">Ph No.</label>
                            <input type="number" class="form-control" id="phnumber" aria-describedby="phnumber" name="ph_number" value="{{ old('ph_number') }}" placeholder="Please Your Enter Phone number" required>
                            @error('ph_number')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Leave me a message</label>
                           <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                            value="{{ old('message') }}" required placeholder="Project details"></textarea>
                           @error('message')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                        </div>
                        <button class="btn btn-info" type="submit">Contact Us</button>
                    </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </section>



