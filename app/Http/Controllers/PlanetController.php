<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Planet;
use App\Http\Resources\Planet as PlanetResource;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get Planets data
        $planets = Planet::all();

        // Return collection as a resource   
        return PlanetResource::collection($planets);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Planet date data
        $planet = Planet::findOrFail($id);
        
        return new PlanetResource($planet);
    }

    
}
