@extends('layouts.public')

@section('content')
      
      <div class="flex justify-between">
        <div class="basis-6/12 grid grid-cols-4 gap-2 m-2">
            @foreach ($product as $pro)
                <a href="{{route('addProductToTable',["id"=>$pro->id])}}">
                    <div class="border-2 text-center p-1">
                        <p>{{$pro->name}}</p>
                        <img src="{{asset('products/'.$pro->image.'')}}" class="w-24 h-24 text-center mx-auto">
                        <p class="bg-yellow-300 rounded w-10/12 mx-auto">{{$pro->price}}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="basis-5/12 m-2 ">
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-blue-300 dark:bg-gray-700 dark:text-gray-400">
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
                                
                            </th>
                            <th scope="col" class="px-6 py-3">
                                دانە
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="px-6 py-3">
                                کۆی گشتی
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($t_pro as $tab_pro)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$tab_pro->name}}
                                </th>
                                <td class="px-6 py-4">
                                    
                                </td>
                                <td class="px-6 py-4">
                                    {{$tab_pro->price}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('increaceNumberQuantity',["id"=>$tab_pro->id])}}" class="bg-yellow-300 rounded p-2"><i class="fa-solid fa-plus"></i></a>
                                </td>
                                <td class="px-6 py-4">
                                    {{$tab_pro->quantity}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('decreaceNumberQuantity',["id"=>$tab_pro->id])}}" class="bg-yellow-300 rounded p-2"><i class="fa-solid fa-minus"></i></a>
                                </td>
                                <td class="px-6 py-4">
                                    {{$tab_pro->totalprice}}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{route('deleteProductToTable',["id"=>$tab_pro->id])}}" class="bg-red-500 p-2 rounded text-white">سڕینەوە</a>
                                </td>
                            </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="absolute right-2 bottom-2 w-9/12 flex items-center space-x-2 rtl:space-x-reverse">
        <div class="flex w-4/12">
            <p class="bg-yellow-300 rounded p-2">ژمارەی پسوڵە</p>
            <p class="border-2  w-8/12">ewe</p>
        </div>
        <div class="flex w-4/12">
            <p class="bg-yellow-300 rounded p-2">ژمارەی مێز</p>
            <p class="border-2 w-8/12">fdfdf</p>
        </div>
        <div class="flex w-4/12">
            <p class="bg-yellow-300 rounded p-2">کۆی گشتی</p>
            <p class="border-2 flex items-center justify-center w-8/12">
                {{$total_price}}
            </p>   
        </div>
      </div>
@endsection