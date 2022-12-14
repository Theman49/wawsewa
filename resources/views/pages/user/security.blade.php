@extends('../../layouts/dashboard-user')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-1">
            <p class="text-xl font-semibold">Ubah Kata Sandi</p>
            <p class="text-sm text-gray-500">Gunakan kata sandi yang sulit untuk ditebak</p>
        </div>

        <!-- divider -->
        <div class="flex items-center">
            <div class="bg-gray-300 h-px w-full"></div>
        </div>

        <div class="flex flex-col gap-4 w-[428px]">
            <div class="flex flex-col gap-1">
                <label for="old-password" class="text-md">Kata Sandi Lama</label>
                <input type="text" class="py-2 px-3 rounded border border-gray-300">
            </div>
            <div class="flex flex-col gap-1">
                <label for="new-password" class="text-md">Kata Sandi Baru</label>
                <input type="text" class="py-2 px-3 rounded border border-gray-300">
            </div>
            <div class="flex flex-col gap-1">
                <label for="repeat-password" class="text-md">Ulangi Kata Sandi Baru</label>
                <input type="text" class="py-2 px-3 rounded border border-gray-300">
            </div>
            <button class="rounded bg-primary-500 py-3 px-8 text-sm font-medium text-white w-fit">Ubah Kata Sandi</button>
        </div>
    </div>
@endsection