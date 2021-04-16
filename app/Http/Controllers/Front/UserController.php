<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    /*public function _construct()
    {

        $this->middleware('Authenticate');
    }*/
    public function nameusers(){
        return'rama olabi';
    }
    public function getindex()
    {
        return  view('welcome');

    }
    public function getdata()
    {
$data=[];
$data['name']='rmrom';
$data['id']=112233;

return view('welcome',$data);

    }

    public function getdata2()
    {
        $obj=  new \stdClass();
        $obj-> name='rama';
        $obj-> teach='ehsan';
        $obj-> univ='svu';

        $data=['rama','tasnem'];
        return view('welcome',compact('data'));
     //   return view('welcome',compact('obj'));



    }
}
