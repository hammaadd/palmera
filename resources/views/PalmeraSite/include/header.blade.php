 <!-- Header -->
 <header>     
    <div>
        <nav class="absolute w-full bg-black bg-opacity-60 border-b border-gray-300" x-data="{ menu: false }">
            <div class="max-w-7xl mx-auto px-8 py-2">
                <div class="flex items-center justify-between h-16">
                    <div class="w-full justify-between flex items-center">
                        <div class="flex flex-row justify-center">
                            <a class="flex-shrink-0" href="{{route('palmera.home')}}">
                                <img class="h-16" src="{{asset('PalmeraSite/images/logo.png')}}" alt="Palmera Logo"/>
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex justify-between items-baseline space-x-4">
                                <a class="menu-link {{Request::is('/')? 'active-link' : '' }}" href="{{route('palmera.home')}}">
                                    Home
                                </a>
                                <a class="menu-link {{Request::is('our-product')? 'active-link' : '' }}" href="{{route('our.product')}}">
                                    Our Products
                                </a>
                                <a class="menu-link" href="#">
                                    Our Farms
                                </a>
                                <a class="menu-link {{Request::is('contact-us')? 'active-link' : '' }}" href="{{route('contact.us')}}">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="block">
                        <div class="ml-4 flex items-center md:ml-6">
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <button @click=" menu = !menu " class="text-white hover:text-orange-500 text-3xl inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                            <i class="fas fa-bars" :class="{'hidden-imp': menu, 'block': !menu }"></i>
                            <i class="fas fa-times" :class="{'hidden-imp': !menu, 'block': menu }"></i> 
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:hidden" x-show="menu"
                @click.away="menu = false"
                x-transition:enter="transition transform origin-top-right ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-75"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition transform origin-top-right ease-out duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-75">
                <div class="px-10 pt-2 pb-3 space-y-1">
                    <a class="menu-link active-link block font-medium" href="index.html">
                        Home
                    </a>
                    <a class="menu-link block font-medium" href="our-products.html">
                        Our Products
                    </a>
                    <a class="menu-link block font-medium" href="/#">
                        Our Forms
                    </a>
                    <a class="menu-link block font-medium" href="contact.html">
                        Contact Us
                    </a>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- /Header -->