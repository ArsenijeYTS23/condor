<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Usr;

class PiaController extends Controller
{
    function user($ipa){

     $file = file('http://pinkman.online/api/?api-key=123');
  $file =collect(json_decode($file[0], true)['data']);

  $user_transaction = collect($file)->where('user_id',$ipa)->values()->toArray();
    $usr=Usr::where('id',$ipa)->first()->toArray();
  // return  $usr=Usr::where('id',$ipa)->toSql();


  return view('pia',compact('user_transaction','usr'));

    }


   function country(){
       $user=Usr::get();
      $country= Country::get();
         $file = file('http://pinkman.online/api/?api-key=123');
       $file =collect(json_decode($file[0], true)['data']);

    foreach($country as $count)
    {
      $usr=$count->usr->pluck('id');
      $us_count[]=$file->whereIn('user_id',$usr)->values();
    }

    foreach($us_count as $count){
    $amount=   collect($count)->pluck('amount')->sum();

      $usc[]=[collect($count)->count(),$amount];
    }
  $country_data=  array_combine($country->pluck('name')->toArray(), $usc);

//return $usc;
  return view('country',compact('country_data'));

   }






}
