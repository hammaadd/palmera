@extends('PalmeraSite.layout.sitelayout')
@section('title', 'Our Farms')
@section('body')
    <!-- Top Banner Section -->
    <div class="h-48 md:h-80"
        style="background: url({{ asset('PalmeraSite/images/dates-bg.jpg') }}); background-position: center; background-size: cover;">
        <div class="w-full h-full bg-black bg-opacity-70 flex flex-col items-center justify-center pt-10">
            <h3 class="text-white font-medium text-center text-3xl md:text-5xl">
                Our Farms
            </h3>
        </div>
    </div>
    <!-- /Top Banner Section -->

    <!-- Description Section -->
    <div class="blocks-preview-title-holder removable-parent order-handle mt-5 ml-10">
        <h2
            class="preview-element blocks-preview-title magic-circle-holder inner-page text-element quick-text-style-menu   allow-mobile-hide">
            INNOVATION IN AGRICULTURE
        </h2>
    </div>
    <div class="blocks-preview-subtitle-holder removable-parent order-handle ml-7 mt-5">
        <h3
            class="preview-element blocks-preview-subtitle magic-circle-holder text-element quick-text-style-menu   allow-mobile-hide ml-10 mr-10 mb-5">
            works closely with farmer on providing free agricultural guidance and support, transparent and fair pricing,
            increase product quality and create an audit trail and traceability for all farms and harvest rounds from farm
            to retail shelves while highlighting the authenticity of Jordanian Medjool dates.<br><br>

            Palmera works closely with farmers to draw an agricultural program tailor made for each farm’s needs, while
            providing guidance to farmers on the latest findings and development in the dates farming technique, spreading
            knowledge and sharing experiences to maximize harvest value.<br><br>

            Palmera maintains a perpetual peer review system and runs a continuous harvest quality and quantity scenarios
            aimed to ensure that the targeted results of the agricultural year will yield a harvest within the forecasted
            and targeted quality and quantity objectives using the latest technological nd statistical tools that will help
            achieve such targets.<br><br>

            Palmera works continuously on a multiple factors related to sustainable and successful agricultural techniques
            such as water management, infestation, pollination, fruits bagging, skin separation, roots health and many other
            daily routine that affect our harvest quality and maximize farmers returns.
            At the same time, Palmera is putting up plans for future finished products techniques and promoting dates as a
            natural healthy and affordable super food.<br>
        </h3>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 max-w-5xl mx-auto pb-10">
    
            <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-60 cursor-pointer m-auto " >
                <a href="" data-lightbox="products" data-title="" class="w-full block h-full">
                    <img alt="blog photo" src="{{asset('product/ultracare.jpg')}}" class="max-h-40 w-full object-cover"/>
                    <p class="text-gray-900 text-xl font-medium mb-2 mt-1 text-center">
                        Ultra Care
                    </p>
                    
                </a>
            </div>
            <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-60 cursor-pointer m-auto">
                <a href="" data-lightbox="products" data-title="" class="w-full block h-full">
                    <img alt="blog photo" src="{{asset('product/handson.jpg')}}" class="max-h-40 w-full object-cover"/>
                    <p class="text-gray-900 text-xl font-medium mb-2 mt-1 text-center">
                        Hands On
                    </p>
                </a>
            </div>
            <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-60 cursor-pointer m-auto">
                <a href="" data-lightbox="products" data-title="" class="w-full block h-full">
                    <img alt="blog photo" src="{{asset('product/detailed.jpg')}}" class="max-h-40 w-full object-cover"/>
                    <p class="text-gray-900 text-xl font-medium mb-2 mt-1 text-center">
                        Detailed
                    </p>
                </a>
            </div>
            <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-60 cursor-pointer m-auto">
                <a href="" data-lightbox="products" data-title="" class="w-full block h-full">
                    <img alt="blog photo" src="{{asset('product/hightech.jpg')}}" class="max-h-40 w-full object-cover"/>
                    <p class="text-gray-900 text-xl font-medium mb-2 mt-1 text-center">
                        High Tech
                    </p>
                </a>
            </div>
        
    
    </div>    
@endsection
