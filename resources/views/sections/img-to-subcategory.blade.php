@section('img-to-subcategory')

    <form class="add-img" method="post" style="display: none" id="add-img" action="{{Route('addImg')}}"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group" id="form-group">
            <label for="subcategory-id">Список подкатегорий:</label>
            <select name="subcategory-id" id="subcategory-id">
                @foreach($subcategories as $category)

                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
        </div>

        <br>
        <div class="form-group">
            <label class="custom-file-label" for="files">изображения множество файлов</label>
            <input type="file" name="files[]" multiple class="custom-file-input" id="files">
        </div>
        <br>
        <button type="submit" class="btn btn-success mt-3">Добавить</button>

    </form>

@endsection

