
    <!-- Footer -->
    <footer>
        <div class="w-full bg-black py-5 md:py-10">
            <div class="flex flex-wrap overflow-hidden max-w-6xl mx-auto px-5">

                <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/3 lg:my-3 lg:px-3 lg:w-1/3 xl:my-3 xl:px-3 xl:w-1/3">
                    <!-- Column Content -->
                    <h4 class="text-white text-xl font-bold mb-3">Get In Touch</h4>
                    <p class=" text-white font-bold">
                        <i class="fas fa-map-marker-alt text-orange-500 mr-1"></i> Head Office:
                    </p>
                    <p class="text-white">
                        @php
                        $address = \App\Models\shortquote::where('key','=','address')->first();
                        @endphp
                        @isset($address)
                        {{$address->content}}
                        @endisset
                    </p>
                    <p class=" text-white font-bold">
                        <i class="fas fa-phone-alt text-orange-500 mr-1"></i> Phone:
                    </p>
                    <a href="#" class="text-white hover:text-orange-500">
                        @php
                        $phone = \App\Models\shortquote::where('key','=','phone')->first();
                        @endphp
                        @isset($phone)
                        {{$phone->content}}
                        @endisset
                        
                    </a>
                </div>
              
                <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/3 lg:my-3 lg:px-3 lg:w-1/3 xl:my-3 xl:px-3 xl:w-1/3">
                    <!-- Column Content -->
                    <h4 class="text-white text-xl font-bold mb-3 mt-5 md:mt-0">Follow Us</h4>
                    <div class="social-icons">
                        <a href="#" class="text-gray-300 hover:text-orange-500 group">
                            <i class="fab fa-facebook-f border-gray-300 group-hover:border-orange-500 border h-8 w-8 py-2 text-center rounded-full mx-2"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-orange-500 group">
                            <i class="fab fa-linkedin border-gray-300 group-hover:border-orange-500 border h-8 w-8 py-2 text-center rounded-full mx-2"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-orange-500 group">
                            <i class="fab fa-instagram border-gray-300 group-hover:border-orange-500 border h-8 w-8 py-2 text-center rounded-full mx-2"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-orange-500 group">
                            <i class="fab fa-youtube border-gray-300 group-hover:border-orange-500 border h-8 w-8 py-2 text-center rounded-full mx-2"></i>
                        </a>
                    </div>
                </div>
              
                <div class="w-full overflow-hidden md:my-1 md:px-1 md:w-1/3 lg:my-3 lg:px-3 lg:w-1/3 xl:my-3 xl:px-3 xl:w-1/3">
                    <!-- Column Content -->
                    <h4 class="text-white text-xl font-bold mb-3 mt-5 md:mt-0">Get Our Newsletter</h4>
                    <p class="text-white">
                        We will be glad to let you know more
                    </p>
                    <form action="{{route('news.later')}}" class="text-center w-full mt-2" method="POST">
                        @csrf
                        <input type="email" id="mail" name="mail" class="w-full bg-gray-100 bg-opacity-10 border-0 ring-0 outline-none text-white px-3 py-2">
                        <span class="ml-5 .text-warning">@error('mail'){{$message}}@enderror</span><br>
                        <input type="submit" class="btn-main">
                    </form>
                </div>
              
            </div>
        </div>
    </footer>
    <!-- /Footer -->
    <script src="{{asset('PalmeraSite/dist/js/lightbox-plus-jquery.js')}}"></script>