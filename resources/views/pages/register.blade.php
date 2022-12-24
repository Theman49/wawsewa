@extends('../layouts/main')

@section('content')
<div class="mt-20 mx-auto p-8 border border-gray-300 rounded-lg w-fit">
    <div class="flex flex-col gap-16 min-w-[340px]">
        <div class="flex flex-col gap-7">
            <div class="flex flex-col gap-10">
                <p class="text-xl font-medium text-center">Daftar Dulu Yuk</p>

                <div class="flex flex-col gap-8">
                    <div class="flex flex-col gap-1">
                        <label for="name" class="text-md">Nama Lengkap</label>
                        <input type="text" class="py-2 px-3 rounded border border-gray-300">
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="email" class="text-md">Email</label>
                        <input type="text" class="py-2 px-3 rounded border border-gray-300">
                    </div>
                    <div class="flex flex-col gap-1">
                        <label for="password" class="text-md">Kata Sandi</label>
                        <input type="text" class="py-2 px-3 rounded border border-gray-300">
                    </div>
                </div>

                <button class="py-3 px-2 text-md text-white bg-primary-500 rounded text-center">Daftar</button>
            </div>

            <div class="flex gap-2">
                <div class="flex items-center w-full">
                    <div class="bg-gray-300 h-px w-full"></div>
                </div>
                <p class="text-xs">atau</p>
                <div class="flex items-center w-full">
                    <div class="bg-gray-300 h-px w-full"></div>
                </div>
            </div>

            <div class="py-3 px-2 border border-gray-200 rounded hover:cursor-pointer">
                <div class="flex gap-2 items-center justify-center">
                    <img src="{{ asset('/images/google.png') }}" alt="google-logo" class="w-[20px] h-full">
                    <p class="text-md font-medium">Masuk dengan Google</p>
                </div>
            </div>
        </div>

        <p class="text-md text-center">Sudah punya akun? <a href="{{ env('APP_URL').'/login' }}" class="text-primary-500">Masuk</a></p>
    </div>
</div>
@endsection
