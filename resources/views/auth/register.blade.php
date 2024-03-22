<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body dir="rtl" class="bg-gray-500">
    <div class="bg-Emerald-200 w-3/12 rounded-lg p-3 text-white border-2">
        <div class="text-center">
            <i class="fa-solid fa-burger text-3xl"></i>
        </div>
        <form action="{{route('register')}}" method="post" class="space-y-4">
            @csrf
            <div>
                <p class="text-right">ناو</p>
                <input type="text" name="name" value="{{old('name')}}" class="border-b-2 bg-transparent focus:outline-none" placeholder="ناو">
                @error('name')
                    <p class="text-red-400 text-sm mx-1">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            <div class="">
                <p class="text-right">ئیمەیڵ</p>
                <input type="text" name="email" value="{{old('email')}}" class="border-b-2 bg-transparent focus:outline-none" placeholder="ئیمەیڵ">
                @error('email')
                    <p class="text-red-400 text-sm mx-1">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            <div class="">
                <p class="text-right">وشەی نهێنی</p>
                <input type="password" name="password" class="border-b-2 bg-transparent focus:outline-none" placeholder="********">
                @error('password')
                    <p class="text-red-400 text-sm mx-1">
                        <strong>{{ $message }}</strong>
                    </p>
                @enderror
            </div>
            <div class="">
                <p class="text-right">دوبارەکردنەوەی وشەی نهێنی</p>
                <input type="password" name="password_confirmation" class="border-b-2 bg-transparent focus:outline-none" placeholder="********">
            </div>
            <button class="bg-white text-black rounded p-2 ">تۆمارکردن</button>
        </form>
        <div class="text-left">
            <a href="{{route('login')}}" class="text-white border-b-2 py-1">چونەژورەوە</a>
        </div>

    </div>
    
    
</body>
</html>
    

