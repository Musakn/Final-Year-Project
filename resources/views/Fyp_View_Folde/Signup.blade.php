@extends('layout.app')
@section('Include.navbar')
@section('title','Signup')


@section('content')
  <div class="container" id="col">
     <div class="headinddiv"><center><i><h2>Signup Here</h2></i></center></div> 
           <div class="captiondiv"><center><i><h3>Dynamic Disease Diagnose</h3></i></center></div> 
      <form>

             <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">First Name</label></div>
               <div class="input-group col-sm-6">
                <span class="input-group-addon" id="filedsicon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" id="First_Name"  class="form-control"  palceholder="First_Name" name="First_Name" >
               </div>
            </div>
                  
                  <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Second Name</label></div>
               <div class="input-group col-sm-6">
                <span class="input-group-addon" id="filedsicon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" id="Second_Name"  class="form-control"  palceholder="Second_Name" name="Second_Name" >
               </div>
            </div>

            <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Email</label></div>
               <div class="input-group col-sm-6">
                <span class="input-group-addon" id="filedsicon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="Email" id="Email"  class="form-control"  palceholder="Email" name="Eamil" >
               </div>
            </div>

            <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Password</label></div>
               <div class="input-group col-sm-6">
                <span class="input-group-addon" id="filedsicon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="Password" id="Password"  class="form-control"  palceholder="Password" name="Password" >
               </div>
            </div>

            <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Confirm Password</label></div>
               <div class="input-group col-sm-6">
                <span class="input-group-addon" id="filedsicon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="Password" id="Confirm_Password"  class="form-control"  palceholder="Password" name="Password" >
               </div>
            </div>
<div class="col-sm-8">

                   <button type="button" class="btn btn-primary">Signup</button>
            </div>
      </form>
</div>
@endsection