@extends('layouts.app')

@section('content')

  @if(\Session::has('success'))
  <div class="bg-red-500">
        <h4>{{ \Session::get('success') }}</h4>
  </div>
  @endif

<div class="flex justify-center">

    <div class="w-8/12 mt-5 p-6 rounded-lg">
        <h1 class=" text-blue-700 text-4xl text-center	">Our Inventory</h1>
    </div>
</div>
</div>
<div class="mb-20 pb-80">
    <div class="flex justify-center">
        <div class="w-8/12 mt-10 bg-white p-6 rounded-lg">
                <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                    <thead>
                    <tr class="bg-blue-300">
                        <td class="border text-center px-6 py-4">Vin</td>
                        <td class="border px-6 py-4" >Make</td>
                        <td class="border px-6 py-4">Model</td>
                        <td class="border px-6 py-4">Color</td>
                        <td class="border px-6 py-4">Delete</td>
                    </tr>
                    </thead>
                    @foreach($data as $item)
                        <tr>
                            <td class="border px-6 py-4">{{ $item->Vin }}</td>
                            <td class="border px-6 py-4">{{ $item->Make }} </td>
                            <td class="border px-6 py-4">{{ $item->Model }} </td>
                            <td class="border px-6 py-4">{{ $item->Color }}</td>
                            <td>
                                <a class="p-3 ml-6 text-white hover:bg-red-700 hover:text-black bg-red-500"   href="click_delete/{{ $item->Vin }}" >Delete</a>
                            </td>

                        </tr>

                            @endforeach

                </table>
                <div class="text-center">
                    {!! $data->links() !!}
                </div>
        </div>
    </div>
</div>
@endsection


          {{-- @foreach ($data as $item)
                <li>{{ $item->Color }} </li>

            @endforeach  --}}