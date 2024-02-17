<?php

namespace App\Http\Controllers\pages;
use App\Models\Monitoring;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MonitoringVehicles extends Controller
{
  public function index()
  {
    return view('content.pages.pages-monitoring-vehicles');
  }
  public function view()
    {
       // $user =Monitoring::latest()->paginate(5);
       // return view('content.pages.pages-monitoring-vehicles',compact('data'))->with('i', (request()->input('page',1)-1)*5); -
    }

}
