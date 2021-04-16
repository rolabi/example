<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class FirstControoler extends Controller
{
    public function _construct()
    {

        $this->middleware('auth');
    }
        public function nameusers()
        {
            return 'rama olabi';
        }
    public function nameusers1()
    {
        return 'rama olabi1';
    }
    public function nameusers2()
    {
        return 'rama olabi2';
    }

}
