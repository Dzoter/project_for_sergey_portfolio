@section('header')
    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ url('assets/img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Синицкий Сергей</a></h1>
                {{--            <div class="social-links mt-3 text-center">--}}
                {{--                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>--}}
                {{--                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
                {{--                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>--}}
                {{--                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--}}
                {{--                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
                {{--            </div>--}}
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>

                    <li><a <?=request()->is('/')? 'style="background: gray; color: white"': null?> href="{{Route('index')}}" class="nav-link scrollto"><i <?=request()->is('/')? 'style="color: white;"': null?> class="bx bx-home"></i> <span>Главная</span></a>
                    </li>
                    {{--                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>--}}
                    {{--                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>--}}
                    {{--                </li>--}}
                    {{--                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>--}}
                    {{--                        <span>Portfolio</span></a></li>--}}
                    {{--                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>--}}
                    {{--                </li>--}}
                    @foreach($categories as $category)
                        <li><a <?=request()->is('категории/'.$category->name)? 'style="background: gray; color: white"': null?> href="{{Route('category',$category->name)}}"
                               class="nav-link scrollto d-flex"> <i <?=request()->is('категории/'.$category->name)? 'style="fill: black;"': null?>
                                    class="bx bx-envelope"></i> <span>{{$category->name}}</span></a>
                        </li>
                    @endforeach
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Контакты</span></a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
@endsection
