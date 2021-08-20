<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HelperFunction\UserSystemInfoHelper;

class UserSystemInfoController extends Controller
{
    function getusersysteminfo()
    {
      $getip = UserSystemInfoHelper::get_ip();
      $getbrowser = UserSystemInfoHelper::get_browsers();
      $getdevice = UserSystemInfoHelper::get_device();
      $getos = UserSystemInfoHelper::get_os();
  
      echo "<center>$getip <br> $getdevice <br> $getbrowser <br> $getos</center>";
    }
}
