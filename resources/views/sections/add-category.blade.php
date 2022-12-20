@section('add-category')
    <form class="add-category" method="post" style="display: none" id="add-category" action="{{Route('addCategory')}}"
          enctype="multipart/form-data">
        @csrf
        <div class="form-group" id="form-group">
            <label for="categoryName">Название категории (будет отображено на главной стр)</label>
            <input type="text" name="categoryName" class="form-control" id="categoryName" placeholder="">
        </div>


        <div class="form-group">
            <label class="custom-file-label" for="filename">Превью изображение 1 файл</label>
            <input type="file" name="filename" class="custom-file-input" id="filename">
        </div>


        <br>

        <p>Если есть подкатегории</p>


        <input type="button" id="btn1" value="Добавить подкатегорию">
        <div class="row mt-3" id="div1" style="display:none;">
            <div class="form-group" id="form-group">
                <label for="sub-category-1">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-1" id="sub-category-1" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-1">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-1" id="sub-category-file-1">
            </div>
        </div>


        <input type="button" id="btn2" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div2" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-2">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-2" id="sub-category-2" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-2">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-2" id="sub-category-file-2">
            </div>
        </div>


        <input type="button" id="btn3" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div3" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-3">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-3" id="sub-category-3" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-3">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-3" id="sub-category-file-3">
            </div>
        </div>


        <input type="button" id="btn4" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div4" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-4">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-4" id="sub-category-4" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-4">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-4" id="sub-category-file-4">
            </div>
        </div>


        <input type="button" id="btn5" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div5" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-5">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-5" id="sub-category-5" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-5">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-5" id="sub-category-file-5">
            </div>
        </div>


        <input type="button" id="btn6" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div6" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-6">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-6" id="sub-category-6" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-6">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-6" id="sub-category-file-6">
            </div>
        </div>


        <input type="button" id="btn7" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div7" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-7">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-7" id="sub-category-7" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-7">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-7" id="sub-category-file-7">
            </div>
        </div>


        <input type="button" id="btn8" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div8" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-8">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-8" id="sub-category-8" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-8">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-8" id="sub-category-file-8">
            </div>
        </div>


        <input type="button" id="btn9" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div9" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-9">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-9" id="sub-category-9" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-9">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-9" id="sub-category-file-9">
            </div>
        </div>


        <input type="button" id="btn10" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div10" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-10">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-10" id="sub-category-10" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-10">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-10" id="sub-category-file-10">
            </div>
        </div>


        <input type="button" id="btn11" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div11" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-11">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-11" id="sub-category-11" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-11">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-11" id="sub-category-file-11">
            </div>
        </div>


        <input type="button" id="btn12" style="display:none;" value="Добавить подкатегорию">
        <div class="row mt-3" id="div12" style="display: none">
            <div class="form-group" id="form-group">
                <label for="sub-category-12">Название подкатегории (будет отображено в разделе
                    категории)</label>
                <input type="text" class="form-control" name="sub-category-12" id="sub-category-12" placeholder="">
            </div>


            <div class="form-group">
                <label for="sub-category-file-12">Превью изображение 1 файл</label>
                <input type="file" class="form-control-file" name="sub-category-file-12" id="sub-category-file-12">
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success mt-3">Создать</button>


        <script>
            for (let i = 1; i <= 12; i++) {
                $("#btn" + i).click(function () {
                    let b = i + 1;
                    $("#div" + i).toggle("fast", function () {
                        // Animation complete.
                    });
                    $("#btn" + b).toggle("fast", function () {
                        // Animation complete.
                    });
                });

            }
        </script>

    </form>

@endsection
