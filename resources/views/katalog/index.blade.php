@extends('layouts.app')

@section('content')
<div class="font-poppins">
    <div class="flex flex-row justify-center bg-tosca-100">
        <div class="max-w-7xl flex flex-wrap justify-center items-center gap-6 md:p-16 pt-20 pb-36 px-4">
            <div class="h-52">
                <div
                    class="min-h-full p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <div class="w-16 h-16 mb-4 bg-oke-900 text-oke-200 flex justify-center items-center rounded-full">
                        <i class="fa-solid fa-heart-pulse fa-2x"></i>
                    </div>
                    <h1 class="text-lg font-bold">Timeline Perkenalan</h1>
                </div>
                {{-- <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center -z-10">
                    <h1 class="text-lg font-bold">Timeline Perkenalan</h1>
                    <p class="text-sm">Menceritakan kisah mulai dari perkenalan sampai pernikahan kepada tamu undangan
                    </p>
                </div> --}}
            </div>
            <div class="h-52">
                <div
                    class="min-h-full p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <div class="w-16 h-16 mb-4 bg-oke-900 text-oke-200 flex justify-center items-center rounded-full">
                        <i class="fa-solid fa-map-location-dot fa-2x"></i>
                    </div>
                    <h1 class="text-lg font-bold">Navigasi Google Maps</h1>
                </div>
                {{-- <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center -z-10">
                    <h1 class="text-lg font-bold">Timeline Perkenalan</h1>
                    <p class="text-sm">Menceritakan kisah mulai dari perkenalan sampai pernikahan kepada tamu undangan
                    </p>
                </div> --}}
            </div>
            <div class="h-52">
                <div
                    class="min-h-full p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <div class="w-16 h-16 mb-4 bg-oke-900 text-oke-200 flex justify-center items-center rounded-full">
                        <i class="fa-regular fa-address-book fa-2x"></i>
                    </div>
                    <h1 class="text-lg font-bold">Custom Nama Tamu</h1>
                </div>
                {{-- <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center -z-10">
                    <h1 class="text-lg font-bold">Timeline Perkenalan</h1>
                    <p class="text-sm">Menceritakan kisah mulai dari perkenalan sampai pernikahan kepada tamu undangan
                    </p>
                </div> --}}
            </div>
            <div class="h-52">
                <div
                    class="min-h-full p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <div class="w-16 h-16 mb-4 bg-oke-900 text-oke-200 flex justify-center items-center rounded-full">
                        <i class="fa-solid fa-gift fa-2x"></i>
                    </div>
                    <h1 class="text-lg font-bold">Kirim Hadiah Digital</h1>
                </div>
                {{-- <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center -z-10">
                    <h1 class="text-lg font-bold">Timeline Perkenalan</h1>
                    <p class="text-sm">Menceritakan kisah mulai dari perkenalan sampai pernikahan kepada tamu undangan
                    </p>
                </div> --}}
            </div>
            <div class="h-52">
                <div
                    class="min-h-full p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <div class="w-16 h-16 mb-4 bg-oke-900 text-oke-200 flex justify-center items-center rounded-full">
                        <i class="fa-regular fa-envelope fa-2x"></i>
                    </div>
                    <h1 class="text-lg font-bold">Kolom Tulis Ucapan</h1>
                </div>
                {{-- <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center -z-10">
                    <h1 class="text-lg font-bold">Timeline Perkenalan</h1>
                    <p class="text-sm">Menceritakan kisah mulai dari perkenalan sampai pernikahan kepada tamu undangan
                    </p>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="flex flex-col text-center justify-center items-center bg-white">
        <h1 class="mt-20 mb-10 text-2xl font-bold px-4">Pilihan Paket Undangan</h1>
        <div class="max-w-7xl flex flex-col md:flex-row justify-center items-center gap-6 pb-36 px-4">
            <div class="">
                <div class="p-10 rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <h1 class="font-bold text-lg p-3">Paket Silver</h1>
                    <ul class="w-full ml-9 text-left">
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Fitur Utama
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Masa Aktif 1 Bukan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Audio Background
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-xmark text-mermud-900"></i>RSVP dan Kolom Ucapan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-xmark text-mermud-900"></i>Link Live Streaming
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-xmark text-mermud-900"></i>Cerita Masa Perkenalan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-xmark text-mermud-900"></i>Amplop Digital
                        </li>
                    </ul>
                    <div class="flex flex-wrap justify-center">
                        <h1 class="font-bold text-3xl mt-10 mb-6 text-gray-800">Rp 25.000</h1>
                        <a
                            class="w-11/12 py-3 mb-2 bg-oke-100 text-oke-200 font-semibold leading-none border border-oke-100 rounded-full hover:border-transparent hover:bg-oke-200 hover:text-white hover:-translate-y-1 duration-500 cursor-pointer">Lihat
                            Contoh</a>
                        <a
                            class="w-11/12 py-3 mb-4 bg-mermud-700 text-white font-semibold leading-none border border-oke-100 rounded-full hover:border-transparent hover:bg-oke-200  duration-500 cursor-pointer hover:-translate-y-1">Pesan
                            Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <h1 class="font-bold text-lg p-3">Paket Gold</h1>
                    <ul class="text-left">
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Fitur Utama
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Masa Aktif 3 Bukan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Audio Background
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>RSVP dan Kolom Ucapan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Link Live Streaming
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-xmark text-mermud-900"></i>Cerita Masa Perkenalan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-xmark text-mermud-900"></i>Amplop Digital
                        </li>
                    </ul>
                    <div class="flex flex-wrap justify-center">
                        <h1 class="font-bold text-3xl mt-10 mb-6 text-gray-800">Rp 50.000</h1>
                        <a
                            class="w-11/12 py-3 mb-2 bg-oke-100 text-oke-200 font-semibold leading-none border border-oke-100 rounded-full hover:border-transparent hover:bg-oke-200 hover:text-white hover:-translate-y-1 duration-500 cursor-pointer">Lihat
                            Contoh</a>
                        <a
                            class="w-11/12 py-3 mb-4 bg-mermud-700 text-white font-semibold leading-none border border-oke-100 rounded-full hover:border-transparent hover:bg-oke-200  duration-500 cursor-pointer hover:-translate-y-1">Pesan
                            Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="">
                <div
                    class="p-8 text-center rounded-lg shadow-2xl bg-white flex flex-col items-center justify-center z-10">
                    <h1 class="font-bold text-lg p-3">Paket Platinum</h1>
                    <ul class="text-left">
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Fitur Utama
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Masa Aktif 3 Bukan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Audio Background
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>RSVP dan Kolom Ucapan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Link Live Streaming
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Cerita Masa Perkenalan
                        </li>
                        <li class="py-2">
                            <i class="pr-2 fa-solid fa-circle-check text-oke-600"></i>Amplop Digital
                        </li>
                    </ul>
                    <div class="flex flex-wrap justify-center">
                        <h1 class="font-bold text-3xl mt-10 mb-6 text-gray-800">Rp 100.000</h1>
                        <a
                            class="w-11/12 py-3 mb-2 bg-oke-100 text-oke-200 font-semibold leading-none border border-oke-100 rounded-full hover:border-transparent hover:bg-oke-200 hover:text-white hover:-translate-y-1 duration-500 cursor-pointer">Lihat
                            Contoh</a>
                        <a
                            class="w-11/12 py-3 mb-4 bg-mermud-700 text-white font-semibold leading-none border border-oke-100 rounded-full hover:border-transparent hover:bg-oke-200  duration-500 cursor-pointer hover:-translate-y-1">Pesan
                            Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection