@extends('layout.layout')
@section('content')

    @yield('header', View::make('sections.header',['categories'=>$categoriesList]))
    @yield('header')
    <main id="main">
        <section id="portfolio" class="portfolio section-bg">
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

                            <div style="background-color: white;" class="col-lg-4 col-md-6 portfolio-item filter-app d-flex justify-content-center flex-column">
                                <a  href="{{url(($file->path))}}" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox d-flex justify-content-center"
                                   title="{{$file->name}}">
                                    <img style="text-align: center; height: 234px"  src="{{url($file->path)}}" class="img-fluid" alt="">
                                </a>

                                <h4 class="text-center">{{$categories->name.'_'.$file->id}}</h4>
                            </div>
                        @endforeach


                </div>
                <div class="col-md-8 offset-md-2">

                    {{$files->links()}}
                </div>
                @endif

            </div>
        </section>
        @yield('contact', View::make('sections.contact'))
        @yield('contact')
    </main>
@endsection
