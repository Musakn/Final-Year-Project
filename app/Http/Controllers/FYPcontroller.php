<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FYPcontroller extends Controller
{
  public function Homepage()
  {

       	return view('Fyp_View_Folde.Index');
       }

       public function AboutUspage(){
              return view('Fyp_View_Folde.About');
       }
       
       public function DiseaseDiagnosespage(){
            return view('Fyp_View_Folde.Diagnoses');
       }

       public function Feedbackpage(){
       	return view('Fyp_View_Folde.Feedback');
       }

           public function Reportgrapicspage(){
           	return  view ('Fyp_View_Folde.Report_Graphics');
           }

           public function Signuppage(){
           	return view('Fyp_View_Folde.Signup');
           }

             public function Loginpage(){
              return view('Fyp_View_Folde.Login');
              }

              public function Agelmtpage(){

                return view('Fyp_View_Folde.Age');
              }
               public function Report(){
                 return view('Fyp_View_Folde.demo');
               }
}
