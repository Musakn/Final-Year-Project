@extends('layout.app')
@section('Include.navbar')

@section('title','Feedback')
@section('content')
<div class="container" id="col">
            <h2><center><i>Dynamic Disease Diagnose</i></center></h2>
            <br><br>

           <h4>&nbsp&nbsp&nbsp&nbsp 0=poor  &nbsp&nbsp&nbsp&nbsp 1=Fair  &nbsp&nbsp&nbsp&nbsp 2=Satisfactory  &nbsp&nbsp&nbsp&nbsp 3=Good  &nbsp&nbsp&nbsp&nbsp 4=Excellent </h4>
           <br><br>
                   
<div> 	
	<H4>
			1)  &nbsp&nbsp&nbsp&nbsp  How much satisfied are with system.
		<br><br>
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2">&nbsp&nbsp&nbsp&nbsp 4 
		&nbsp&nbsp&nbsp&nbsp

		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp3
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp2
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp1
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp0
		<br><br>
	</H4>
		
		<h4>
			2)  &nbsp&nbsp&nbsp&nbsp  How much system is helpful  for you.
			<br><br>
			&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp4
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp3
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp2
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp1
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp0
		<br><br>
		</h4>	
    <h4> 3) &nbsp&nbsp&nbsp&nbspTo which level you are satisfied with diagnose result.
	<br><br>
	&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> 
		&nbsp&nbsp&nbsp&nbsp4
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2">&nbsp&nbsp&nbsp&nbsp 3
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp2
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp1
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp0
		<br><br>
	</h4>
		
		<h4>4)  &nbsp&nbsp&nbsp&nbsp  How much you are  satisfied  with  the list of sysptomes available.
			<br><br>
			&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2">&nbsp&nbsp&nbsp&nbsp4
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp3
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp2
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2">&nbsp&nbsp&nbsp&nbsp1
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2">&nbsp&nbsp&nbsp&nbsp 0
		<br><br></h4>

		<h4>
			5)  &nbsp&nbsp&nbsp&nbspAre you satisfied will age limit options provided at our sit.
			<br><br>
			&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2">&nbsp&nbsp&nbsp&nbsp4
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp3
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp2
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp1
		&nbsp&nbsp&nbsp&nbsp
		<input type="radio" name="Feedback2"> &nbsp&nbsp&nbsp&nbsp0
		<br><br>
		</h4>

		
</div>
       <div  class="form-group">
               <label for="inputsm">Any Comment</label>
                         <input type="text" id="AnyQuery"  class="form-control"  palceholder="Show Disease" name="ShowDisease" >   
                             </div>  

            <button type="button" class="btn btn-primary">Save</button>         
  </div>
  @endsection