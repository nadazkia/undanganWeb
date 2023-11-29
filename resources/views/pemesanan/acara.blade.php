@extends('layouts.app')

@section('content')
<div class="flex justify-center bg-tosca-100 font-poppins">
    <div class="w-full md:p-16 pt-20 pb-36 px-4">
        <div class="pb-20 px-4 text-center">
            <h4 class="text-2xl text-gray-800 font-bold">BUAT UNDANGAN</h4>
            <p class="text-sm text-gray-800 mt-2">Pricing built for businesses of all sizes. Choose package that suits
                your needs.</p>
        </div>

        <div class="w-full 2xl:w-3/4 flex items-center justify-center px-4 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8">
            <div class="w-full">
                <div class="bg-white shadow-2xl rounded-lg py-4 flex flex-wrap justify-center">
                    <form action="" method="post" class="w-full m-8">
                        @csrf
                        {{-- <input type="hidden" name="id" value="{{ old('id', $mempelai->id) }}"> --}}
                        <div class="md:flex">
                            <div id="akad"
                                class="md:w-1/2 flex flex-wrap md:flex-col justify-center md:justify-start my-4">
                                <h1 class="text-center mb-4 rounded-lg duration-300 text-mermud-300 text-xl font-bold tracking-wide"
                                    title="Detail Acara">
                                    DETAIL AKAD
                                </h1>

                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="tanggal_akad" class="text-sm font-medium tracking-wide">Tanggal
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="date" name="tanggal_akad" id="tanggal_akad"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('tanggal_akad') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('tanggal_akad') }}" placeholder="Muhammad Fulan">
                                        @error('tanggal_akad')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col md:flex-row md:justify-between md:gap-8">
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="mulai_akad" class="text-sm font-medium tracking-wide">Waktu
                                                Mulai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="mulai_akad" id="mulai_akad"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('mulai_akad') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('mulai_akad') }}" placeholder="08.00 WIB">
                                            @error('mulai_akad')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="selesai_akad" class="text-sm font-medium tracking-wide">Waktu
                                                Selesai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="selesai_akad" id="selesai_akad"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('selesai_akad') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('selesai_akad') }}" placeholder="08.00 WIB">
                                            @error('selesai_akad')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tempat_akad" class="text-sm font-medium tracking-wide"> Tempat
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="tempat_akad" id="tempat_akad"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('tempat_akad') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('tempat_akad') }}" placeholder="Kediaman Mempelai Wanita">
                                        @error('tempat_akad')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="link_akad" class="text-sm font-medium tracking-wide"> Link Google
                                            Maps
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="link_akad" id="link_akad"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('link_akad') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('link_akad') }}"
                                            placeholder="https://maps.app.goo.gl/9TXueGdWRbDdaBEeA">
                                        @error('link_akad')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="md:hidden w-full flex justify-center my-7">
                                <hr class="w-3/4">
                            </div>

                            <div id="resepsi"
                                class="md:w-1/2 flex flex-wrap md:flex-col justify-center md:justify-start my-4">
                                <h1 class="mb-4 text-center rounded-lg duration-300 text-mermud-300 text-xl font-bold tracking-wide"
                                    title="Detail Acara">
                                    DETAIL RESEPSI
                                </h1>
                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="tanggal_resepsi" class="text-sm font-medium tracking-wide">Tanggal
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="date" name="tanggal_resepsi" id="tanggal_resepsi"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('tanggal_resepsi') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('tanggal_resepsi') }}" placeholder="Muhammad Fulan">
                                        @error('tanggal_resepsi')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col md:flex-row md:justify-between md:gap-8">
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="mulai_resepsi" class="text-sm font-medium tracking-wide">Waktu
                                                Mulai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="mulai_resepsi" id="mulai_resepsi"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                    @error('mulai_resepsi') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('mulai_resepsi') }}" placeholder="Fulan" min="00:00"
                                                max="24.00">
                                            @error('mulai_resepsi')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="selesai_resepsi" class="text-sm font-medium tracking-wide">Waktu
                                                Selesai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="selesai_resepsi" id="selesai_resepsi"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                    @error('selesai_resepsi') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('selesai_resepsi') }}" placeholder="Fulan">
                                            @error('selesai_resepsi')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tempat_resepsi" class="text-sm font-medium tracking-wide"> Tempat
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="tempat_resepsi" id="tempat_resepsi"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('tempat_resepsi') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('tempat_resepsi') }}"
                                            placeholder="Gedung Syahid, Jl. Syahidah No.27">
                                        @error('tempat_resepsi')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="link_resepsi" class="text-sm font-medium tracking-wide"> Link
                                            Google
                                            Maps
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="link_resepsi" id="link_resepsi"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('link_resepsi') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('link_resepsi') }}"
                                            placeholder="https://maps.app.goo.gl/9TXueGdWRbDdaBEeA">
                                        @error('link_resepsi')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center md:justify-around mb-7 md:gap-8 gap-4 mt-4">
                            <a href=""
                                class="w-full md:w-1/3 flex justify-center text-center bg-white border border-mermud-300 hover:bg-pink-700 text-mermud-300 p-2 rounded-xl tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-300">Sebelumnya</a>
                            <button type="submit"
                                class="w-full md:w-1/3 flex justify-center text-center bg-mermud-300 hover:bg-pink-700 text-white p-2 rounded-xl tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-300">Selanjutnya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
