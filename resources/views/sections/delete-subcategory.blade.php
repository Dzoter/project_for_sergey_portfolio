@section('delete-subcategory')

    <form class="delete-subcategory" method="post" style="display: none" id="delete-subcategory" action="{{Route('deleteSubCategory')}}"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group" id="form-group">
            <label for="category-id">Список под категорий:</label>
            <select name="subcategory-id" id="subcategory-id">
                @foreach($subcategories as $category)

                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
        </div>
        <br>

        <h2>Все изображения под категории будут удалены!</h2>
        <br>

        <button type="submit" class="btn btn-danger mt-3">Удалить</button>

    </form>

@endsection

