@extends('layout.app')
@section('Include.navbar')
@section('title','Disease Diagnoses')
@section('content')


<div class="container" id="col"> <!--  start of the container div -->
  <div class="headinddiv" class="col-sm-6"> <!-- start of the header div -->
     <center><i><h3>Dynamic Disease Diagnose</h3></i></center>
</div> <!-- End of the header div -->

      <form >    <!-- start of the  form -->
           <div class="captiondiv" class="col-sm-6"> <!-- start of the radio button div -->
         <a href=""><input type="radio"  name="EnterSymptoms" id="Entersymptom">   Select Enter Symptoms</a> 
              <a href="{{action({{action('FYPcontroller@Agelmtpage')}})}}"><input type="radio"  name="EnterSymptoms" id="Enterage">   Select Enter Age Lamitt </a>
                   </div> <!-- end of the radio button div -->
          
              
        <div  class="form-group Textfiled"  > 
        <div class="col-sm-4"><label for="inputsm">Age To:</label></div>      
    <input list="browsers" name="browser">
  <datalist id="browsers">
    <option value="1">
    <option value="2">
    <option value="3">
    <option value="4">
    <option value="5">
  </datalist>
</div>


       <div  class="form-group Textfiled">
  <div class="col-sm-4"><label for="inputsm">Select symptoms:</label></div> 
   <input list="browsers" name="browser">
  <datalist id="browsers">
    <option value="1">
    <option value="2">
    <option value="3">
    <option value="4">
    <option value="5">
  </datalist>
</div>




<div  class="form-group Textfiled" >
  <div class="col-sm-4"><label for="inputsm">Select symptoms:</label></div> 
  <input list="browsers" name="browser">
  <datalist id="browsers">
    <option value="Tension headaches">
    <option value="Cluster headaches">
    <option value="Migraines">
    <option value="Hormone headaches">
    <option value="Caffeine headaches">
  </datalist>
</div>
           <div  class="form-group Textfiled">
            <div class="col-sm-4"><label for="inputsm">Show Details</label></div>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
  
            
            <div class="col-sm-8">

                   <button type="button" class="btn btn-primary">Next</button>
                   <button type="button" class="btn btn-primary">No</button>
            </div>
            

      </form>
  </div>
@endsection