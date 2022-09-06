@extends('layout.layout')



@section('content')

    <div class="container">
        <h1 class="text-center">{{\App\Models\Categories::getLabels($categoryObj->categories)}}</h1>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
            @foreach($files as $file)

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <a href="{{url($file->path)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$file->id}}">
                        <img src="{{url($file->path)}}" class="img-fluid" alt="">
                    </a>
                    <h2 class="text-center">{{\App\Models\Categories::getLabels($file->categories->categories).'_'.$file->id}}</h2>
                </div>

            @endforeach
        </div>
    </div>
    @yield('contact', View::make('sections.contact'))
    @yield('contact')
@endsection
