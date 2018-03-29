<!DOCTYPE html>
<html>
<head><title>
	Wellcome to Dynamic Disease Diagnose
</title> 
</head>
<body> 
    <nav class="navbar navbar-inverse" id="DDDnavbar">
    <div class="container-fluid">
      <div class="navbar-header"> 
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#DynamicDiseaseDiagnose">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>           
        </button>
        <a  class="navbar-brand" href="#">Dynamic Disease Diagnose</a>
      </div>
      <div class="collapse navbar-collapse" id="DynamicDiseaseDiagnose" >
        <ul class="nav navbar-nav" id="DDDnavbar">
        <li><a href="{{action('FYPcontroller@Homepage')}}">Home</a></li>
        <li><a href="{{action('FYPcontroller@DiseaseDiagnosespage')}}">Disease Diagnose</a></li>
        <li><a href="{{action('FYPcontroller@Feedbackpage')}}"> Feedback</a></li>
        <li><a href="{{action('FYPcontroller@Reportgrapicspage')}}">Report&Graphics</a></li>
        <li><a href="{{action('FYPcontroller@AboutUspage')}}">About Us</a></li>
      </ul>
     <ul class="nav navbar-nav navbar-right" id="DDDnavbar">
        <li><a href="{{action('FYPcontroller@Signuppage')}}"><span class="glyphicon glyphicon-user"></span>   Sign Up</a></li>
        <li><a href="{{action('FYPcontroller@Loginpage')}}"><span class="glyphicon glyphicon-log-in"></span>   Login</a></li>
      </ul>
      </div>    
    </div>
  </nav>
</body>
</html>