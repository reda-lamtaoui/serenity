<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
   public function redirect(){
   	 if (Auth::check() && Auth::user()->hasRole('admin')) {
         return redirect('/dashboard2');
                 }else{
                    if (Auth::check() && Auth::user()->hasRole('client')) {
           return redirect('/profil_client');
                 }else{
                   return redirect('/profil_praticien');
                 }

                 }
   }
}
