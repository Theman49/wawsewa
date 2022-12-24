<div class="flex flex-col gap-4 rounded-lg w-[85%] md:w-[230px] border border-gray">
    <div class="rounded-t-lg bg-white h-[120px] sm:h-[150px] md:h-[180px] w-full hover:cursor-pointer overflow-hidden" onclick="window.location='{{ env('APP_URL') }}/product/{{ $id }}'">
        <img src="{{ $image }}" alt="{{ $altImage }}" class="h-full mx-auto" >
    </div>
    <div class="flex flex-col gap-1 pb-4 px-2">
        <!-- <div class="flex justify-between items-center">
            <div class="flex justify-between items-center gap-1">
                <i class="material-icons-outlined text-md">place</i>
                <p class="text-xs">Tembalang, Semarang</p>
            </div>
            <i class="material-icons-outlined text-md">favorite_border</i>
        </div> -->
        <div class="h-10">
            <p class="text-sm font-semibold">{{ $title }}</p>
        </div>
        <div class="flex flex-col gap-1">
            <p class="text-sm font-semibold text-primary-500">IDR {{ substr($price, 0,2) }}.000<span class="text-xs font-medium text-black">/hari</span></p>
            <div class="flex flex-col-reverse md:flex-row gap-2">
                <div class="flex items-center gap-1">
                    <i class="material-icons-outlined text-warning-500">star</i>
                    <p class="text-xs">{{ substr($rating, 0, 3) }}</p>
                    <p class="text-xs">{{ $reviewer }}</p>
                </div>
                <div class="bg-gray-200 w-px hidden md:block"></div>
                <div class="flex items-center gap-1">
                    <p class="text-xs">{{ $rented }}</p>
                    <p class="text-xs">tersewa</p>
                </div>
            </div>
        </div>
    </div>
</div>