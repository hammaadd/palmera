@extends('PalmeraSite.layout.sitelayout')
@section('title','Our Products')
@section('body')
<!-- Top Banner Section -->
<div class="h-48 md:h-80" style="background: url({{asset('PalmeraSite/images/dates-bg.jpg')}}); background-position: center; background-size: cover;">
    <div class="w-full h-full bg-black bg-opacity-70 flex flex-col items-center justify-center pt-10">
        <h3 class="text-white font-medium text-center text-3xl md:text-5xl">
            Our Products
        </h3>
    </div>
</div>
<!-- /Top Banner Section -->

<!-- Description Section -->
<div class="p-10 text-center max-w-5xl mx-auto">
    {{$aboutproduct->content}}
</div>
<!-- /Description Section -->

<!-- Products Section -->

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12 max-w-5xl mx-auto pb-10">
    
    @foreach ($data as $dat)
    
    
    
        <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
            <a href="{{asset('product/'.$dat->image.'')}}" data-lightbox="products" data-title="{{$dat->productname}}" class="w-full block h-full">
                <img alt="blog photo" src="{{asset('product/'.$dat->image.'')}}" class="max-h-40 w-full object-cover"/>
                <div class="bg-white w-full p-4">
                    <p class="text-gray-900 text-xl font-medium mb-2">
                        {{$dat->productname}}
                    </p>
                    <p class="text-gray-500 font-light text-base">
                        {{$dat->description}}
                    </p>
                </div>
            </a>
        </div>
    
    @endforeach

</div>
<!-- /Products Section -->


@endsection