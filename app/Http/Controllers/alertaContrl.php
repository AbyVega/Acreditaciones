<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class alertaContrl extends Controller {
   public function testfunction(){
       $name = Input::get('testname');
       if ($name=='Laravel'){
           echo "success";
           $notification = array(
               'message' => 'Successfully',
               'alert-type' => 'siccess'
           );
       }elseif ($name=='SIGECE'){
           echo "info";
       }elseif ($name=='SIGECE'){
           echo "warning";
       }else{
           echo "error";
       }
       return back()-> with($notification);
   }
}
