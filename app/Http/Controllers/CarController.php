<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Car;


class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pages.submitcar');
    }

     public function submit()
    {
       return view('pages.submitcar');
    }
   public function about()
    {
       return view('pages.about');
 
    }
    
    public function viewinventory()
    {
       return view('pages.viewinventory');
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }

    function addData(Request $req) 
    {
        $car = new Car;
        $car->Vin=$req->Vin;
        $car->Make=$req->Make;
        $car->Model=$req->Model;
        $car->Color=$req->Color;
        $car->save();
        return redirect('viewinventory');
    }
}
