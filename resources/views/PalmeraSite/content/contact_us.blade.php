@extends('PalmeraSite.layout.sitelayout')
@section('title','Contact us')
@section('body')

    <!-- Top Banner Section -->
    <div class="h-48 md:h-80" style="background: url({{asset('PalmeraSite/images/dates-bg.jpg')}}); background-position: center; background-size: cover;">
        <div class="w-full h-full bg-black bg-opacity-70 flex flex-col items-center justify-center pt-10">
            <h3 class="text-white font-medium text-center text-3xl md:text-5xl">
                Contact Us
            </h3>
        </div>
    </div>
    <!-- /Top Banner Section -->

    <!-- Description Section -->
    <div class="p-10 text-center max-w-5xl mx-auto">
        <h3 class="font-bold text-xl">Come Visit Us</h3>
        <p>
            Factory Address: Hanger 3 & 4, Al Yahia Compound, Opposite to South Amman Traffic Department, Amman Development Ring
        </p>
        <br>
        <p>
            Head Office: 12 Khair Al Deen Al Maani St, Dabouq, Amman
        </p>
        <br>
        <p>
            PO Box 1999, 11941 Amman, Jordan
        </p>
        <br>
        <p class="font-bold">Call Us At</p>
        <a href="#" class="hover:text-orange-500">
            @php
            $phone = \App\Models\shortquote::where('key','=','callus')->first();
            @endphp
            @isset($phone)
            {{$phone->content}}
            @endisset
        </a>
    </div>
    <!-- /Description Section -->

    <!-- Contact Section -->
    <div class="w-full relative md:mt-10"> 
        <div class="w-full md:absolute top-12">
            <div class="bg-white p-5 md:p-10 w-full md:w-4/5 lg:w-1/2 mx-auto md:shadow-md">
                <form action="{{route('submit.contactus')}}" method="post" >
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