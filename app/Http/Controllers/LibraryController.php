<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;


Class LibraryController extends Controller

{

    public function cabin(){
        return view('librarycabin.cabin');
    }

    public function locker(){
        return view('library_management.locker');
    }

    public function timeslot(){
        return view('library_management.timeslot');
    }

   public function billadd(){
    return view('librarycabin.billing');
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