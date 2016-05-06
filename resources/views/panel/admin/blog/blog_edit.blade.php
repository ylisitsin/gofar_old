@extends('panel.main')

@section('content')
        <!-- page content -->
<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">

        <!-- page title -->
        <div class="page-title">
            <h1>Добавить запись</h1>
        </div>
        <!-- ./page title -->

        <!-- summernote plugin -->
        <div class="wrapper wrapper-white">

            <form method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label class="col-md-2 control-label">Заголовок</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Заголовок" name="title" value="{{$result->title}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Категория</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" placeholder="Категория" name="category" value="{{$result->category}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Тэги</label>
                    <div class="col-md-8">
                        <input type="text" class="tags"  placeholder="Тэги" name="tag" value="{{$result->tag}}">
                    </div>
                </div>
                <div class="form-group">
                    <img src="{{route('file', [$result->filename])}}" STYLE="width: 200px;height: 200px;">
                </div>
                <div class="form-group">
                    <label>Изменить картинку</label>
                    <br>
                    <input type="file" name="file" class="file" value="{{route('file', [$result->filename])}}" accept="image/jpeg,image/png,image/gif">
                </div>
                <div class="form-group">
                    <label>пре-текст</label>
                    <br>
                    <textarea id="ckeditor1" name="pre_post_content">{{$result->pre_text}}</textarea>
                </div>
                <div class="form-group">
                    <label>основной текст</label>
                    <br>
                    <textarea id="ckeditor" name="post_content">{{$result->text}}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Обновить" class="btn btn">
                </div>
            </form>

        </div>
        <!-- ./summernote plugin -->
        <script>
            CKEDITOR.replace('ckeditor');
            CKEDITOR.replace('ckeditor1');
        </script>
        <!-- Copyright -->
        <div class="copyright">
            <div class="pull-left">
                &copy; <?php echo date('Y'); ?> <strong>Gofar.by</strong>. Все права защищены.
            </div>
            <div class="pull-right">
                <a href="#">Terms of use</a> / <a href="#">Privacy Policy</a>
            </div>
        </div>
        <!-- ./Copyright -->
    </div>
    <!-- ./page content container -->

</div>
<!-- ./page content container -->
</div>
<!-- ./page container -->
@endsection