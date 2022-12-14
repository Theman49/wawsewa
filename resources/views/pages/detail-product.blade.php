@extends('../layouts/main')

@section('content')
<div class="flex flex-col gap-10">
    <div class="container flex gap-10">
        <div class="flex flex-col gap-8 w-full">
            <div class="flex flex-col gap-5">
                <div class="bg-gray-200 w-full h-[360px]">
                    <!-- <img src="#" alt="" class="w-full h-full"> -->
                </div>
                <div class="flex gap-6">
                    @for($i=0; $i<4; $i++)
                        <div class="bg-gray-200 w-[85px] h-[85px]">
                            <!-- <img src="#" alt="" class="w-full h-full"> -->
                        </div>
                    @endfor
                </div>
            </div>
            <!-- <div class="flex gap-3 pt-4 border-t border-gray-200">
                <div class="w-[60px] h-[60px] rounded-full bg-gray-200"></div>
                <div class="flex flex-col">
                    <p class="text-lg font-semibold">Persewaan Alat Camp</p>
                    <div class="flex gap-1 items-center">
                        <i class="material-icons-outlined">place</i>
                        <p class="text-sm text-gray-600">Tembalang, Semarang</p>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="flex flex-col gap-6 w-full">
            <div class="flex flex-col gap-2">
                <p class="text-xl font-semibold">Nama Produk</p>

                <div class="flex gap-2 items-center">
                    <div class="flex gap-2 items-center">
                        <p class="text-sm">4.0</p>
                        <div class="flex gap-1">
                            @for($i=0; $i<5; $i++)
                                <i class="material-icons-outlined text-md text-warning-500">star</i>
                            @endfor
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="h-1 w-1 bg-gray-600 rounded-full"></div>
                    </div>

                    <div class="flex gap-2">
                        <p class="text-sm">12</p>
                        <p class="text-sm text-gray-600">Penilaian</p>
                    </div>

                    <div class="flex items-center">
                        <div class="h-1 w-1 bg-gray-600 rounded-full"></div>
                    </div>

                    <div class="flex gap-2">
                        <p class="text-sm">18</p>
                        <p class="text-sm text-gray-600">Tersewa</p>
                    </div>
                </div>

                <div class="flex gap-2">
                    <p class="text-sm font-medium">Status: <span class="text-success-500">Tersedia</span></p>

                    <div class="flex items-center">
                        <div class="h-1 w-1 bg-gray-600 rounded-full"></div>
                    </div>

                    <p class="text-sm font-medium">Stok: <span class="text-success-500">64</span> buah</p>
                </div>
            </div>

            <p class="text-display-sm font-semibold text-primary-500">Rp 34.000<span class="text-xs font-medium text-black">/hari</span></p>

            <div class="flex flex-col gap-3">
                <div class="flex justify-between">
                    <a href="#" class="text-md font-medium text-primary-500 pb-1 border-b-2 border-primary-500">Deskripsi</a>
                    <a href="#" class="text-md text-gray-500 pb-1">Kebijakan Penyewa</a>
                    <a href="#" class="text-md text-gray-500 pb-1">Ulasan</a>
                    <a href="#" class="text-md text-gray-500 pb-1">Produk Lain</a>
                </div>

                <div class="flex flex-col gap-1">
                    <p class="text-sm">Lorem ipsum dolor sit amet consectetur. Id porttitor laoreet pharetra orci viverra eget tincidunt. Turpis morbi faucibus nibh suspendisse faucibus blandit arcu congue fermentum. Orci tincidunt volutpat tellus pellentesque nunc dictum in tellus. Nibh pulvinar ut leo in sed interdum. Tellus bibendum lectus diam sociis. Cursus maecenas etiam dolor facilisis cursus justo. Felis aliquam rhoncus cras netus quam nunc placerat. Natoque consequat nulla lorem vulputate. Id et mauris sed lectus pharetra. Porttitor lacus ullamcorper elementum pretium. Volutpat massa velit amet luctus sed viverra vehicula cursus. Nulla faucibus nunc praesent adipiscing tortor.Eget sit ultrices risus diam nunc amet et ut. Nibh a in mi ut varius tincidunt diam. Nunc massa etiam faucibus nulla. Vestibulum sed velit ultrices amet neque sit sed tincidunt. Et amet nunc condimentum lacus lacus non eget in. Luctus velit pharetra mi semper nam. Ipsum netus mauris pretium lorem nulla egestas odio scelerisque ut. Id odio scelerisque risus.</p>
                    <p class="text-sm font-semibold text-primary-500">Selengkapnya</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-5 border border-gray-300 rounded-lg p-4 w-full h-fit">
            <p class="text-lg font-medium">Sewa Barang</p>
            <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                    <div class="flex gap-4 items-center">
                        <p class="text-md font-medium">Periode Sewa</p>
                        <p class="bg-blue-light-500 text-white rounded py-1/2 px-2">2 hari</p>
                    </div>
                    <div class="flex items-center gap-2 rounded p-2 border border border-gray-200">
                        <div class="flex justify-between gap-4 w-[90%]">
                            <p class="text-sm text-center w-full hover:cursor-pointer">23/08/2022</p>
                            <!-- <input type="date" class="text-sm"> -->
                            <div class="flex items-center">
                                <div class="w-4 h-0.5 bg-black"></div>
                            </div>
                            <p class="text-sm text-center w-full hover:cursor-pointer">23/08/2022</p>
                            <!-- <input type="date" class="text-sm"> -->
                        </div>
                        <i class="material-icons-outlined text-primary-500">calendar_month</i>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <p class="text-md font-medium">Jumlah Barang</p>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center rounded border border-gray-200">
                            <p class="text-lg px-2 hover:cursor-pointer">-</p>
                            <div class="border-x-2 border-gray-200">
                                <p class="text-sm py-2 px-4">4</p>
                            </div>
                            <p class="text-lg px-2 hover:cursor-pointer">+</p>
                        </div>
                        <p class="text-sm">Stok: <span class="text-success-500">64</span> buah</p>
                    </div>
                </div>
                <!-- <div class="flex flex-col gap-1">
                    <p class="text-md font-medium">Pilih Opsi Pengiriman</p>
                    <div class="flex gap-4">
                        <div class="flex gap-1 items-center">
                            <input class="accent-primary-500" type="radio" id="sendiri" name="pengiriman" checked>
                            <label for="sendiri" class="text-sm">Ambil Sendiri</label>
                        </div>
                        <div class="flex gap-1 items-center">
                            <input class="accent-primary-500" type="radio" id="kurir" name="pengiriman">
                            <label for="kurir" class="text-sm">Jasa Pengiriman</label>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="flex flex-col gap-2">
                <p class="text-md font-medium">Alamat Rumah</p>
                <select name="" id="" class="p-2 rounded bg-transparent border border-gray-200 focus:outline-none">
                    <option value="">Rumah</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <p class="text-md font-medium">Jasa Pengiriman</p>
                <div class="flex gap-4">
                    <div class="rounded border border-primary-500 py-1 px-4">
                        <div class="w-[50px] h-8">
                            <img src="{{ Vite::asset('resources/images/gosend.png')}}" alt="" class="w-full h-full">
                        </div>
                    </div>
                    <div class="rounded border border-gray-200 py-1 px-4">
                        <div class="w-[50px] h-8">
                            <img src="{{ Vite::asset('resources/images/jne.png')}}" alt="" class="w-full h-full">
                        </div>
                    </div>
                    <div class="rounded border border-gray-200 py-1 px-4">
                        <div class="w-[50px] h-8">
                            <img src="{{ Vite::asset('resources/images/anteraja.png')}}" alt="" class="w-full h-full">
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="flex justify-between">
                <p class="text-sm text-gray-500">Subtotal</p>
                <p class="text-lg font-semibold">Rp 58.000</p>
            </div>

            <button class="text-md font-medium bg-primary-500 rounded p-3 text-center text-white focus:outline-none focus:translate-y-1" onclick="openModal('modal-rent-now')">Sewa Sekarang</button>

            <button class="text-md font-medium bg-white rounded p-3 text-center text-primary-500 border border-primary-500 focus:outline-none focus:translate-y-1">Tambah ke Keranjang</button>
        </div>
    </div>

    <x-section-card>
        <x-slot:heading>
            Produk Lain Dari Toko Ini
        </x-slot>
        <x-slot:border>
            no
        </x-slot>
    </x-section-card>

    <x-section-card>
        <x-slot:row>
            2
        </x-slot>
        <x-slot:heading>
            Produk Serupa
        </x-slot>
        <x-slot:border>
            no
        </x-slot>
    </x-section-card>

    <div id="modal-rent-now" class="w-screen h-screen fixed hidden top-0 left-0 bg-gray-500/[.8] overflow-auto">
        <div class="w-[480px] bg-white mx-auto my-3 rounded">
            <div class="flex flex-col gap-5 py-6 px-4">
                <div class="flex justify-between">
                    <p class="text-lg font-semibold">Ringkasan Belanja</p>
                    <i class="material-icons-outlined text-xl hover:cursor-pointer" onclick="closeModal('modal-rent-now')">close</i>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex gap-2">
                        <i class="material-icons-outlined text-md text-primary-500">place</i>
                        <p class="text-md font-medium">Alamat Pengiriman</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex flex-col gap-2 pl-8">
                            <div class="flex gap-2">
                                <p class="text-sm font-medium">Adhelia Putri Sari</p>
                                <p class="text-sm">(Rumah)</p>
                            </div>

                            <p class="text-sm text-gray-500">081233445566</p>

                            <div class="flex flex-col gap-1 text-sm text-gray-700">
                                <p>Banaran, Sekaran, Gunungpati, Semarang</p>
                                <p>Gunungpati, Kota Semarang, 50299</p>
                                <p>Note: Kost Rahasia</p>
                            </div>
                        </div>
                        <div>
                            <i class="material-icons-outlined text-md text-gray-700">chevron_right</i>
                        </div>
                    </div>
                </div>

                <div class="divider-horizontal bg-gray-300 h-px w-full"></div>

                <div class="flex gap-5 px-4">
                    <div class="h-[100px] w-[100px] rounded bg-gray-500">
                        <img src="" alt="">
                    </div>
                    <div class="flex flex-col">
                        <p class="text-md font-medium">Oculus Quest 2 Virtual Reality VR 64GB</p>
                        <p class="text-md font-semibold text-success-500">Rp 55.000</p>
                    </div>
                </div>

                <div class="divider-horizontal bg-gray-300 h-px w-full"></div>

                <div class="flex gap-24 px-4">
                    <div class="flex flex-col gap-2">
                        <p class="text-md font-medium">Periode Sewa</p>
                        <p class="text-sm">23/08/2022 - 25/08/2022</p>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-md font-medium">Total Pesanan</p>
                        <p class="text-sm">1 Barang</p>
                    </div>
                </div>

                <div class="divider-horizontal bg-gray-300 h-px w-full"></div>

                <div class="flex flex-col gap-4 px-4">
                    <div class="flex flex-col gap-2">
                        <p class="text-md font-medium">Pilih Opsi Pengiriman</p>
                        <div class="flex gap-4">
                            <div class="flex gap-1 items-center">
                                <input class="accent-primary-500" type="radio" id="sendiri" name="pengiriman" checked>
                                <label for="sendiri" class="text-sm">Ambil Sendiri</label>
                            </div>
                            <div class="flex gap-1 items-center">
                                <input class="accent-primary-500" type="radio" id="kurir" name="pengiriman">
                                <label for="kurir" class="text-sm">Jasa Pengiriman</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-md font-medium">Jasa Pengiriman</p>
                        <div class="flex gap-4">
                            <div class="rounded border border-primary-500 py-1 px-4 hover:border-primary-500 hover:cursor-pointer">
                                <div class="w-[50px] h-8">
                                    <img src="{{ Vite::asset('resources/images/gosend.png')}}" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="rounded border border-gray-200 py-1 px-4 hover:border-primary-500 hover:cursor-pointer">
                                <div class="w-[50px] h-8">
                                    <img src="{{ Vite::asset('resources/images/jne.png')}}" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="rounded border border-gray-200 py-1 px-4 hover:border-primary-500 hover:cursor-pointer">
                                <div class="w-[50px] h-8">
                                    <img src="{{ Vite::asset('resources/images/anteraja.png')}}" alt="" class="w-full h-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="divider-horizontal bg-gray-300 h-px w-full"></div>

                <div class="px-4">
                    <div class="flex align-items justify-between">
                        <p class="text-md font-semibold">Total</p>
                        <div class="flex align-items">
                            <p class="text-md font-semibold text-primary-500">Rp 58.000</p>
                            <i class="material-icons-outlined text-gray-700">expand_more</i>
                        </div>
                    </div>
                </div>

                <button class="text-md font-medium bg-primary-500 rounded p-3 text-center text-white focus:outline-none focus:translate-y-1">Sewa Sekarang</button>

            </div>
        </div>

    </div>

    <script>
        function openModal(id){ 
            const modal = document.getElementById(id)
            modal.classList.remove('hidden')
            console.log(modal.classList)
        }
        function closeModal(id){
            const modal = document.getElementById(id)
            modal.classList.add('hidden')
            console.log(modal.classList)
        }
    </script>
</div>


@endsection
