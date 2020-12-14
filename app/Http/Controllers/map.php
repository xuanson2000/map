<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\toado;
use App\mo;

class map extends Controller
{
    //

  public  function index(){

  	$mapss=toado::select('toaDoX','toaDoY','idMo')->get();
//   // dd($mapss);
//   	$students = array
//   	(
//   		array(22,9),
//   		array(25,8),
//   		array(18,5),
//   		array(17,10)
//   	);
//      foreach ($mapss as $maps ) {
     
//     // dd($maps->toaDoX);
//      }
// //test
    $idmos=toado::select('idMo')->distinct()->get();
    //dd($idmos);

// $string1='';
// $string2='';
//     foreach ($idmos as $idmoi) {

//       foreach ($mapss as $maps) {
            
//         if($maps->idMo==$idmoi->idMo)
//         {
//             $string2=$string2."[".$maps->toaDoX.",".$maps->toaDoY."],";

          
//         }  
         
//       }

//     //dd($string2);
     
//     }

//     $string1=$string1.$string2."+";


 //dd($string2);


    $array0=[];
     $d=0;
      $k=0;
        $t=1;
      
    foreach ($idmos as $idmoi) {

//dd($idmoi->idMo);

      $array=[];
      $string=[];
      $i=0;
      $j=0;
    
      foreach ($mapss as $maps) {

        if($maps->idMo==$idmoi->idMo)
        {
       // dd($idmoi->idMo);
          $array[$i][0]=$maps->toaDoX;
          $array[$i][1]=$maps->toaDoY;
          

          $i++;
         
        }
// dd($array);
       
      }

      $array0[$d][$k]=$array;
      $array0[$d][$t]=$idmoi->mo->ten;
      $d++;
      $k++;
       $t++;
      
    }


// foreach ($array0 as $key ) {
  
// }
 // dd($array0);

// $string_1='';
// $l = count($array0);

// for ($i=0; $i<=$l; $i++) {
// } 
//   $k = count($array0[$i]);
// for ($i=0; $i<=$l; $i++) {

//   dd($array0[$i][)










// foreach ($array0 as $key) {

//   foreach ($key as $key1) {
//     dd($key1[1][0]);
//      $string_1=$string_1."".$key1[0][1]."+";
  
//  }



// }
//  dd($string_1);
// dd($array0);


  // $array = [];
  //  $i=0;
  //  $j=1;
  // 	foreach ($mapss as $maps) {
  // 	 $array[$i][0]=$maps->toaDoX;
  //    $array[$i][1]=$maps->toaDoY;
  //    $i++;
  // 	}

  //  dd($array);
 

  return view ('map.index',['mapss'=>$mapss,'idmos'=>$idmos,'array0'=>$array0]);
  }


  

  public  function indexID(){

    $mapss=DB::table('toado')->select('toaDoX','toaDoY','idMo')->get();

    $idmos=DB::table('toado')->select('idMo')->distinct()->get();
    $mos=DB::table('mo')->get();

    $moary=[];

    $j=0;
    foreach ($mos as $mo) {



      $moary[$j][0]=$mo->id;
      $moary[$j][1]=$mo->ten;

      $j++;



    }




    $array=[];
    $i=0;

    foreach ($mapss as $maps) {

      foreach ($mos as $mo) {
        if( $maps->idMo ==$mo->id )
        {

         $array[$i][0]=$maps->toaDoX;
         $array[$i][1]=$maps->toaDoY;
         $array[$i][2]= "$mo->ten";

       }

     }

     $i++;

   }



   return view ('map.indexID',['mapss'=>$mapss,'idmos'=>$idmos,'array'=>$array,'moary'=>$moary]);
 }


}


