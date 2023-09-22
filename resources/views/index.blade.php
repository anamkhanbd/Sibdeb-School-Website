@extends('layout.main')
@section('main-section')

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
                    <marquee>This time Website is Under The Mentanace Working Proccess. Thanks</marquee>
                  </div>
              </div>
          </div>

        
{{--Post Section Post About School and ReadMore Button Call Full post--}}
            <div class="container">
                <div class="row">
                    <div class="col-md-6" id="post-deatils">

                        <div class="blog-card">
                            <div class="meta">
                              <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
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
                    <div class="col-md-6" id="more-post">
                      <div class="blog-card">
                        <div class="meta">
                          <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
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
                          <h1>MD. Lal Mia </h1>
                          <h2>BSC Math / Head Tescher Of Inistittude</h2>
                          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                          <p class="read-more">
                            <a href="#">Read More</a>
                          </p>
                        </div>
                      </div>

                </div>
                    </div>
                </div>
            </div>

    {{--Importan Links and Notis Section Here --}}

    <div class="container" id="link-section">
      <div class="col-12 link-tittle">
        <h2 class="text-center">কিছু প্রয়োজনীয় লিংক</h2>
      </div>
      <div class="row">
        <div class="col-6" id="importan-link">
          <div class="list-group">
            <p class="list-group-item list-group-item-action active text-center">Educational</p>
            <a href="http://www.educationboardresults.gov.bd/" target="_blank" class="list-group-item list-group-item-action text-center">SSC Results</a>
            <a href="https://eboardresults.com/v2/home" target="_blank" class="list-group-item list-group-item-action text-center">Inistittude Results</a>
            <a href="https://teachers.gov.bd/" target="_blank" class="list-group-item list-group-item-action text-center">Sikkhok Batayon</a>
            <a href="https://bn.wikipedia.org/" target="_blank" class="list-group-item list-group-item-action  text-center">Bangla Wikipedia</a>
            <a href="https://dinajpureducationboard.gov.bd/" target="_blank" class="list-group-item list-group-item-action  text-center">Dinajpur Education Board</a>
          </div>
        </div>
        <div class="col-6" id="notice-board">
          <div class="list-group">
            <p class="list-group-item list-group-item-action active text-center">Students Hepl</p>
            <a href="http://nctb.gov.bd/" target="_blank" class="list-group-item list-group-item-action text-center">Ebook (NCTB)</a>
            <a href="https://www.quora.com/" target="_blank" class="list-group-item list-group-item-action text-center">Quora Ask and Answer</a>
            <a href="http://xiclassadmission.gov.bd/" target="_blank" class="list-group-item list-group-item-action text-center">Xi Class Admission </a>
            <a href="https://bteb.gov.bd/" target="_blank" class="list-group-item list-group-item-action  text-center">BM Vocational Education Board</a>
            <a href="https://moedu.gov.bd/" target="_blank" class="list-group-item list-group-item-action  text-center">Education Ministry</a>
          </div>
        </div>
      </div>
    </div>



@endsection