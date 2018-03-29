@extends('layout.app')
@section('Include.navbar')
@section('title','Login')

@section('content')
  <div class="container" id="col">
     <div class="headinddiv"><center><h2> Login Here</h2></center></div>
       <div class="captiondiv"><center><i><h3>Dynamic Disease Diagnose</h3></i></center></div> 
         <form>
             <div  class="form-group  Textfiled">
                <div class="col-sm-4"><label for="inputsm">Username</label></div>
                <div class="input-group col-sm-6">
                  <span class="input-group-addon" id="filedsicon"><i class="glyphicon glyphicon-user"></i></span>
                   <input type="Email" id="Email"  class="form-control"  palceholder="Email" name="Eamil" >
                </div>
                </div>
                <div  class="form-group  Textfiled">
                  <div class="col-sm-4"><label for="inputsm">Password</label></div> 
                   <div class="input-group col-sm-6">
                   <span class="input-group-addon" id="filedsicon"><i class="glyphicon  glyphicon-lock" ></i></span>
                   <input type="Password" id="Email"  class="form-control"  palceholder="Password" name="Password" >
               </div>
            </div>
            <div class="col-sm-8">

                   <button type="button" class="btn btn-primary">Login</button>
            </div>
      </form>
    </div>

@endsection