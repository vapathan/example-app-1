<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testJob()
    {
        for($i=1;$i<50; $i++){
            echo $i;
        }
        
        \App\Jobs\ProcessBookingJob::dispatch('Hello Vasim');

        for($i=50;$i<100; $i++){
            echo $i;
        }
       
    }
}
