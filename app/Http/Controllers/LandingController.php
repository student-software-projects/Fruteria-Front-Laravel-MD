<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
   public function Inicio(){
      return view('Landing.Inicio');
   }
   public function Acerca_de(){
       return view('Landing.Acerca_de');
   }
   public function Domicilios(){
       return view('Landing.Domicilios');
   }
}
