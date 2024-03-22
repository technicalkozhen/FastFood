@extends('layouts.public')

@section('content')
      
      <div class="flex items-center justify-between">
        <div class="basis-6/12 grid grid-cols-4 gap-2 m-2">
            @foreach ($product as $pro)
                <div class="border-2 text-center p-1">
                    <p>{{$pro->name}}</p>
                    <img src="{{asset('products/'.$pro->image.'')}}" class="w-24 h-24 text-center mx-auto">
                    <p class="bg-yellow-300 rounded w-10/12 mx-auto">5000</p>
                </div>
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
                            </th><th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="px-6 py-3">
                                کۆی گشتی
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                <a href="" class="bg-yellow-300 rounded p-2"><i class="fa-solid fa-plus"></i></a>
                            </td><td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4">
                                <a href="" class="bg-yellow-300 rounded p-2"><i class="fa-solid fa-minus"></i></a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
      <div class="absolute right-2 bottom-2 flex items-center space-x-2 rtl:space-x-reverse">
        <div class="flex">
            <p class="bg-yellow-300 rounded p-2">ژمارەی پسوڵە</p>
            <input type="text" class="border-2">
        </div>
        <div class="flex">
            <p class="bg-yellow-300 rounded p-2">ژمارەی مێز</p>
            <input type="text" class="border-2">
        </div>
        <div class="flex">
            <p class="bg-yellow-300 rounded p-2">کۆی گشتی</p>
            <input type="text" class="border-2">
        </div>
      </div>
@endsection