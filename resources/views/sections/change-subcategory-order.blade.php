@section('change-sub-category-order')
    <form class="change-category-order" method="post" style="display: none" id="change-subcategory-order"
          action="{{Route('changeSubCategoryOrder')}}"
          enctype="multipart/form-data">
        @csrf

        <div class="form-group" id="form-group">
            <label for="category-id">Список категорий:</label>
            <br>
            <div class="form-group flex-column">
                @foreach($categories as $category)
                    <?php $subcategories = \App\Models\Subcategories::where('categories_id', $category->id)->get() ?>
                    <button type="button" class="btn btn-warning">{{$category->name}}</button>
                    @foreach($subcategories as $subcategory)
                        <div>
                            <label for="{{$subcategory->id}}">{{$subcategory->name}}</label>
                            <input name="{{$subcategory->id}}" value="{{$subcategory->order}}">
                        </div>
                        <br>
                    @endforeach
                    <br>
                @endforeach
            </div>
        </div>
        <br>
        <button class=" btn btn-success" type="submit">Отправить</button>
    </form>
@endsection

