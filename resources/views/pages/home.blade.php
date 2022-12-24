@extends('../layouts/main')

@section('title')
    Home
@endsection

@section('content')
<div class="flex flex-col gap-10">
    <div class="container">
        <section id="category" class="border rounded-lg border-gray-200 p-5">
            <p class="text-xl font-bold mb-5">Kategori Pilihan</p>
            <div class="flex gap-10">
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[120px] w-full">
                        <img src="{{ asset('/images/cover-barang.png') }}" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base font-regular">Elektronik</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[120px] w-full">
                        <img src="{{ asset('/images/cover-jasa.png') }}" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base font-regular">Jasa</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[120px] w-full">
                        <img src="{{ asset('/images/cover-tempat.png') }}" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base font-regular">Tempat</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[120px] w-full">
                        <img src="{{ asset('/images/cover-usaha.png') }}" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base font-regular">Usaha</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[120px] w-full">
                        <img src="{{ asset('/images/cover-kendaraan.png') }}" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base font-regular">Kendaraan</p>
                </div>
            </div>
        </section>
    </div>

    <div class="flex gap-10 container">
        <div class="rounded-lg bg-gray-200 w-3/5 h-[332px]">
            <img src="{{ asset('/images/home-advertisement-1.png') }}" alt="" class="w-full h-full">
        </div>
        <div class="flex flex-col gap-5 w-2/5">
            <div class="rounded-lg bg-gray-200 w-full h-full">
                <img src="{{ asset('/images/home-advertisement-2.png') }}" alt="" class="w-full h-full">
            </div>
            <div class="rounded-lg bg-gray-200 w-full h-full">
                <img src="{{ asset('/images/home-advertisement-3.png') }}" alt="" class="w-full h-full">
            </div>
        </div>
    </div>

    <!-- <div class="flex flex-col gap-5 container border rounded-lg border-gray-200 py-5 px-4">
        <div class="flex items-center justify-between">
            <p class="text-xl font-bold">Kategori</p>
            <a href="#" class="text-md font-regular text-primary-500">Semua Kategori</a>
        </div>
        <div class="grid grid-cols-9 gap-5">
            @for($i=0; $i<18; $i++)
            <div class="flex flex-col gap-2 w-fit text-center">
                <div class="bg-gray-200 rounded-lg h-[100px] w-[100px] mx-2.5"></div>
                <p class="text-base font-regular">elektronik</p>
            </div>
            @endfor
        </div>
    </div> -->

    <div class="container flex flex-col gap-5 p-8 border rounded-lg border-gray-200">
        <div class="rounded-lg bg-gray-200 w-full h-[250px]">

        </div>

        <div class="flex justify-between flex-start">
            <div>
                <p class="text-xl font-semibold">Dekat Dengan Kamu!</p>
                <p class="text-sm text-center text-gray-500">Tidak perlu jauh-jauh cari barang yang </p>
            </div>
            <a href="#" class="text-md font-medium text-primary-500">Lihat Semua</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-px gap-y-8 sm:gap-x-4 sm:gap-y-8">
            @for($i=0; $i<5; $i++)
            <x-card>
                <x-slot:image>
                    {{ $products[$i]['thumbnail'] }}
                </x-slot>
                <x-slot:altImage>
                    {{ $products[$i]['title'] }}
                </x-slot>
                <x-slot:title>
                    {{ $products[$i]['title'] }}
                </x-slot>
                <x-slot:price>
                    {{ $products[$i]['price'] }}
                </x-slot>
                <x-slot:rating>
                    {{ $products[$i]['rating'] }}
                </x-slot>
                <x-slot:reviewer>
                    {{ $products[$i]['stock'] }}
                </x-slot>
                <x-slot:rented>
                    {{ $products[$i]['id'] }}
                </x-slot>
                <x-slot:id>
                    {{ $products[$i]['id'] }}
                </x-slot>
            </x-card>
            @endfor
        </div>
    </div>

    <!-- BANNER -->
    <div class="container">
        <div class="rounded-lg bg-gray-200 w-full h-[250px]">
            <img src="{{ asset('/images/home-advertisement.png') }}" alt="" class="w-full h-full">
        </div>
    </div>
    <!-- END BANNER -->

    <x-section-card>
        <x-slot:heading>
            Smartphone
        </x-slot>
        <x-slot:category>
            smartphones
        </x-slot>
    </x-section-card>

    <x-section-card>
        <x-slot:heading>
            Laptop
        </x-slot>
        <x-slot:category>
            laptops
        </x-slot>
    </x-section-card>
</div>
@endsection
