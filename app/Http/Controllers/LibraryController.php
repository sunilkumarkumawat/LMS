<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Student;

Class LibraryController extends Controller

{

    public function cabin(){
        return view('librarycabin.cabin');
    }

    public function locker(){
        return view('librarycabin.locker');
    }

   public function billadd()
{ 
    $students = Student::select('id', 'student_name')->get(); // Fetch id and name of all students

    return view('librarycabin.billing', compact('students')); // Pass data to blade
}

   public function subscription(){
    return view('librarycabin.subscription');
   }

   public function duefees(){
    return view('librarycabin.due');
   }

   public function wallet(){
    return view('librarycabin.wallet');
   }

   public function walletlist(){
    return view('librarycabin.walletlist');
   }

   public function print(){
    return view('printfiles.print');
   }
}