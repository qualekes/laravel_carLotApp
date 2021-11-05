@extends('layouts.app')

@section('content')
          {{-- <strong>Database Connected: </strong>
<?php
    try {
        \DB::connection()->getPDO();
        echo \DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
?> --}}
<div class="">

    <div class="flex justify-center">
       
        <div class="w-8/12 mt-5 p-6 rounded-lg">
            <h1 class=" text-blue-500 text-4xl text-center	">Welcome To Mike's Car Lot</h1>
        </div>
    </div>
</div>
<div class="">

    <div class="flex justify-center">
       
        <div class="w-8/12 mt-2 p-2 rounded-lg">
            <h1 class="  text-2xl text-center	">Submit A Car</h1>
  
        </div>
    </div>
</div>

<div class="mb-8 pb-80">

    <div class="flex justify-center">
       
        <div class="w-8/12 mt-20 bg-blue-500 p-6  rounded-t-lg rounded-b-lg ">
            <div class=" text-2xl" >
            <form class="md:w-1/2 mx-auto" method="POST" action="/viewinventory">
                    @csrf
                <div class="flex items-center bg-blue-200 rounded-t-lg border-b border-blue-400">

                <label	class="w-20  text-blue-700 text-right mr-4" for="Vin">Vin</label>
                <input class="flex-1 bg-transparent outline-none  p-4 pl-0" id="Vin" name="Vin" type="text">
                </div>

                 <div class="flex items-center bg-blue-200 border-b border-blue-400">
                <label class="w-20 text-blue-700  text-right mr-8" for="Make">Make</label>
                <input class="flex-1 bg-transparent outline-none  p-4 pl-0" id="Make" name="Make" type="text">


                </div>

                 <div class="flex items-center bg-blue-200  border-b border-blue-400 ">
                <label class="w-20 text-blue-700  text-right mr-8" for="Model">Model</label>
                <input class="flex-1 bg-transparent outline-none  p-4 pl-0" id="Model" name="Model" type="text">


                </div>

                 <div class="flex items-center bg-blue-200  rounded-b-lg mb-10">
                <label class="w-20 text-blue-700  text-right mr-8" for="Color">Color</label>
                <input class="flex-1 bg-transparent outline-none   p-4 pl-0" id="Color" name="Color" type="text">


                </div>
                    <button type="submit" class="block w-full rounded bg-gray-100 py-3 text-blue-700 font-bold shadow">Submit</button>
            </form>
           </div> 
        </div>
    </div>
</div>
@endsection