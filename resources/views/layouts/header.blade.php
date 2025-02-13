<nav class="relative z-50 h-24 select-none" x-data="{ showMenu: false }">
    <div
        class="container relative flex flex-wrap items-center justify-between h-24 mx-auto overflow-hidden font-medium border-b border-gray-100 md:overflow-visible lg:justify-center sm:px-4 md:px-2">
        <div class="flex items-center justify-start w-1/4 h-full">
            <a class="navbar-brand" href="/">
                <img src="images/Satu Benih Logo.svg" class="d-inline-block align-top w-28" alt="Satu Benih">
            </a>
        </div>

        <div class="top-0 left-0 items-start hidden w-full h-full text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 lg:text-base md:bg-transparent md:p-0 md:relative md:flex"
            :class="{ 'flex fixed': showMenu, 'hidden': !showMenu }">
            <div
                class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                <div
                    class="flex flex-col items-start justify-center w-full space-x-6 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">

                    <a href="/"
                        class="inline-block w-full py-2 mx-0 font-bold text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-500 hover:no-underline lg:mx-3 md:text-center">Home</a>

                    <a href="/donasi"
                        class="inline-block w-full py-2 mx-0 font-bold text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-500 hover:no-underline lg:mx-3 md:text-center">Donasi</a>

                    <a href="/berita"
                        class="inline-block w-full py-2 mx-0 font-bold text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-500 hover:no-underline lg:mx-3 md:text-center">Berita</a>

                    <a href="/tentang-kami"
                        class="inline-block w-full py-2 mx-0 font-bold text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-green-500 hover:no-underline lg:mx-3 md:text-center">Tentang
                        Kami</a>
                </div>

                {{-- <div @click= "showMenu = !showMenu"
                    class="absolute right-0 flex flex-col items-end justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"
                        x-cloak="">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak="">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </div> --}}

                @if (Route::has('login'))
                    @auth
                        <!-- Settings Dropdown -->
                        <div
                            class="font-bold flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div class="font-bold">{{ Auth::user()->name }}</div>
                                        <div class="ml-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-8 w-8"
                                                viewBox="0 0 512 512">
                                                <path
                                                    d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link href="/dashboard">
                                            Dashboard
                                        </x-dropdown-link>

                                        <x-dropdown-link href="/dashboard">
                                            Profile
                                        </x-dropdown-link>

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                            {{ __('Log out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <div
                            class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <a href="{{ route('login') }}"
                                class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 font-bold hover:text-green-500 hover:no-underline lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Sign
                                In</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="inline-flex items-center w-full px-6 py-3 text-sm leading-4 text-white md:px-3 md:w-auto md:rounded-full lg:px-5 font-bold
                             hover:text-white hover:no-underline bg-gradient-to-r from-green-900 to-green-600 rounded-md sm:mb-0 hover:from-green-600 hover:to-green-800
                            focus:outline-none md:focus:ring-2 focus:ring-0 focus:ring-offset-2 focus:ring-green-700">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>

{{-- <nav class="relative flex flex-col md:flex-row justify-between items-center p-4 mx-auto bg-red-50"
    x-data="{ showMenu: false }">
    <div class="my-8 md:my-0">
        <a class="navbar-brand" href="/">
            <img src="images/Satu Benih Logo.svg" class="d-inline-block align-top md:w-24 w-32" alt="Satu Benih">
        </a>
    </div>

    <div class="relative flex flex-wrap items-center justify-between">
        <ul class="flex md:flex-row flex-col items-center my-16 md:my-0 gap-8 font-semibold text-lg md:items-center">
            <li>
                <a href="hover:text-gray-500">Home</a>
            </li>
            <li>
                <a href="hover:text-gray-500">Donasi</a>
            </li>
            <li>
                <a href="hover:text-gray-500">Berita</a>
            </li>
            <li>
                <a href="hover:text-gray-500">Tentang Kami</a>
            </li>
        </ul>
    </div>

    <div class="flex flex-row items-center justify-center  my-8 md:my-0">
        <a class="font-semibold bg-green-500 px-4 py-2 mr-1 text-white rounded-lg">Sign In</a>
        <a class="font-semibold bg-green-500 px-4 py-2 text-white rounded-lg">Register</a>
    </div>
</nav> --}}
