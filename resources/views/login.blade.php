@extends('layout.main')

@push('tittle')
<title>Login Pages</title>
@endpush

@section('main-section')
    <div class="container-fulid" id="bg-image">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 login-pages" >
                        <div class="col-12 login-head bg-head">
                            <h3 class="text-center">Login Pages</h3>
                        </div>
                            <br><br>
                              <div class="form-outline mb-4">
                                <input type="email" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">Email address</label>
                              </div>
                  
                              <div class="form-outline mb-4">
                                <input type="password" id="form2Example28" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example28">Password</label>
                              </div>
                  
                              <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="button">Login</button>
                              </div>
                  
                              <p class="small mb-5 pb-lg-2 "><a class="ff-hind" href="#!">Forgot password?</a></p>
                              <p class="text-center ff-hind">Don't have an account? <a href="{{url('/singup')}}" class="link-info ff-hind">Register here</a></p>
                  
                            </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
@endsection