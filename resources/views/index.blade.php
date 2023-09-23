@extends('layout.main')
@section('main-section')
          <div class="contailner-fluid" id="main-container">
                <div class="container">
                  <div class="row">
                    {{--Notice bar here--}}
                    <div class="col-12">
                            {{--Notice Board Scrool bar--}}
                                  <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-2" id="notice-selider-header">
                                          <div class="waviy">
                                              <span style="--i:1">N</span>
                                              <span style="--i:2">O</span>
                                              <span style="--i:3">T</span>
                                              <span style="--i:4">I</span>
                                              <span style="--i:5">C</span>
                                              <span style="--i:6">E</span>
                                            </div>  
                                  
                                        </div>
                                        <div class="col-10" id="notice-selider-line">
                                                      <div class="marquee">
                                                        <div class="marquee__content">
                                                          <ul class="list-inline">
                                                            <li>Website is mantanence </li>
                                                            <li>No Notice Update Now</li>
                                                            <li>No Notice Update Now</li>
                                                            <li>No Notice Update Now</li>
                                                            <li>No Notice Update Now</li>
                                                          </ul>
                                                        </div>
                                                      </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col-md-8">
                         {{--carousel Code Boostrap v-4 sudo code use three image selider [][][] automatic [][][]--}}
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                  <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img class="d-block w-100 selid-image"  src="{{url('fontend/images/one.jpg')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100 selid-image"  src="{{url('fontend/images/two.jpg')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                      <img class="d-block w-100 selid-image"  src="{{url('fontend/images/three.jpg')}}" alt="Third slide">
                                    </div>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                </div>
                <div class="col-md-4" id="notice-board">
                  <div class="col-12 quik-manu" ><h3 class="text-center">Quik Manu</h3></div>
                  <div class="row">
                    <div class="col-4 icon-bar">
                      <i class="fas fa-clock fa-spin"></i>
                        <p>Class Rutine</p>
                    </div>
                    <div class="col-4 icon-bar">
                      <i class="fas fa-clipboard-list fa-flip-horizontal"></i>
                      <p>Notice Board</p>
                    </div>
                    <div class="col-4 icon-bar">
                      <i class="fas fa-graduation-cap"></i>
                      <p>Student Login</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4 icon-bar">
                      <i class="fas fa-tasks"></i>
                        <p>Managment</p>
                    </div>
                    <div class="col-4 icon-bar">
                      <i class="fas fa-school"></i>
                      <p>About School</p>
                    </div>
                    <div class="col-4 icon-bar">
                      <i class="fas fa-id-card"></i>
                      <p>ID card Form</p>
                    </div>
                  </div>
                  <div class="row">                   
                    <div class="col-4 icon-bar">
                      <i class="fas fa-upload"></i>
                        <p>Project Submit</p>
                    </div>
                    <div class="col-4 icon-bar">
                      <i class="fas fa-user-alt"></i>
                      <p>New Profile</p>
                    </div>
                    <div class="col-4 icon-bar">
                      <i class="fas fa-photo-video"></i>
                      <p>Online Class</p>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          {{--Blogs Post here --}}
              <div class="container" style="margin-top: 25px">
                <div class="row">
                <div class="col-md-6">
                      {{--Post Section Post About School and ReadMore Button Call Full post--}}
                      <div class="blog-card">
                        <div class="meta">
                          <div class="photo" style="background-image: url({{url('fontend/images/school-photo.jpeg')}})"></div>
                          <ul class="details">
                            <li class="author"><a href="{{url('/login')}}">Admin</a></li>
                            <li class="date">Aug. 24, 2015</li>
                            <li class="tags">
                              <ul>
                                <li><a href="{{url('/pages/about')}}">About us</a></li>
                                <li><a href="{{url('/pages/blogs')}}">Blogs</a></li>
                                <li><a href="{{url('/pages/admission')}}">Admission</a></li>
                                <li><a href="{{url('/')}}">Go Back</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <div class="description">
                          <h1>Story Of  Our Inistitude :</h1>
                          <h2>Shibdeb BL High School</h2>
                          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                          <p class="read-more">
                            <a href="#">Read More</a>
                          </p>
                        </div>
                      </div>

                </div>
                <div class="col-md-6">
                  <div class="blog-card">
                    <div class="meta">
                      <div class="photo" style="background-image: url({{url('fontend/images/head-master.webp')}})"></div>
                      <ul class="details">
                        <li class="author"><a href="{{url('/login')}}">Admin</a></li>
                        <li class="date">Aug. 24, 2015</li>
                        <li class="tags">
                          <ul>
                            <li><a href="{{url('/pages/about')}}">About us</a></li>
                            <li><a href="{{url('/pages/blogs')}}">Blogs</a></li>
                            <li><a href="{{url('/pages/admission')}}">Admission</a></li>
                            <li><a href="{{url('/')}}">Go Back</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <div class="description">
                      <h1>Story Of  Our Inistitude :</h1>
                      <h2>Shibdeb BL High School</h2>
                      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                      <p class="read-more">
                        <a href="#">Read More</a>
                      </p>
                    </div>
                  </div>

            </div>
            
            {{--Caalender real time calender--}}
            <div class="container" style="margin-top: 25px">
              <div class="row">
                <div class="col-md-6">
                  <div class="col-12 d-md-none">
                    <h3 class="text-center">Canlender</h3>
                  </div>
                      <div class="wrapper">
                        <header>
                          <p class="current-date"></p>
                          <div class="icons">
                            <span id="prev" class="material-symbols-rounded"><i class="fas fa-chevron-left"></i></span>
                            <span id="next" class="material-symbols-rounded"><i class="fas fa-chevron-right"></i></span>
                          </div>
                        </header>
                        <div class="calendar">
                          <ul class="weeks">
                            <li>Sun</li>
                            <li>Mon</li>
                            <li>Tue</li>
                            <li>Wed</li>
                            <li>Thu</li>
                            <li>Fri</li>
                            <li>Sat</li>
                          </ul>
                          <ul class="days"></ul>
                        </div>
                      </div>
                </div>
                <div class="col-md-6"></div>
              </div>
            </div>

@endsection