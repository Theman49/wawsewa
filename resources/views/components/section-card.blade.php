<div class="container">
    <div class="flex flex-col gap-5 p-8 border border-gray-200 rounded-lg">
        <div class="flex justify-between items-center">
            <p class="text-xl font-bold">{{ $slot }}</p>
            <a href="#" class="text-md font-medium text-primary-500">Lihat Semua</a>
        </div>
        <div class="grid grid-cols-4 gap-4">
            @for($i=0; $i<4; $i++)
                @include('../components/card')
            @endfor
        </div>
    </div>
</div>