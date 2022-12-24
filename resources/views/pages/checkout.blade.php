@extends('../layouts/main')

@section('content')
    <div class="container flex flex-col md:flex-row gap-10 justify-between">
        <div class="flex flex-col gap-5 p-4 rounded-lg border border-gray-300 w-full md:w-4/6">
            <p class="text-xl font-medium">Checkout</p>

            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col gap-5">
                    @for($i=0;$i<2;$i++)
                        @include('../components/item-checkout')
                    @endfor
                </div>
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
                        <p class="text-md font-medium">Alamat Rumah</p>
                        <div class="flex justify-between items-center p-2 rounded border border-gray-300 hover:cursor-pointer">
                            <p class="text-sm">Rumah</p>
                            <i class="material-icons-outlined text-gray-300">keyboard_arrow_right</i>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <p class="text-md font-medium">Jasa Pengiriman</p>
                        <div class="flex gap-4">
                            <div class="rounded border border-primary-500 py-1 px-4 hover:border-primary-500 hover:cursor-pointer">
                                <div class="w-[50px] h-8">
                                    <img src="{{ asset('/images/gosend.png')}}" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="rounded border border-gray-200 py-1 px-4 hover:border-primary-500 hover:cursor-pointer">
                                <div class="w-[50px] h-8">
                                    <img src="{{ asset('/images/jne.png')}}" alt="" class="w-full h-full">
                                </div>
                            </div>
                            <div class="rounded border border-gray-200 py-1 px-4 hover:border-primary-500 hover:cursor-pointer">
                                <div class="w-[50px] h-8">
                                    <img src="{{ asset('/images/anteraja.png')}}" alt="" class="w-full h-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between border-t border-gray-300 pt-4">
                <p class="text-md">Subtotal</p>
                <div class="flex gap-1 items-center">
                    <p class="text-md font-semibold">Rp110.000</p>
                    <i class="material-icons-outlined text-gray-500">keyboard_arrow_down</i>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-5 p-4 rounded-lg border border-gray-300 w-full md:w-2/6 h-fit">
            <p class="text-lg font-medium">Ringkasan Belanja</p>

            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <p class="text-md">Total Biaya Sewa (2 Produk)</p>
                        <p class="text-md">Rp435.000</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-md">Biaya Layanan</p>
                        <p class="text-md">Rp5.000</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-md">Ongkos kirim</p>
                        <p class="text-md">Rp30.000</p>
                    </div>
                </div>
                <div class="flex justify-between pt-1 border-t border-gray-300">
                    <p class="text-md font-semibold">Total</p>
                    <p class="text-md font-semibold text-primary-500">Rp470.000</p>
                </div>
            </div>

            <button class="text-md font-medium text-white text-center py-3 bg-primary-500 rounded">Bayar Sekarang</button>
        </div>
    </div>
@endsection
