@extends('layouts.app')

@section('content')

  <div class="flex justify-center">
       
        <div class="w-8/12 mt-5 p-6 rounded-lg">
            <h1 class=" text-blue-700 text-4xl text-center	">Our Inventory</h1>
        </div>
    </div>
</div>
<div class="mb-20 pb-80">
    <div class="flex justify-center">
        <div class="w-8/12 mt-10 bg-white p-6 rounded-lg">
            <table>
                <td>VIN</td>
                <td>Make</td>
                <td>Model</td>
                <td>Color</td>
            </table>
        </div>
    </div>
</div>
@endsection