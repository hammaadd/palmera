@extends('PalmeraSite.layout.sitelayout')
@section('title','Home')
@section('body')
 <!-- Top Banner Section -->
 <div class="h-screen" style="background: url({{asset('PalmeraSite/images/dates-bg.jpg')}}); background-position: center; background-size: cover;">
    <div class="w-full h-full bg-black bg-opacity-70 flex flex-col items-center justify-center pt-10">
        <h3 class="text-white font-medium text-center text-3xl md:text-5xl">
            FROM JORDAN AND PALESTINE
            <br>
            <span class=" text-orange-500">TO THE WORLD</span>
        </h3>
        <h4 class="text-white text-2xl text-center md:text-3xl mt-3">
            OUR FINEST MEDJOOL DATES
        </h4>
        <a href="{{route('contact.us')}}"><button class="group bg-transparent border-2 border-orange-500 rounded-full px-5 py-3 text-white text-lg mt-5 focus:outline-none hover:bg-orange-500">
            Contact Us <i class="fas fa-caret-right text-orange-500 ml-3 text-xl group-hover:text-white"></i>
        </button></a>
    </div>
</div>
<!-- /Top Banner Section -->

<!-- About Us Section -->
<div class="w-full md:w-11/12 lg:w-5/4 max-w-6xl mx-auto py-10 md:py-20 lg:px-10">
    <div class="flex flex-wrap overflow-hidden">
        <div class="flex-wrap overflow-hidden w-full md:w-1/2 text-center md:text-left px-5">
            <h2 class="font-extrabold text-xl md:text-4xl md:pt-10">
                About Us
            </h2>
            <p class="font-medium text-lg mt-2">
                We Use State of the Art Machinery to Grade and Sort our Medjool Dates.
            </p>
            <p class="text-gray-500 mt-2">
                {{$data->content}} 
                
            </p>
            <button class="btn-main">
                Read More
            </button>
        </div>
        <div class="flex-wrap overflow-hidden w-full md:w-1/2 mt-10 md:mt-0 px-5">
            <div class="md:w-80 mx-auto">
                <img src="{{asset('PalmeraSite/images/4.jpg')}}" alt="" class=" md:w-80 mx-auto">
            </div>
        </div>
    </div>
</div>
<!-- /About Us Section -->

<!-- Products Section -->
<div class="relative">
    <div class="absolute h-full w-2/5 md:bg-black left-0 top-0">
        <img src="{{asset('PalmeraSite/images/2.jpg')}}" alt="" class=" w-full h-full object-cover opacity-10 hidden md:block">
    </div>
    <div class="w-full md:w-4/5 lg:w-3/5 mx-auto">
        <div class="flex flex-wrap overflow-hidden md:-mx-2 lg:-mx-4 xl:-mx-4 py-10">

            <div class="w-full overflow-hidden px-5 md:my-2 md:px-2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 xl:my-4 xl:px-4 xl:w-1/2">
                <!-- Column Content -->
                <div class="relative h-300 md:h-500">
                    <img src="{{asset('PalmeraSite/images/1.jpg')}}" alt="" class="w-full h-full object-cover">
                    <div class="absolute w-full bottom-0 py-5 px-10 bg-black bg-opacity-80 text-center hover:bg-orange-500 hover:bg-opacity-100">
                        <a href="{{route('our.product')}}" class="text-white text-xl uppercase">Our Products</a>
                    </div>
                </div>
            </div>
          
            <div class="w-full overflow-hidden px-5 h-full md:my-2 md:px-2 md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2 xl:my-4 xl:px-4 xl:w-1/2">
                <!-- Column Content -->
                <div class="relative h-300 md:h-284 mt-8 md:mt-0 ">
                    <img src="{{asset('PalmeraSite/images/unnamed (2).jpg')}}" alt="" class="w-full h-full object-cover">
                    <div class="absolute w-full bottom-0 py-5 px-10 bg-black bg-opacity-80 text-center hover:bg-orange-500 hover:bg-opacity-100">
                        <a href="{{route('our.product')}}" class="text-white text-xl uppercase">Our Products</a>
                    </div>
                </div>

                <div class="relative h-300 md:h-184 mt-8 md:mt-8">
                    <img src="{{asset('PalmeraSite/images/3.jpg')}}" alt="" class="w-full h-full object-cover">
                    <div class="absolute w-full bottom-0 py-5 px-10 bg-black bg-opacity-80 text-center hover:bg-orange-500 hover:bg-opacity-100">
                        <a href="#" class="text-white text-xl uppercase">Our Packaging</a>
                    </div>
                </div>
            </div>
          
        </div>
    </div>

</div>
<!-- /Products Section -->

<!-- Contact Section -->
<div class="w-full relative md:mt-10"> 
    <div class="w-full md:absolute top-12">
        <div class="bg-white p-5 md:p-10 w-full md:w-4/5 lg:w-1/2 mx-auto md:shadow-md">
            <form action="{{route('submit.contactus')}}" method="POST" >
                @csrf
                <h3 class="text-3xl font-bold text-center uppercase">Contact Us</h3>
                <p class="text-center">
                    Factory Address: Hanger 3 & 4, Al Yahia Compound, Opposite to 
                    South Amman Traffic Department, Amman Development Ring
                </p>
                <div class="flex flex-wrap overflow-hidden md:-mx-2 lg:-mx-2 xl:-mx-2 md:mt-5">

                    <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                      <!-- Column Content -->
                      <input type="text" name="username" id="username" placeholder="Name" class="input-field mt-5 md:mt-2">
                      <span class="ml-5 text-danger">@error('username'){{$message}}@enderror</span>
                    </div>

                  
                    <div class="w-full overflow-hidden md:my-2 md:px-2 md:w-1/2 lg:my-2 lg:px-2 lg:w-1/2 xl:my-2 xl:px-2 xl:w-1/2">
                      <!-- Column Content -->
                      <input type="email" name="mail" id="mail" placeholder="Email" class="input-field mt-5 md:mt-2">
                      <span class="ml-5 text-danger">@error('mail'){{$message}}@enderror</span>
                    </div>
                  
                </div>
                <textarea name="message" id="message" rows="4" placeholder="Message" class=" input-field mt-5 md:mt-2 "></textarea>
                <span class="ml-5 text-danger">@error('message'){{$message}}@enderror</span>
                <div class=" text-center">
                    <input type="submit" class="btn-main" name="" id="">
                </div>
            </form>
        </div>
    </div>
    <div class=" h-72 md:h-540 mt-5 md:mt-0 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3384.5253115041173!2d35.94103261544101!3d31.973772231811523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5fdbe24284e7%3A0xc99c9daae793e4e0!2sAbdul%20Qader%20Al%20Maani%2C%20Amman%2C%20Jordan!5e0!3m2!1sen!2s!4v1619269938868!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!-- /Contact Section -->

@endsection