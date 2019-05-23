<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    // Master Model
    public function getData()
    {
        $data = App\Master::where('status', 1)
            //    ->orderBy('name', 'desc')
            //    ->take(10)
               ->get();
    }
}
