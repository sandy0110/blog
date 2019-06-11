<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
   //CarController.php
    public function create()
    {
        // return DB::connection('mongodb');
         $data['page']='update';    
         $data['id']=$id  = request()->id;
         $user_data = DB::table('cars')->where('_id', '=', $id)->get();
         $data['users'] =json_decode($user_data);
         if(empty($data['users']))
         {
            $data['page']='add';    
         }           
         return view('carcreate',$data);
    }
    public function store(Request $request)
    {
        $car = new Car();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price');        
        $car->save();
        return redirect('/show')->with('success', 'Car has been successfully added');
    }
    public function update(Request $request)
    {
        $id=$request->get('id');
        $car = car::where('_id' , '=' , $id)->first();
        $car->carcompany = $request->get('carcompany');
        $car->model = $request->get('model');
        $car->price = $request->get('price'); 
        $car->save();
        return redirect('/show')->with('success', 'Car has been successfully updated');
    }
    public function showList()
    {
        $cars=Car::all();
        return view('mongodata',compact('cars'));
    }
    public function destroy()
    {
        $id  = request()->id;
        $res=car::where('_id',$id)->delete();
        $cars=Car::all();
        if($res)
        {
            return redirect('/show')->with('success', 'Car has been removed successfully');
        }else{
            return redirect('/show')->with('success', 'Unable to removed car');
        }
        
    }
}

