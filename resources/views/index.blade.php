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
@endsection