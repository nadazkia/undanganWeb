<div id="bottom-nav" class="md:hidden shadow-2xl fixed w-full bottom-0 flex mx-auto justify-center z-50">
    <nav class="font-poppins bottom-0">
        <ul
            class="w-full flex justify-around items-center text-center font-bold bg-white text-[10px] rounded-t-2xl px-6  gap-4">
            <x-navlink-bottom :active="request()->segment('1') == 'beranda'">
                <a href="{{ url('/beranda') }}">
                    {{-- <i class="fa-solid fa-house-chimney text-2xl" /></i> --}}
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1 mx-auto"
                        viewBox="0 -40 560 560"" fill=" currentColor">
                        <path
                            d="M261.56,101.28a8,8,0,0,0-11.06,0L66.4,277.15a8,8,0,0,0-2.47,5.79L63.9,448a32,32,0,0,0,32,32H192a16,16,0,0,0,16-16V328a8,8,0,0,1,8-8h80a8,8,0,0,1,8,8l0,136a16,16,0,0,0,16,16h96.06a32,32,0,0,0,32-32l0-165.06a8,8,0,0,0-2.47-5.79Z">
                        </path>
                        <path
                            d="M490.91,244.15l-74.8-71.56,0-108.59a16,16,0,0,0-16-16h-48a16,16,0,0,0-16,16l0,32L278.19,40.62C272.77,35.14,264.71,32,256,32h0c-8.68,0-16.72,3.14-22.14,8.63L21.16,244.13c-6.22,6-7,15.87-1.34,22.37A16,16,0,0,0,43,267.56L250.5,69.28a8,8,0,0,1,11.06,0L469.08,267.56a16,16,0,0,0,22.59-.44C497.81,260.76,497.3,250.26,490.91,244.15Z">
                        </path>
                    </svg> --}}
                    <i class="fa-solid fa-house-chimney fa-2x"></i>
                    <p>Beranda</p>
                </a>
            </x-navlink-bottom>
            <x-navlink-bottom :active="request()->segment('1') == 'harga'">
                <a href="{{ url('/harga') }}">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1 mx-auto" viewBox="-1 0.5 17 17"
                        fill="currentColor">
                        <path
                            d="m13.842 11.52-4.389 4.388a1.112 1.112 0 0 1-1.567 0l-6.28-6.28a3.027 3.027 0 0 1-.771-1.892l.043-3.681A1.141 1.141 0 0 1 2 2.935L5.67 2.9a3.04 3.04 0 0 1 1.892.773l6.28 6.28a1.112 1.112 0 0 1 0 1.567zM3.826 5.133a.792.792 0 1 0-.792.792.792.792 0 0 0 .792-.792zm6.594 7.348a.554.554 0 0 0 0-.784l-.401-.401a2.53 2.53 0 0 0 .35-.83 1.565 1.565 0 0 0-.397-1.503 1.59 1.59 0 0 0-1.017-.46 2.14 2.14 0 0 0-.75.085h-.002a2.444 2.444 0 0 0-.59.277H7.61a2.677 2.677 0 0 0-.438.357 2.043 2.043 0 0 1-.259.22 1.29 1.29 0 0 1-.329.17h-.002a.835.835 0 0 1-.338.038h-.002a.53.53 0 0 1-.314-.136.539.539 0 0 1-.106-.534 1.54 1.54 0 0 1 .41-.71 1.632 1.632 0 0 1 .23-.165l.03-.019a1.783 1.783 0 0 1 .322-.155.942.942 0 0 1 .325-.06.554.554 0 0 0 0-1.108h-.001a2.058 2.058 0 0 0-.717.132 2.846 2.846 0 0 0-.529.26l-.01.006-.398-.4a.554.554 0 1 0-.784.785l.388.387a2.513 2.513 0 0 0-.347.803 1.644 1.644 0 0 0 .404 1.561 1.622 1.622 0 0 0 .983.456 1.922 1.922 0 0 0 .805-.089 2.372 2.372 0 0 0 .624-.319 3.142 3.142 0 0 0 .398-.339 1.569 1.569 0 0 1 .256-.208 1.381 1.381 0 0 1 .32-.151 1.023 1.023 0 0 1 .348-.038.485.485 0 0 1 .308.139c.05.049.165.165.097.488a1.558 1.558 0 0 1-.413.729 2.476 2.476 0 0 1-.28.219 1.727 1.727 0 0 1-.306.157.687.687 0 0 1-.32.042.554.554 0 1 0-.08 1.106c.052.004.103.005.152.005a1.723 1.723 0 0 0 .685-.134 2.678 2.678 0 0 0 .507-.27l.01-.007.397.398a.555.555 0 0 0 .783 0z">
                        </path>
                    </svg> --}}
                    <i class="fa-solid fa-tag fa-2x"></i>
                    <p>Harga</p>
                </a>
            </x-navlink-bottom>
            <x-navlink-bottom :active="request()->segment('1') == 'katalog'">
                <a href="{{ url('/katalog') }}" class="relative">
                    <div
                        class="bg-mermud-800 w-12 h-12 rounded-full fixed left-0 right-1 mx-auto bottom-8 flex items-center justify-center shadow-xl hover:scale-110 duration-500">
                        {{-- class="w-16 h-16 bg-mermud-800 rounded-full fixed left-0 right-4 mx-auto bottom-10
                        shadow-lg hover:scale-110 duration-500"> --}}
                        {{-- <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="6 9 80 85"
                            class="w-[2.3rem] h-full mb-1 mx-auto text-white">
                            <path
                                d="M61.8,29.4l8.9,8.9l0,0c2,1.9,2,5.1,0,7l0,0L47.5,68.4V36.6l7.2-7.2C56.6,27.4,59.9,27.4,61.8,29.4z M80,62.5V75c0,2.8-2.2,5-5,5H43.8l22.5-22.5H75C77.8,57.5,80,59.8,80,62.5z M20,68.8V25c0-2.8,2.2-5,5-5h12.5c2.8,0,5,2.2,5,5v43.8 c0,6.2-5,11.2-11.2,11.2S20,75,20,68.8z M31.2,73.8c2.8,0,5-2.2,5-5s-2.2-5-5-5s-5,2.2-5,5S28.5,73.8,31.2,73.8z">
                            </path>
                        </svg> --}}
                        <i class="fa-solid fa-layer-group fa-25 text-white"></i>
                    </div>
                    <p class="mt-6">Katalog</p>
                </a>
            </x-navlink-bottom>
            <x-navlink-bottom :active="request()->segment('1') == 'pemesanan'">
                <a href="{{ url('/pemesanan') }}">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mb-1 mx-auto"
                        viewBox="0 -30 270 270"" fill=" currentColor">
                        <path
                            d="M223.87109,65.43115l-12.15722,66.86231A23.98711,23.98711,0,0,1,188.10156,152H72.13135l4.36377,24H184a24.01161,24.01161,0,1,1-22.624,16H102.624a24.00309,24.00309,0,1,1-40.85986-7.57666L34.05078,32H16a8,8,0,0,1,0-16H34.05078A15.9918,15.9918,0,0,1,49.793,29.13818L54.67676,56H216a8.00076,8.00076,0,0,1,7.87109,9.43115Z">
                        </path>
                    </svg> --}}
                    <i class="fa-solid fa-cart-shopping fa-2x"></i>
                    <p>Pemesanan</p>
                </a>
            </x-navlink-bottom>
            <x-navlink-bottom :active="request()->segment('1') == 'info'">
                <a href="{{ url('/info') }}">
                    {{-- <svg viewBox="-2.5 -4 22 22" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="w-8 h-8 mb-1 mx-auto">
                        <path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z">
                        </path>
                    </svg> --}}
                    <i class="fa-solid fa-circle-info fa-2x"></i>
                    <p>Info</p>
                </a>
            </x-navlink-bottom>
        </ul>
    </nav>
</div>
