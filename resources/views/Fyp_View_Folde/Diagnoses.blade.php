@extends('layout.app')
@section('Include.navbar')

@section('title','Disease Diagnoses')

@section('content')
<script>

  $(document).ready(function(){
    $('#Textfiled').Show();

    $(document).ready(function(){
      $('#Enterage2').Hide();

    });

  });
$(document).ready(function(){
    $('#Entersymptom').click(function(){
        $('#Textfiled').fadeIn('fast');
    });

    $(document).ready(function(){
      $('#Entersymptom').click(function(){
        $('#Enterage2').fadeOut('fast');

      });

    });
});

      $(document).ready(function(){
    $("#Enterage").click(function(){
        $("#Textfiled").fadeOut('fast');
    });

    $(document).ready(function(){
      $('#Enterage').click(function(){
        $('#Enterage2').fadeIn('fast');
      });

    });
});
    
</script>

<div class="container" id="col"> <!--  start of the container div -->
   <div class="headinddiv" class="col-sm-6"> <!-- start of the header div -->
      <center><i><h3>Dynamic Disease Diagnose</h3></i></center>
  </div> <!-- End of the header div -->
 <form >    <!-- start of the  form -->
       <div  class="col-sm-12"> <!-- start of the radio button div -->
         <input type="radio"  name="EnterSymptoms" id="Entersymptom" style="padding-right: 0px;">    Enter Symptoms
            <input type="radio"  name="EnterSymptoms" id="Enterage" style="margin-left: 150px;">    Enter Age Limit 
        </div> <!-- end of the radio button div -->
        <br>
         
         <div id="Textfiled" style="margin-top: 20px;">
           <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Enter symptoms:</label></div>
               <div class="input-group col-sm-6">
            <input type="text" id="Entersymptoms:"  class="form-control"  palceholder="Enter symptoms:" name="Enter_symptoms:" >
               </div>
             </div>

       <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Enter symptoms:</label></div>
               <div class="input-group col-sm-6">
            <input type="text" id="Entersymptoms:"  class="form-control"  palceholder="Enter symptoms:" name="Enter_symptoms:" >
               </div>
             </div>



<div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Enter symptoms:</label></div>
               <div class="input-group col-sm-6">
            <input type="text" id="Entersymptoms:"  class="form-control"  palceholder="Enter symptoms:" name="Enter_symptoms:" >
               </div>
             </div>
           <div  class="form-group " id="Textfiled">
            <div class="col-sm-4"><label for="inputsm">Show Details</label></div>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
         </div> 
       
              
                  <div id="Enterage2" style="margin-top: 20px;" >
       <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Enter Age To:</label></div>
               <div class="input-group col-sm-6">
            <input type="text" id="Entersymptoms:"  class="form-control"  palceholder="Enter symptoms:" name="Enter_symptoms:" >
               </div>
             </div>
            <div  class="form-group  Textfiled">
               <div class="col-sm-4"><label for="inputsm">Enter Age From:</label></div>
               <div class="input-group col-sm-6">
            <input type="text" id="Entersymptoms:"  class="form-control"  palceholder="Enter symptoms:" name="Enter_symptoms:" >
               </div>
             </div>
           <div  class="form-group " id="Textfiled">
            <div class="col-sm-4"><label for="inputsm">Show Details</label></div>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
    </div>          
    <div class="col-sm-8">
      <button type="button" class="btn btn-primary">Cancel</button>
      <button type="button" class="btn btn-primary">Next</button>
    </div>            
      </form>
  </div>
@endsection