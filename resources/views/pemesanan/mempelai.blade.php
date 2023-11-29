@extends('layouts.app')

@section('content')
<div class="flex justify-center bg-tosca-100 font-poppins">
    <div class="w-full md:p-16 pt-20 pb-36 px-4">
        <div class="pb-20 px-4 text-center">
            <h4 class="text-2xl text-gray-800 font-bold">BUAT UNDANGAN</h4>
            <p class="text-sm text-gray-800 mt-2">Pricing built for businesses of all sizes. Choose package that suits
                your needs.</p>
        </div>

        <div class="w-full 2xl:w-3/4 flex items-center justify-center px-4 md:px-32 lg:px-16 2xl:px-0 mx-auto -mt-8"
            x-data="{ mempelai: Pria }">
            <div class="w-full">
                <div class="bg-white shadow-2xl rounded-lg py-4 flex flex-wrap">
                    <form action="{{ route('acara.edit'), $mempelai->id }}" method="post" class="w-full m-8">
                        @csrf
                        @method('PATCH')
                        {{-- <input type="hidden" name="id" value="{{ old('id', $mempelai->id) }}"> --}}
                        <div id="mempelai" class="md:flex">
                            <div id="pria"
                                class="md:w-1/2 flex flex-wrap md:flex-col justify-center md:justify-start my-4">
                                <h1 class="text-center mb-4 rounded-lg duration-300 text-mermud-800 text-xl font-bold tracking-wide"
                                    title="Mempelai Pria">
                                    MEMPELAI PRIA
                                </h1>
                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="nama_pria" class="text-sm font-medium tracking-wide">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="nama_pria" id="nama_pria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('nama_pria') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('nama_pria') }}" placeholder="Muhammad Fulan">
                                        @error('nama_pria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="panggil_pria" class="text-sm font-medium tracking-wide">Nama
                                            Panggilan
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="panggil_pria" id="panggil_pria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('panggil_pria') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('panggil_pria') }}" placeholder="Fulan">
                                        @error('panggil_pria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="bapak_pria" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Bapak
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="bapak_pria" id="bapak_pria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('bapak_pria') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('bapak_pria') }}" placeholder="Bapak Fulan">
                                        @error('bapak_pria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="ibu_pria" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Ibu
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="ibu_pria" id="ibu_pria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('ibu_pria') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('ibu_pria') }}" placeholder="Ibu Fulanah">
                                        @error('ibu_pria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="anakke_pria" class="text-sm font-medium tracking-wide"> Putra
                                            keberapa</label>
                                        <input type="text" name="anakke_pria" id="anakke_pria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('anakke_pria') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('anakke_pria') }}" placeholder="Pertama">
                                        @error('anakke_pria')
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

                            <div id="wanita"
                                class="md:w-1/2 flex flex-wrap md:flex-col justify-center md:justify-start my-4">
                                <h1 class="text-center mb-4 rounded-lg duration-300 text-mermud-800 text-xl font-bold tracking-wide"
                                    title="Mempelai Wanita">
                                    MEMPELAI WANITA
                                </h1>
                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="nama_wanita" class="text-sm font-medium tracking-wide">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="nama_wanita" id="namawanita_"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('nama_wanita') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('nama_wanita') || $mempelai->nama_wanita }}"
                                            placeholder="Muhammad Fulanah">
                                        @error('nama_wanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="panggil_wanita" class="text-sm font-medium tracking-wide">Nama
                                            Panggilan
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="panggil_wanita" id="panggil_wanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('panggil_wanita') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('panggil_wanita') }}" placeholder="Fulan">
                                        @error('panggil_wanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="bapak_wanita" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Bapak
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="bapak_wanita" id="bapak_wanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('bapak_wanita') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('bapak_wanita') }}" placeholder="Bapak Fulan">
                                        @error('bapak_wanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="ibu_wanita" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Ibu
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="ibu_wanita" id="ibu_wanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('ibu_wanita') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('ibu_wanita') }}" placeholder="Ibu Fulanah">
                                        @error('ibu_wanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="anakke_wanita" class="text-sm font-medium tracking-wide"> Putri
                                            keberapa</label>
                                        <input type="text" name="anakke_wanita" id="anakke_wanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('anakke_wanita') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('anakke_wanita') }}" placeholder="Kedua">
                                        @error('anakke_wanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row items-center md:justify-around mb-7 md:gap-8 gap-4 mt-4">
                            <button type="submit"
                                class="w-full md:w-1/3 flex justify-center text-center bg-mermud-800 hover:bg-pink-700 text-white p-2 rounded-xl tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-300">Selanjutnya</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection