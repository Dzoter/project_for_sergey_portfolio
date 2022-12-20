@extends('layout.layout')

@section('content')



    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <button type="button" id="add-category-btn" class="btn btn-primary">Добавить категорию</button>
        </li>
        <li class="nav-item">
            <button type="button" id="add-img-btn" class="btn btn-info">Добавить изображения в подкатегорию</button>
        </li>
        <li class="nav-item">
            <button type="button" id="add-subcategory-btn" class="btn btn-success">Добавить подкатегорию в категорию
            </button>
        </li>
        <li class="nav-item">
            <button type="button" id="delete-subcategory-btn" class="btn btn-danger">Удалить подкатегорию</button>
        </li>
        <li class="nav-item">
            <button type="button" id="delete-category-btn" class="btn btn-danger">Удалить категорию</button>
        </li>
        <a href="{{route('logout')}}">Выйти</a>
    </ul>
    <br>

    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <button type="button" id="change-category-btn" class="btn btn-primary">Изменить порядок категорий</button>
        </li>
        <li class="nav-item">
            <button type="button" id="change-sub-category-btn" class="btn btn-primary">Изменить порядок под категорий</button>
        </li>


    </ul>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <br>
    <br>
    <br>
    <br>


    @yield('add-category', View::make('sections.add-category'))
    @yield('add-category')

    @yield('img-to-subcategory', View::make('sections.img-to-subcategory',['subcategories'=>$subcategories]))
    @yield('img-to-subcategory')

    @yield('add-subcategory', View::make('sections.add-subcategory',['categories'=>$categories]))
    @yield('add-subcategory')

    @yield('delete-subcategory', View::make('sections.delete-subcategory',['subcategories'=>$subcategories]))
    @yield('delete-subcategory')

    @yield('delete-category', View::make('sections.delete-category',['categories'=>$categories]))
    @yield('delete-category')

    @yield('change-category-order', View::make('sections.change-category-order',['categories'=>$categories]))
    @yield('change-category-order')

    @yield('change-sub-category-order', View::make('sections.change-subcategory-order',['categories'=>$categories]))
    @yield('change-sub-category-order')


    <script>
        $("#add-category-btn").click(function () {
            $("#add-category").toggle("fast", function () {
                // Animation complete.
            });
        });

        $("#add-img-btn").click(function () {
            $("#add-img").toggle("fast", function () {

            });
        });

        $("#add-subcategory-btn").click(function () {
            $("#add-subcategory").toggle("fast", function () {
                console.log('click')
            });
        });

        $("#delete-subcategory-btn").click(function () {
            $("#delete-subcategory").toggle("fast", function () {
                console.log('click')
            });
        });

        $("#delete-category-btn").click(function () {
            $("#delete-category").toggle("fast", function () {
                console.log('click')
            });
        });

        $("#change-category-btn").click(function () {
            $("#change-category-order").toggle("fast", function () {
                console.log('click')
            });
        });

        $("#change-sub-category-btn").click(function () {
            $("#change-subcategory-order").toggle("fast", function () {
                console.log('click')
            });
        });

    </script>


@endsection
