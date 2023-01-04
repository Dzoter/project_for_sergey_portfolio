@section('portfolio')
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Каталог</h2>
                <p>В каталоге представлены более 2000 проектов. Это опыт професиональной деятельности более 9 лет. Любой
                    проект дополняется и изменяется согласно вашим пожеланиям.</p>
            </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @foreach($categories as $category)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <a href="{{Route('category',$category->name)}}" class="portfolio-wrap d-block">
                            <img src="{{url($category->path)}}" class="img-fluid" alt="">
                        </a>
                        <h3 class="text-center">{{$category->name}}</h3>
                    </div>

                @endforeach

            </div>
        </div>
    </section><!-- End Portfolio Section -->
@endsection
