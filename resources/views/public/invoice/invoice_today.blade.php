@extends('layouts.public')

@section('content')

<div class="relative mt-5">
    {{-- <a href="{{route('product.create')}}" class="bg-blue-300 p-1 pb-2 m-36 rounded">زیادکردن</a> --}}
    <table class="w-10/12 mx-auto text-sm rtl:text-right text-gray-500 dark:text-gray-400 mt-10 shadow-xl rounded-2xl overflow-hidden">
        <thead class="text-xs text-center text-gray-700 uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    پسوڵە
                </th>
                <th scope="col" class="px-6 py-3">
                    بەکارهێنەر
                </th>
                <th scope="col" class="px-6 py-3">
                    بەروار
                </th>
                <th scope="col" class="px-6 py-3">
                    بینینی بەرهەمەکان
                </th>
                <th scope="col" class="px-6 py-3 ">
                    کۆی گشتی
                </th>
               
        </thead>
        <tbody class="text-center">
            @foreach ($data as $datas)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$datas->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$datas->user->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$datas->created_at->format('Y-m-d')}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('showProduct',['id'=>$datas->id])}}"><i class="fa-solid fa-eye text-xl"></i></a>
                    </td>
                    <td class="px-6 py-4">
                        {{$datas->total_price}}
                    </td>
                </tr>   
            @endforeach
        </tbody>
    </table>
    <div class="w-10/12 mx-auto mt-5">
        <div class="flex mb-3">
            <p class="bg-blue-300 rounded p-2">ژ.پسوڵەکان</p>
            <p class="border-2 p-2 rounded text-lg w-2/12">{{$n_invoice}}</p>
        </div>
        <div class="flex mb-3">
            <p class="bg-blue-300 rounded p-2">کۆی گشتی</p>
            <p  class="border-2 p-2 rounded text-lg w-2/12">{{$t_price}}</p>
        </div>
    </div>
</div>



@endsection