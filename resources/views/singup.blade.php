@extends('layout.main')

      @push('tittle')
      <title>Singup Pages</title>
      @endpush

@section('main-section')
<div class="container-fulid" id="bg-image">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 login-pages" >
                    <div class="col-12 login-head bg-head">
                        <h3 class="text-center ff-hind">Sing-up Pages</h3>
                    </div>
                        <br><br>
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" name="fname" id="form3Example1" class="form-control" />
                                  <label class="form-label ff-hind" for="form3Example1">First name</label>
                                </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" name="lname" id="form3Example2" class="form-control" />
                                  <label class="form-label ff-hind" for="form3Example2">Last name</label>
                                </div>
                              </div>
                            </div>
              
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="email" name="email" id="form3Example3" class="form-control" />
                              <label class="form-label ff-hind" for="form3Example3">Email address</label>
                            </div>
              
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                              <input type="password" name="password" id="form3Example4" class="form-control" />
                              <label class="form-label ff-hind" for="form3Example4">Password</label>
                            </div>

                            <!--Retype Password input -->
                            <div class="form-outline mb-4">
                              <input type="password" name="cpassword" id="form3Example4" class="form-control" />
                              <label class="form-label ff-hind" for="form3Example4">Confirm Password</label>
                            </div>
            
              
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4 ff-hind">
                              Sign up
                            </button>
                            <p class="text-center ff-hind">I have Account <span><a class="ff-hind" href="{{url('/login')}}">Login ?</a></span></p>
                          </form>
                          
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
@endsection