@extends('layout.main')

      @push('tittle')
      <title>Singup Pages</title>
      @endpush

@section('main-section')
<div class="container-fulid" id="login-main">
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 login-pages" >
                    <div class="col-12 login-head bg-head">
                        <h3 class="text-center">Sing-up Pages</h3>
                    </div>
                        <br><br>
                        <form>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example1" class="form-control" />
                                  <label class="form-label" for="form3Example1">First name</label>
                                </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example2" class="form-control" />
                                  <label class="form-label" for="form3Example2">Last name</label>
                                </div>
                              </div>
                            </div>
              
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="email" id="form3Example3" class="form-control" />
                              <label class="form-label" for="form3Example3">Email address</label>
                            </div>
              
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                              <input type="password" id="form3Example4" class="form-control" />
                              <label class="form-label" for="form3Example4">Password</label>
                            </div>
            
              
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                              Sign up
                            </button>
                          </form>
                          
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
@endsection