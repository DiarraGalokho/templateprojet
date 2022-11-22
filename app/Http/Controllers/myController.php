<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function index()
    {
        $name="Diarra";
        $age=23;
        $tab=array('name' => 'Diarra', 'age' => 23);
        return view ('myview', $tab);
    }
}
