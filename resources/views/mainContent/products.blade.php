@extends('layout.layout')



@section('content')

    @yield('header', View::make('sections.header',['categories'=>$categoriesList]))
    @yield('header')

    <div class="container">

        <h1 class="text-center">{{$categories->name}}</h1>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

            @if(count($subCategories)>1)
                @foreach($subCategories as $category)

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{Route('category',$category->name)}}" class="portfolio-wrap d-block">
                            <img src="{{url($category->path)}}" class="img-fluid" alt="">
                        </a>

                        <h2 class="text-center">{{$category->name}}</h2>
                    </div>

                @endforeach

            @elseif(count($subCategories)<=1)

                @foreach($files as $file)

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{url(($file->path))}}" data-gallery="portfolioGallery" class="portfolio-lightbox"
                           title="{{$file->name}}">
                            <img src="{{url($file->path)}}" class="img-fluid" alt="">
                        </a>

                        <h2 class="text-center">{{$file->id}}</h2>
                    </div>
                @endforeach


        </div>
<div class="col-md-8 offset-md-2">

        {{$files->links()}}
</div>
        @endif

    </div>

    @yield('contact', View::make('sections.contact'))
    @yield('contact')
@endsection
