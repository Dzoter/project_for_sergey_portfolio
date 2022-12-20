@section('delete-category')

    <form class="delete-category" method="post" style="display: none" id="delete-category" action="{{Route('deleteCategory')}}"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group" id="form-group">
            <label for="category-id">Список категорий:</label>
            <select name="category-id" id="category-id">
                @foreach($categories as $category)

                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
        </div>
        <br>

        <h2>Все превью категории будут удалены!</h2>
        <br>

        <button type="submit" class="btn btn-danger mt-3">Удалить</button>

    </form>

@endsection

