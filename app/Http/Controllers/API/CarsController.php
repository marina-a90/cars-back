<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Car;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Car::create($request->validate([
            'brand' => 'string|required|min:2',
            'model' => 'string|required|min:2',
            'year' => 'integer|required',
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'integer|required|min:0|max:1',
            'engine' => 'string|required',
            'numberOfDoors' => 'integer|required|min:2|max:5'
        ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Car::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->validate([
            'brand' => 'string|required|min:2',
            'model' => 'string|required|min:2',
            'year' => 'integer|required',
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'integer|required|min:0|max:1',
            'engine' => 'string|required',
            'numberOfDoors' => 'integer|required|min:2|max:5'
        ]));
        return $car;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Car::destroy($id);
    }
}
