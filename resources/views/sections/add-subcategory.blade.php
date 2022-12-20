@section('add-subcategory')

    <form class="add-subcategory" method="post" style="display: none" id="add-subcategory" action="{{Route('addSubcategory')}}"
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

            <div class="form-group" id="form-group">
                <label for="sub-category-name">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-name" id="sub-category-name" placeholder="">
            </div>


        <br>
        <div class="form-group">
            <label class="custom-file-label" for="files">Превью для подкатегории</label>
            <input type="file" name="files" class="custom-file-input" id="files">
        </div>
        <br>
        <button type="submit" class="btn btn-success mt-3">Добавить</button>

    </form>

@endsection

