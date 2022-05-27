@extends('layouts.main')

@section('container') 
    <div class="content">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row align-items-center">
              <div class="col-lg-7 mb-5 mb-lg-0">
                <h3 class="mb-5">Send The Developer Message<br></h3>
                
              <form class="pr-5 mb-5" method="post" id="contactForm" name="contactForm" action="{{route('contact.store')}}">
                {{csrf_field()}}
                  <div class="row">
                    <div class="col-md-12 for`m-group">
                      <input type="text" class="form-control" name="name" id="inputname" placeholder=" Name">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" name="callname" id="inputname" placeholder=" Callname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="file" class="form-control" name="file" id="file" placeholder="Choose file">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <textarea class="form-control" id="message" cols="30" rows="7" placeholder=" Write your message" name="pesan"></textarea>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-5">
                        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                        <span class="submitting"></span>
                      </div>
                    </div>
              </form>

              </div>
              <div class="col-lg-4 ml-auto">
                <h3 class="mb-4">Let's talk about everything.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil deleniti itaque similique magni. Magni, laboriosam perferendis maxime!</p>
                <p><a href="/">Read more</a></p>
              </div>
            </div>
          </div>  
          </div>
          <div class="button-div"> 
            <button class="signup-button"><a href="{{route ('register')}}">Sign Up</a></button> 
            <button class="login-button"><a href="{{route ('login')}}">Login</a></button>
          </div>
        </div>
    </div>
@endsection







                      {{-- <p>Custom file:</p>
                  <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="customFile" name="filename">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div> --}}
      
{{-- <form method="post" action="{{route('contact.store')}}"> 
  {{csrf_field()}}

  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="name">
    <label for="inputname">Nama</label>
  </div>

  <div class="formZ`">
    <input type="email" class="form-control" id="inputemail" placeholder="Email" name="email">
    <label for="inputemail" class="form-label">Email</label>
  </div>

  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan Pesan Disini" id="floatingTextarea2 " style="height: 100px" name="pesan" ></textarea>
    <label for="floatingTextarea2">Pesan</label>
  </div>

  <button type="submit" class="btn btn-primary">Kirim</button>
</form> --}}



