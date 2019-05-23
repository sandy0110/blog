<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usertemp;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //Show report
     public function Show()
    {
        $id  = request()->id;
        $users = DB::table('usertemp')->where('id', '=', $id)->get();
        $data['user_data']=$users;
        $data['data']=Usertemp::All();
        return $data;//view('sample',$data);
    }
}
