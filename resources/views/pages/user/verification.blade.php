@extends('../../layouts/dashboard-user')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-1">
            <p class="text-xl font-semibold">Alamat Saya</p>
            <p class="text-sm text-gray-500">Berikan alamat yang sesuai untuk memudahkan pengiriman</p>
        </div>

        <!-- divider -->
        <div class="flex items-center">
            <div class="bg-gray-300 h-px w-full"></div>
        </div>

        <div class="flex flex-col gap-4 w-[320px]">
            <div class="flex flex-col gap-2">
                <div class="flex justify-between">
                    <p class="text-md font-medium">Foto KTP</p>
                    <div class="flex justify-center gap-2">
                        <a href="#" class="text-sm text-primary-500">Lihat</a>
                        <div class="bg-gray-300 w-px h-4/5"></div>
                        <a href="#" class="text-sm text-error-500">Hapus</a>
                    </div>
                </div>
                <div class="bg-gray-300 rounded-lg w-full h-[150px]">
                    <img src="{{ asset('/images/ilustration-ktp.png') }}" alt="ktp-ilustration" class="w-full h-full">
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <p class="text-md font-medium">Selfie dengan KTP</p>
                <div class="bg-gray-300 rounded-lg w-full h-[150px]">
                    <img src="{{ asset('/images/bg-selfie.png') }}" alt="selfie-with-ktp" class="w-full h-full">
                </div>
            </div>
        </div>

    </div>
@endsection
