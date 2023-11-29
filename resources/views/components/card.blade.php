<div class="w-60 h-60 p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center">
    <div class="w-16 h-16 mb-4 bg-oke-900 text-oke-200 flex justify-center items-center rounded-full">
        <i {{ $attributes->merge(['class' => $class]) }} class="fa-solid fa-2x"></i>
    </div>
    {{-- <p class="text-xl font-bold">{{$text}}</p> --}}
    {{ $slot }}
</div>
