@extends('../../layouts/dashboard-user')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-1">
            <p class="text-xl font-semibold">Profil Saya</p>
            <p class="text-sm text-gray-500">Kelola informasi profil Anda untuk mengontrol, melindungi dan mengamankan aku</p>
        </div>

        <!-- divider -->
        <div class="flex items-center">
            <div class="bg-gray-300 h-px w-full"></div>
        </div>

        <div class="flex justify-between">
            <div class="flex flex-col gap-4 w-2/4">
                <div class="flex flex-col gap-4">
                    <p class="text-lg font-medium">Biodata Diri</p>

                    <div class="flex flex-col gap-3 w-full">
                        <div class="flex justify-between">
                            <p class="text-md">Nama</p>
                            <p class="text-md">Adhelia Putri Sari <a href="#" class="text-sm text-primary-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-md">Tanggal Lahir</p>
                            <p class="text-md">20 April 1998 <a href="#" class="text-sm text-primary-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-md">Jenis Kelamin</p>
                            <p class="text-md"><a href="#" class="text-md text-primary-500">Tambah Jenis Kelamin</a></p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-4">
                    <p class="text-lg font-medium">Kontak</p>

                    <div class="flex flex-col gap-3 w-full">
                        <div class="flex justify-between">
                            <p class="text-md">Email</p>
                            <p class="text-md">adheliaputri@gmail.com <a href="#" class="text-sm text-primary-500">Ubah</a></p>
                        </div>
                        <div class="flex justify-between">
                            <p class="text-md">Nomor Telepon</p>
                            <p class="text-md">08124813480 <a href="#" class="text-sm text-primary-500">Ubah</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex flex-col gap-3 rounded-lg border border-gray-300 p-4 items-center">
                <div class="bg-gray-300 w-[120px] h-[120px] rounded-full"></div>
                <button class="p-2 rounded border border-gray-300 text-xs text-center hover:cursor-pointer w-full">Pilih Gambar</button>
                <div class="flex flex-col gap-1">
                    <p class="text-xs">Ukuran gambar: maks. 1 MB</p>
                    <p class="text-xs">Format gambar: .JPEG, .PNG</p>
                </div>
            </div>
        </div>
    </div>
@endsection