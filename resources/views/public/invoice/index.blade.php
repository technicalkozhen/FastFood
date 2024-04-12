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
                <th scope="col" class="px-6 py-3 ">
                    کردارەکان 
                </th>
               
        </thead>
        <tbody class="text-center">
            @foreach ($invoice as $invoices)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$invoices->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$invoices->user->name}}
                    </td>
                    <td class="px-6 py-4">
                        {{$invoices->created_at->format('Y-m-d')}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('showProductInvoice',['id'=>$invoices->id])}}"><i class="fa-solid fa-eye text-xl"></i></a>
                    </td>
                    <td class="px-6 py-4">
                        {{$invoices->total_price}}
                    </td>
                    <th scope="col" class="px-6 py-3 ">
                        <form id="form_alert" action="{{route('deleteInvoice',['id'=>$invoices->id])}}" method="get">
                            <button type="button" onclick="alert()"><i class="fa-solid fa-trash text-red-500 text-xl"></i></button>
                        </form>
                    </th>
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

<script>
    let alert=()=>{
    Swal.fire({
    title: 'دڵنیایت لە سڕینەوە ؟',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'بەڵێ',
    cancelButtonText: 'نەخێر'
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire(
        'سڕایەوە',
        'بەسەرکەوتووی سڕایەوە',
        'success'
        )
        document.getElementById('form_alert').submit();
    }
    })
            }
</script>


@endsection