@extends('layout.app')
@section('Include.navbar')
@section('title','home')
@section('content')
<div class="clear"></div>
<div class="container-fluid">
  <div class="row" id="slide">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{asset('Images/Headaches2.png')}}" alt="headache" class="img-thumbnail" style="width:100%;height:80%;">
         <div class="carousel-caption">
           <h3>Dynamic Disease Diagnose</h3>
             <p>headache!</p>
         </div>
       </div>

       <div class="item">
        <img src="{{asset('Images/lung_cancer.jpg')}}" alt="Lung Cancer" class="img-thumbnail" style="width:100%;height:80%;">
         <div class="carousel-caption">
           <h3>Dynamic Disease Diagnose</h3>
             <p>Lung Cancer!</p>
         </div>
       </div>


       <div class="item">
        <img src="{{asset('Images/iStock_000005329238Small-678x381.jpg')}}" alt="Lung Cancer" class="img-thumbnail" style="width:100%;height:80%;">
         <div class="carousel-caption">
           <h3>Dynamic Disease Diagnose</h3>
             <p>Lung Cancer!</p>
         </div>
       </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12" style="margin-top: 20px;">
      <div class="well" id="headinddiv"><H1>Wellcome To Dynamic Disease Dia...</H1>
      </div>      
    </div>
  </div>
  <div class="row">

    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"><b>Dynamic Disease</b> </div>
        <div class="panel-body" style="text-align: justify;">
          This system is the dynamic website which will help the patients to check all information about disease in a single app instead of opening multiple static web pages. This project will help the users or patients to check the disease symptoms as well as diagnose disease to enter as per provided symptoms. Patient can enter age and find the diseases that are mostly occurred at that age limit. The patient will also enter age limit to find the diseases for example 25-30 etc.
        </div>
      </div>      
    </div>
  
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"> <b>Disease Graphic</b> </div>
        <div class="panel-body" style="text-align: justify;">
          Not Consider a Tummy Tuck?If you're a woman who is still planning to have children, then you may want to postpone a tummy tuck until you're through bearing children. Here's why: During surgery, your vertical muscles are tightened. Future pregnancies can separate these muscles children. Here's why: During surgery, your vertical muscles are tightened. Future pregnancies can separate these muscles
        </div>
      </div>      
    </div>

    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading"> <b>New Updates</b></div>
        <div class="panel-body" style="text-align: justify;">
          Not Consider a Tummy Tuck?If you're a woman who is still planning to have children, then you may want to postpone a tummy tuck until you're through bearing children. Here's why: During surgery, your vertical muscles are tightened. Future pregnancies can separate these muscles children. Here's why: During surgery, your vertical muscles are tightened. Future pregnancies can separate these muscles
        </div>
      </div>      
    </div>
  </div>
  <div>
    
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div id="SereachButton"><H3>Disease & Condition Index</H3></div>
      
        <div id="SereachButton"><h3>Search By Letter</h3></div>
        <div id="SereachButton">
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>A</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>B</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>C</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>D</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>E</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>F</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>G</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>H</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>I</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>J</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>K</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>L</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>M</b></button>
      
        </div>  
        <div id="SereachButton">   
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>N</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>O</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>P</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>Q</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>R</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>S</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>T</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>U</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>V</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>W</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>X</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>Y</b></button>
      <button type="button" class="btn btn-secondary" id="SereachButtonAlphabit"><b>Z</b></button>
        </div> 

        <div id="SereachButton">
      
        </div>       
    </div> 
  </div>


</div>      
@endsection

