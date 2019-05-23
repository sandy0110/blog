<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usertemp;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    // Master controller
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function User(Request $request)
    {   
        if($request->session()->has('login_user')==1)
        {
             $data['data']=Usertemp::All();
             return view('sample',$data);
        }else{
            return redirect('/');
        }
       
    }
    public function Store()
    {
        // return  request()->All();
        $id=request('id');
        if(!empty($id))
        {
            $data['first_name']=request('fname');
            $data['last_name']=request('lname');
            $data['age']=request('age');
            DB::table('usertemp')
            ->where('id', $id)
            ->update($data);
        }else{
             $user=new Usertemp();
             $user->first_name=request('fname');
             $user->last_name=request('lname');
             $user->age=request('age');
             $user->status=1;
             $user->save();
        }       
        return redirect('/sample');
    }
    public function Show()
    {
        $id  = request()->id;
        $users = DB::table('usertemp')->where('id', '=', $id)->get();
        $data['user_data']=$users;
        $data['data']=Usertemp::All();
        return view('sample',$data);
    }
    public function Update()
    {
        $id  = request()->id;
        if(request('action')=='disable')
        {
            $data['status']=0;
        }else{
            $data['status']=1;
        }        
        DB::table('usertemp')
        ->where('id', $id)
        ->update($data);
        return redirect('/sample');
    }
}
