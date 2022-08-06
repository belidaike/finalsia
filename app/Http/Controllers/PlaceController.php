<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index() {
        $places = Place::with('delicacys')->get();

        return inertia('Place',[
            'places' => $places
        ]);
    }
}
