<?php
    $rowGrid = 1;
    if(isset($row) && $row == '2'){
        $rowGrid = 2;
    }

    
    $limit = $rowGrid * 5;
    $data = [
        'products' => []
    ];
    for($i=0;$i<10;$i++){
        array_push($data['products'], [
            'thumbnail' => asset('/images/bg-tile.png'),
            'title' => "placeholder",
            'price' => "120",
            'rating' => "4.6",
            'stock' => 11,
            'id' => $i+1
        ]);
    }
    if($category != '-'){
        $data = json_decode(http_request("https://dummyjson.com/products/category/$category?limit=10"), true);
    }
    $products = $data['products'];

?>

@if(isset($border) && $border == 'no')
        <div class="container flex flex-col gap-5">
@else
    <div class="container flex flex-col gap-5 p-8 border border-gray-200 rounded-lg">
@endif
    <div class="flex justify-between items-center">
        <p class="text-xl font-bold">{{ $heading }}</p>
        @if(!isset($border))
            <a href="#" class="text-md font-medium text-primary-500">Lihat Semua</a>
        @endif
    </div>
    <!-- <div class="grid grid-cols-5 gap-8"> -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-x-px gap-y-8 sm:gap-x-4 sm:gap-y-8">
        @for($i=0; $i<($rowGrid * 5); $i++)
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