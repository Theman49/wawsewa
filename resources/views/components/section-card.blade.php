<?php
    $rowGrid = 1;
    if(isset($row) && $row == '2'){
        $rowGrid = 2;
    }
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
    <div class="grid grid-cols-5 gap-8">
        @for($i=0; $i<($rowGrid * 5); $i++)
            @include('../components/card')
        @endfor
    </div>
</div>