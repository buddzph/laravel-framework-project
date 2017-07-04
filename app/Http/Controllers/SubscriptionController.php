<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class SubscriptionController extends BaseController
{
    use ValidatesRequests;

    public function index(){
      return 123;
    }
}
