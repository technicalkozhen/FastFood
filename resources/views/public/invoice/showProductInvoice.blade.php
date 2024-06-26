@extends('layouts.public')
@section('content')
<div class="relative mt-5">
    {{-- <a href="{{route('product.create')}}" class="bg-blue-300 p-1 pb-2 m-36 rounded">زیادکردن</a> --}}
    <table class="w-10/12 mx-auto text-sm rtl:text-right text-gray-500 dark:text-gray-400 mt-10 shadow-xl rounded-2xl overflow-hidden">
        <thead class="text-xs text-center text-gray-700 uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ناوی مادە
                </th>
                <th scope="col" class="px-6 py-3">
                    کۆد
                </th>
                <th scope="col" class="px-6 py-3">
                    نرخ
                </th>
                <th scope="col" class="px-6 py-3">
                    دانە
                </th>
                <th scope="col" class="px-6 py-3 ">
                    وێنە
                </th>
               
        </thead>
        <tbody class="text-center">
            @foreach ($product as $pro)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$pro->products ?->name}}
                    </th>
                    <td class="px-6 py-4">
                        
                    </td>
                    <td class="px-6 py-4">
                        {{$pro->price}}
                    </td>
                    <td class="px-6 py-4">
                        {{$pro->quantity}}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center justify-center">
                            <img src="{{asset('products/'.$pro->products ?->image.'')}}" class="rounded h-12 w-12">
                        </div>
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
</div>
{!! $product->links() !!}
@endsection