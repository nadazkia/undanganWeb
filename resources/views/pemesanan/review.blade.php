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
                        <div id="mempelai" class="md:flex">
                            <div id="pria"
                                class="md:w-1/2 flex flex-wrap md:flex-col justify-center md:justify-start my-4">
                                <h1 class="text-center mb-4 rounded-lg duration-300 text-mermud-800 text-xl font-bold tracking-wide"
                                    title="Mempelai Pria">
                                    MEMPELAI PRIA
                                </h1>
                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="namaMempelaiPria" class="text-sm font-medium tracking-wide">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaMempelaiPria" id="namaMempelaiPria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('namaMempelaiPria') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('namaMempelaiPria') }}" placeholder="Muhammad Fulan" disabled>
                                        @error('namaMempelaiPria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaPanggilPria" class="text-sm font-medium tracking-wide">Nama
                                            Panggilan
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaPanggilPria" id="namaPanggilPria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('namaPanggilPria') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('namaPanggilPria') }}" placeholder="Fulan" disabled>
                                        @error('namaPanggilPria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaBapakPria" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Bapak
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaBapakPria" id="namaBapakPria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('namaBapakPria') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('namaBapakPria') }}" placeholder="Bapak Fulan" disabled>
                                        @error('namaBapakPria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaIbuPria" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Ibu
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaIbuPria" id="namaIbuPria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('namaIbuPria') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('namaIbuPria') }}" placeholder="Ibu Fulanah" disabled>
                                        @error('namaIbuPria')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="anakKePria" class="text-sm font-medium tracking-wide"> Putra
                                            keberapa</label>
                                        <input type="text" name="anakKePria" id="anakKePria"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('anakKePria') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('anakKePria') }}" placeholder="Pertama" disabled>
                                        @error('anakKePria')
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
                                        <label for="namaMempelaiWanita" class="text-sm font-medium tracking-wide">Nama
                                            Lengkap
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaMempelaiWanita" id="namaMempelaiWanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('namaMempelaiWanita') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('namaMempelaiWanita') }}" placeholder="Muhammad Fulan"
                                            disabled>
                                        @error('namaMempelaiWanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaPanggilWanita" class="text-sm font-medium tracking-wide">Nama
                                            Panggilan
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaPanggilWanita" id="namaPanggilWanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('namaPanggilWanita') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('namaPanggilWanita') }}" placeholder="Fulan" disabled>
                                        @error('namaPanggilWanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaBapakWanita" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Bapak
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaBapakWanita" id="namaBapakWanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('namaBapakWanita') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('namaBapakWanita') }}" placeholder="Bapak Fulan" disabled>
                                        @error('namaBapakWanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="namaIbuWanita" class="text-sm font-medium tracking-wide"> Nama
                                            Lengkap Ibu
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="namaIbuWanita" id="namaIbuWanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('namaIbuWanita') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('namaIbuWanita') }}" placeholder="Ibu Fulanah" disabled>
                                        @error('namaIbuWanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="anakKeWanita" class="text-sm font-medium tracking-wide"> Putri
                                            keberapa</label>
                                        <input type="text" name="anakKeWanita" id="anakKeWanita"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('anakKeWanita') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('anakKeWanita') }}" placeholder="Kedua" disabled>
                                        @error('anakKeWanita')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full flex justify-center my-7">
                            <hr class="w-3/4">
                        </div>

                        <div id="detail" class="md:flex">
                            <div id="akad"
                                class="md:w-1/2 flex flex-wrap md:flex-col justify-center md:justify-start my-4">
                                <h1 class="text-center mb-4 rounded-lg duration-300 text-mermud-800 text-xl font-bold tracking-wide"
                                    title="Detail Acara">
                                    DETAIL AKAD
                                </h1>

                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="tanggalAkad" class="text-sm font-medium tracking-wide">Tanggal
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="date" name="tanggalAkad" id="tanggalAkad"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('tanggalAkad') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('tanggalAkad') }}" disabled>
                                        @error('tanggalAkad')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col md:flex-row md:justify-between md:gap-8">
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="waktuMulaiAkad" class="text-sm font-medium tracking-wide">Waktu
                                                Mulai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="waktuMulaiAkad" id="waktuMulaiAkad"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('waktuMulaiAkad') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('waktuMulaiAkad') }}" placeholder="08.00 WIB" disabled>
                                            @error('waktuMulaiAkad')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="waktuSelesaiAkad"
                                                class="text-sm font-medium tracking-wide">Waktu
                                                Selesai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="waktuSelesaiAkad" id="waktuSelesaiAkad"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('waktuSelesaiAkad') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('waktuSelesaiAkad') }}" disabled>
                                            @error('waktuSelesaiAkad')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tempatAkad" class="text-sm font-medium tracking-wide"> Tempat
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="tempatAkad" id="tempatAkad"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('tempatAkad') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('tempatAkad') }}" placeholder="Kediaman Mempelai Wanita"
                                            disabled>
                                        @error('tempatAkad')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="linkAkad" class="text-sm font-medium tracking-wide"> Link Google
                                            Maps
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="linkAkad" id="linkAkad"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('linkAkad') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('linkAkad') }}"
                                            placeholder="https://maps.app.goo.gl/9TXueGdWRbDdaBEeA" disabled>
                                        @error('linkAkad')
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
                                <h1 class="mb-4 text-center rounded-lg duration-300 text-mermud-800 text-xl font-bold tracking-wide"
                                    title="Detail Acara">
                                    DETAIL RESEPSI
                                </h1>
                                <div class="w-full md:px-8 md:justify-center">
                                    <div class="mb-3 row">
                                        <label for="tanggalResepsi" class="text-sm font-medium tracking-wide">Tanggal
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="date" name="tanggalResepsi" id="tanggalResepsi"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                @error('tanggalResepsi') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                            value="{{ old('tanggalResepsi') }}" placeholder="Muhammad Fulan" disabled>
                                        @error('tanggalResepsi')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="flex flex-col md:flex-row md:justify-between md:gap-8">
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="waktuMulaiResepsi"
                                                class="text-sm font-medium tracking-wide">Waktu
                                                Mulai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="waktuMulaiResepsi" id="waktuMulaiResepsi"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                    @error('waktuMulaiResepsi') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('waktuMulaiResepsi') }}" placeholder="Fulan" disabled>
                                            @error('waktuMulaiResepsi')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="md:w-1/2 mb-3 row">
                                            <label for="waktuSelesaiResepsi"
                                                class="text-sm font-medium tracking-wide">Waktu
                                                Selesai
                                                <span class="text-red-500">*</span>
                                            </label>
                                            <input type="time" name="waktuSelesaiResepsi" id="waktuSelesaiResepsi"
                                                class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300

                                                    @error('waktuSelesaiResepsi') text-red-900 placeholder-red-700 border-red-500 outline-none focus:ring-red-500 @enderror"
                                                value="{{ old('waktuSelesaiResepsi') }}" placeholder="Fulan" disabled>
                                            @error('waktuSelesaiResepsi')
                                            <div class="inline-flex text-sm text-red-600">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tempatResepsi" class="text-sm font-medium tracking-wide"> Tempat
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="tempatResepsi" id="tempatResepsi"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('tempatResepsi') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('tempatResepsi') }}"
                                            placeholder="Gedung Syahid, Jl. Syahidah No.27" disabled>
                                        @error('tempatResepsi')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="linkResepsi" class="text-sm font-medium tracking-wide"> Link
                                            Google
                                            Maps
                                            <span class="text-red-500">*</span>
                                        </label>
                                        <input type="text" name="linkResepsi" id="linkResepsi"
                                            class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-tosca-300 @error('linkResepsi') text-red-900 placeholder-red-700 border-red-500 rounded outline-none focus:ring-red-500 focus:border-red-500 @enderror"
                                            value="{{ old('linkResepsi') }}"
                                            placeholder="https://maps.app.goo.gl/9TXueGdWRbDdaBEeA" disabled>
                                        @error('linkResepsi')
                                        <div class="inline-flex text-sm text-red-600">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="button"
                            class="flex flex-col md:flex-row items-center md:justify-center mb-7 md:gap-8 gap-4 mt-4">
                            <button type="submit"
                                class="w-full md:w-1/3 flex justify-center text-center bg-oke-100 border hover:bg-oke-200 hover:text-white hover:border-transparent text-oke-200 p-2 rounded-xl tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-300">Sebelumnya</button>
                            <button type="submit"
                                class="w-full md:w-1/3 flex justify-center text-center bg-mermud-800 hover:bg-oke-200 text-white p-2 rounded-xl tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-300">Selanjutnya</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
