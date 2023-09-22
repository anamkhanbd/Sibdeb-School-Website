<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/x-icon" href="{{url('fontend/images/logo-school.webp')}}">
    <title>{{url('/')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('fontend/css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
       <!--Starding Head section here : 
        []logo [] navbar []and links here-->

        <div class="container-fluid" id="header-top">
            <div class="row" id="header-padding">
                <div class="col-2">
                    <a href="{{url('/')}}">
                        <img src="{{url('fontend/images/logo-school.webp')}}" class="ml-auto rounded  d-block logo-img" alt="...">
                    </a>
                </div>
                <div class="col-6 header-text">
                    <h1>শিবদেব চর দ্বি মুখী উচ্চ বিদ্যালয়</h1>
                    <h4>স্থাপিতঃ ১৯৯৯ সাল <span>EIIN : 1010101</span> </h4> 
                </div>
                <div class="col-4">
                    <ul class="login-btn">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/singup">Sinup</a></li>
                    </ul>
                </div>
            </div>
        </div>


        {{--Navbar html start--}}
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar-manu">
          <button class="navbar-toggler" id="margine-left" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/pages/notice')}}">Notice</a>
              </li>

              {{--Dropdown button--}}

              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Administration
                </a>
                <div style="background: #179652" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('pages/headmaster')}}">Head Master</a>
                  <a class="dropdown-item" href="{{url('pages/managingbody')}}">Managing Body</a>
                  <a class="dropdown-item" href="{{url('pages/teacher')}}">Teachers</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Academic</a>
              </li>

               {{--Dropdown button--}}

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Rutine
                </a>
                <div style="background: #179652" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('pages/genaralrutine')}}">Genaral</a>
                  <a class="dropdown-item" href="{{url('pages/vocationalrutine')}}">Vocational</a>
                </div>
              </li>

               {{--Dropdown button--}}

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Result
                </a>
                <div style="background: #179652" class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{url('pages/genaralresult')}}">Genaral</a>
                  <a class="dropdown-item" href="{{url('pages/vocationalresult')}}">Vocational</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('pages/admission')}}">Admission</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('pages/payment')}}">Payment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('pages/newcarriculam')}}">New Currioulum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('pages/blogs')}}">Blogs</a>
              </li>
            </ul>
          </div>
        </nav>

        {{--End Navbar --}}

        


      
   