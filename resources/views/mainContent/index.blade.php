@extends('layout.layout')
@section('content')

{{--@yield('about', View::make('sections.about'))--}}
{{--@yield('about')--}}

{{--@yield('facts', View::make('sections.facts'))--}}
{{--@yield('facts')--}}

{{--@yield('skills', View::make('sections.skills'))--}}
{{--@yield('skills')--}}

{{--@yield('resume', View::make('sections.resume'))--}}
{{--@yield('resume')--}}

@yield('portfolio', View::make('sections.portfolio'))
@yield('portfolio')

{{--@yield('services', View::make('sections.services'))--}}
{{--@yield('services')--}}

{{--@yield('testimonials', View::make('sections.testimonials'))--}}
{{--@yield('testimonials')--}}

@yield('contact', View::make('sections.contact'))
@yield('contact')
@endsection
