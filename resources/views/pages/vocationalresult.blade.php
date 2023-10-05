@extends('layout.main')
@push('tittle')
  <title>Vocational Result Pages</title>
  @endpush
@section('main-section')
<div class="container-fluid" id="bg-image">
    <div class="container body-content">
       <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Vocational Result</h3>
                    <br><br>
                </div>
                <div class="col-md-4">
                    <form action="" method="" class="result-form">
                        <label for="">Select Class</label>
                        <select id="inputState" class="form-control">
                            <option selected>Six</option>
                            <option>Seven</option>
                            <option>Eight</option>
                            <option>Nine</option>
                            <option>Ten</option>
                          </select>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="" method="" class="result-form">
                        <label for="">Group/Diparment</label>
                        <select id="inputState" class="form-control">
                            <option >Genaral Result</option>
                            <option selected>Vocational Result</option>
                          </select>
                    </form>
                </div>
                <div class="col-md-4">
                    <form action="" method="" class="result-form">
                        <label for="inputZip">Roll</label>
                        <input type="numbr" class="form-control" id="">
                    </form>
                </div>
                <div class="col-12">
                    <div class="submit-button">
                        <a href="" class="btn btn-success">Submit</a>
                    </div>
                </div>
       </div>
    </div>
</div>
    
@endsection