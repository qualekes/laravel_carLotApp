<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\DB;


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
        $data = DB::table('cars')->paginate(25);
       
       return view('pages.viewinventory',['data' =>$data]);
    }
    

    public function delete_function($Vin){
            DB::delete('delete from cars where Vin = ?', [$Vin]);
             return redirect('viewinventory')->with('success','Data Deleted');

    }
    

  

   
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     // return Car::all();
       
    // //    return view('viewinventory', ['cars' => $data]);
    // }

  

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
