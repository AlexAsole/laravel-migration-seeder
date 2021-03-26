<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actor;

class ApiController extends Controller
{
    public function showFirstActor()
    {
        // $actor = Actor::all(); per ottenere json di tutti gli attori
        $actor = Actor::orderBy('id', 'asc')->first();  //per ottenere json del primo attore
        return response()->json($actor);
    }
}
