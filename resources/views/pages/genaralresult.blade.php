@extends('layout.main')
@section('main-section')
    <div class="container-fluid" id="bg-image">
        <div class="container body-content">
           <div class="row">
                    <div class="col-12">
                        <h3 class="text-center">Genarel Result</h3>
                    </div>
                    <div class="col-4">
                        <form action="" method="">
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
                    <div class="col-4">
                        <form action="" method="">
                            <label for="">Group/Diparment</label>
                            <select id="inputState" class="form-control">
                                <option selected>Genaral Result</option>
                                <option>Vocational Result</option>
                              </select>
                        </form>
                    </div>
                    <div class="col-4">
                        <form action="" method="">
                            <label for="inputZip">Roll</label>
                            <input type="numbr" class="form-control" id="">
                        </form>
                    </div>

           </div>
        </div>
    </div>
        
@endsection