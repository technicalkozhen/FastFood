<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fastfood</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body dir="rtl">
      <div class="flex items-center justify-between bg-blue-300 p-3">
        <div class="space-x-5 rtl:space-x-reverse">
            <a href="" class="bg-white p-1 rounded pb-2">تۆمارکردن</a>
            <a href="">چاپکردن</a>
            <a href="">سڕینەوەی پسوڵە</a>
            <a href="">ڕاپۆرتی ئەمڕۆ</a>
            <a href="">لیستی موادەکان</a>
            <a href="">باقی دانەوە</a>
        </div>
        <div>
            <i class="fa-solid fa-user text-xl"></i>
        </div>
      </div>
      <div class="flex items-center justify-between">
        <div class="basis-6/12 grid grid-cols-4 gap-2 m-2">
            <div class="border-2 text-center p-1">
                <p>پیزای مریشک</p>
                <img src="chicken pizza.jpg" class="w-24 h-24 text-center mx-auto">
                <p class="bg-yellow-300 rounded w-10/12 mx-auto">5000</p>
            </div>
            <div class="border-2 text-center p-1">
                <p>پیزای گۆشت</p>
                <img src="meat pizza.jpg" class="w-24 h-24 text-center mx-auto">
                <p class="bg-yellow-300 rounded w-10/12 mx-auto">6000</p>
            </div>
            <div class="border-2 text-center p-1">
                <p>شاورمەیی گۆشت</p>
                <img src="meat shawrma.jpg" class="w-24 h-24 text-center mx-auto">
                <p class="bg-yellow-300 rounded w-10/12 mx-auto">2000</p>
            </div>
            <div class="border-2 text-center p-1">
                <p>شاورمەیی مریشک</p>
                <img src="chiken shawrma.jpg" class="w-24 h-24 text-center mx-auto">
                <p class="bg-yellow-300 rounded w-10/12 mx-auto">1500</p>
            </div>
            <div class="border-2 text-center p-1">
                <p>بەرگری مریشک</p>
                <img src="chicken burger.jpg" class="w-24 h-24 text-center mx-auto">
                <p class="bg-yellow-300 rounded w-10/12 mx-auto">300</p>
            </div>
            <div class="border-2 text-center p-1">
                <p>بەرگری گۆشت</p>
                <img src="meat burger.png" class="w-24 h-24 text-center mx-auto">
                <p class="bg-yellow-300 rounded w-10/12 mx-auto">300</p>
            </div>
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
</body>
</html>