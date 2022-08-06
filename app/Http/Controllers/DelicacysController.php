<?php

namespace App\Http\Controllers;

use App\Models\Delicacys;
use Illuminate\Http\Request;

class DelicacysController extends Controller
{
    public function index() {
        $delicacys = Delicacys::with('places')->get();

        return inertia('Delicacys',[
            'delicacys' => $delicacys
        ]);
    }
}
