<nav id="top-nav"
    class="hidden md:flex sticky top-0 justify-between w-full bg-white px-4 py-3 font-poppins md:p-4 shadow-xl">
    <a href="#">
        <span class="font-semibold text-xl tracking-tight">MG</span>
    </a>
    <div class="md:items-center md:w-auto flex">
        <div class="md:flex hidden">
            <x-navlink-top :href="url('/harga')" :active="request()->segment('1') == 'harga'">
                Harga </x-navlink-top>
            <x-navlink-top :href="url('/katalog')" :active="request()->segment('1') == 'katalog'">
                Katalog </x-navlink-top>
            <x-navlink-top :href="url('/pemesanan/create')" :active="request()->segment('1') == 'pemesanan'">
                Pemesanan </x-navlink-top>
            <x-navlink-top :href="url('/info')" :active="request()->segment('1') == 'info'">
                Info </x-navlink-top>
        </div>
        <div class="flex text-sm" v-else>
            <a class="py-2 px-3 ml-2 bg-mermud-700 text-white font-semibold leading-none border border-oke-100 rounded-lg hover:border-transparent hover:bg-oke-600  duration-500"
                href="{{ url('/') }}">Login</a>
            {{-- <a
                class="py-2 px-3 ml-2 bg-mermud-800 font-semibold leading-none border border-mermud-900 rounded-lg hover:border-transparent hover:text-white hover:bg-mermud-600 text-white duration-500"
                href="{{ url('/') }}">Login</a> --}}
        </div>
    </div>
</nav>