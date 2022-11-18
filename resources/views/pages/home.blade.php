@extends('../layouts/main')

@section('title')
    Home
@endsection

@section('content')
<div class="flex flex-col gap-10 py-10">
    <div class="container">
        <section id="category" class="border rounded-lg border-gray-200 p-5">
            <p class="text-xl font-bold mb-5">Kategori Pilihan</p>
            <div class="flex gap-10">
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[160px] w-full">
                        <!-- <img src="{{ Vite::asset('resources/images/cover-barang.png') }}" alt="" class="w-full h-full"> -->
                    </div>
                    <p class="text-base font-regular">Elektronik</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[160px] w-full">
                        <!-- <img src="{{ Vite::asset('resources/images/cover-jasa.png') }}" alt="" class="w-full h-full"> -->
                    </div>
                    <p class="text-base font-regular">Jasa</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[160px] w-full">
                        <!-- <img src="{{ Vite::asset('resources/images/cover-tempat.png') }}" alt="" class="w-full h-full"> -->
                    </div>
                    <p class="text-base font-regular">Tempat</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[160px] w-full">
                        <!-- <img src="{{ Vite::asset('resources/images/cover-kendaraan.png') }}" alt="" class="w-full h-full"> -->
                    </div>
                    <p class="text-base font-regular">Usaha</p>
                </div>
                <div class="flex flex-col items-center gap-4 w-full">
                    <div class="rounded-lg bg-gray-200 h-[160px] w-full">
                        <!-- <img src="{{ Vite::asset('resources/images/cover-kendaraan.png') }}" alt="" class="w-full h-full"> -->
                    </div>
                    <p class="text-base font-regular">Kendaraan</p>
                </div>
            </div>
        </section>
    </div>

    <div class="flex gap-10 container">
        <div class="rounded-lg bg-gray-200 w-3/5 h-[332px]"></div>
        <div class="flex flex-col gap-5 w-2/5">
            <div class="rounded-lg bg-gray-200 w-full h-full"></div>
            <div class="rounded-lg bg-gray-200 w-full h-full"></div>
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
                <p class="text-xl font-semibold">Produk Terlaris</p>
                <p class="text-sm text-center">Lorem ipsum dolor sit amet consectetur.</p>
            </div>
            <p class="text-md font-medium text-primary-500">Lihat Semua</p>
        </div>

        <div class="grid grid-cols-4 gap-x-4 gap-y-8">
            @for($i=0; $i<8; $i++)
            @component('components/card')
            @endcomponent
            @endfor
        </div>
    </div>

    <!-- BANNER -->
    <div class="container rounded-lg bg-gray-200 w-full h-[250px]">

    </div>
    <!-- END BANNER -->

    <!-- <div class="container flex flex-col gap-5 p-8 border border-gray-200 rounded-lg">
        <div class="flex justify-between items-center">
            <p class="text-xl font-bold">Kamera</p>
            <a href="#" class="text-md font-medium text-primary-500">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-4 gap-4">
            @for($i=0; $i<4; $i++)
                @include('../components/card')
            @endfor
        </div>
    </div> -->
    @component('components/section-card')
        Kamera
    @endcomponent

    @component('components/section-card')
        Laptop
    @endcomponent

    @component('components/footer')
    @endcomponent
</div>
@endsection
