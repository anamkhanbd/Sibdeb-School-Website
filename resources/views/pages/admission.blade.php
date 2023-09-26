@extends('layout.main')
@section('main-section')
    <div class="container-fluid" id="bg-image">
        <div class="container body-content">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">ভর্তি ফর্ম </h1> <hr>
                </div>

                {{--Admission Form  Stard --}}
                <div class="col-12">
                   <div class="form-group alppy-form">
                     <label for="">বাংলা নাম </label>
                     <input type="text" name="" id="" class="form-control" placeholder="বাংলায় নাম লিখ " aria-describedby="helpId">

                     <label for="">ইংলিশ নাম </label>
                     <input type="text" name="" id="" class="form-control" placeholder="ইংলিশে নাম লিখ " aria-describedby="helpId">

                     <label for="">মোবাইল নাম্বার  </label>
                     <input type="number" name="" id="" class="form-control" placeholder="01750..... " aria-describedby="helpId">
                        
                     <div class="col-6">

                        <label for="">লিঙ্গ </label>
                        <div class="form-check form-check-inline">
                            <input style="width: 20px; margin-left:10px;" class="form-check-input gender" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label gender" for="inlineRadio1">ছেলে  </label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input style="width: 20px; margin-left:10px;" class="form-check-input gender" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label gender" for="inlineRadio2">মেয়ে </label>
                            </div>
                        </div>
                        

                        <div class="form-group col-md-4">
                            <label for="inputState">ভর্তি ইচ্ছুক ক্লাস </label>
                            <select id="inputState" class="form-control">
                              <option selected>SIX</option>
                              <option>SEVEN</option>
                              <option>EIGHT</option>
                              <option>NINE</option>
                            </select>
                          </div>
                   </div>
                          <label for="" style="margin-left:30%; font-size:larger; font-family:hind; ">ছবি সংযোজন করুন</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="es"  accept="image/png">
                            <label  class="custom-file-label fill-up " for="customFileLang">Seleccionar Archivo</label> <br>
                            <small id="helpId" style="margin-left:30%; ">ছবি হতে হবে .png সাইজ 300x150</small>
                          </div>
                </div>
                          <a href="{{url('/pages/erorr')}}" class="btn btn-success submit">Submit </a>
                   </div>
                </div>
            </div>
@endsection