<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') - FYP</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"> 
  <script src="{{asset('jquery/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('css/Fyp_project_files/Form_Files.css')}}">
</head>
<body>
	<header>
		@include('Include.navbar')
	</header>

	@yield('content')

  <div>
    @include('Include.footer');
  </div>

<!-- all scripts are here -->
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>

</html>