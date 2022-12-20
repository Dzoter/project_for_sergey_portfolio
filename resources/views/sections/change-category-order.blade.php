@section('change-category-order')

    <form class="change-category-order" method="post" style="display: none" id="change-category-order"
          action="{{Route('changeCategoryOrder')}}"
          enctype="multipart/form-data">
        @csrf

        <div class="form-group" id="form-group">
            <label for="category-id">Список категорий:</label>
            <div class="form-group flex-column">
                @foreach($categories as $category)
                    <div>
                        <label for="{{$category->id}}" >{{$category->name}}</label>
                        <input name="{{$category->id}}"  value="{{$category->order}}">
                    </div>
                    <br>
                @endforeach
            </div>
        </div>
        <br>
        <button class=" btn btn-success" type="submit">Отправить</button>
    </form>
@endsection

