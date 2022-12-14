@extends('../../layouts/dashboard-user')

@section('content')
    <div class="flex flex-col gap-4">
        <div class="flex justify-between">
            <div class="flex flex-col gap-1">
                <p class="text-xl font-semibold">Alamat Saya</p>
                <p class="text-sm text-gray-500">Berikan alamat yang sesuai untuk memudahkan pengiriman</p>
            </div>

            
            <div class="flex gap-2 justify-center items-center py-3 px-5 bg-primary-500 rounded">
                <i class="material-icons text-white">add</i>
                <p class="text-sm text-white">Tambah Alamat Baru</p>
            </div>
        </div>

        <!-- divider -->
        <div class="flex items-center">
            <div class="bg-gray-300 h-px w-full"></div>
        </div>

        @for($i=0;$i<2;$i++)
            @include('../../components/item-address')
        @endfor
    </div>
@endsection