@extends('panel.main')

@section('content')

        <!-- page content -->
<div class="dev-page-content">
    <!-- page content container -->
    <div class="container">


        <div class="row row-condensed">
            <div class="col-lg-9 col-md-6">

                <div class="wrapper">


                    <div class="page-title">
                        <h1>Добавить тур</h1>
                    </div>
                    <!-- ./page title -->

                    <!-- summernote plugin -->
                    <div class="wrapper wrapper-white">

                        <form method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Горящий тур</label>
                                <div class="col-md-8">
                                    <label class="switch switch-lg">
                                        @if($trip->hot == 1)
                                            <input type="checkbox" name="hot" checked>
                                        @else
                                            <input type="checkbox" name="hot">
                                        @endif
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Название тура</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Название" name="name" value="{{$trip->name_trip}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Категория</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" data-max-options="3" name="category" style="display: none;" data-size="10" title="Выберите категориию">
                                        <option value="{{$trip->category}}" selected>{{$trip->category_name}}</option>
                                        @foreach($categorys as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Страна</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" id="country_to"  name="country_to" data-live-search="true" style="display: none;"  data-size="10" title='Выберите страну'>
                                        <option value="{{$trip->country_to}}" selected>{{$trip->country_to_name}}</option>
                                        @foreach($countrys as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Курорт</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" id="city_to" name="city_to" data-live-search="true" style="display: none;"  data-size="10" title='Выберите курорт'>
                                        <option value="{{$trip->city_to}}" selected>{{$trip->city_to_name}}</option>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Основной транспорт доставки</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" name="transport" style="display: none;"  data-size="10" title='Выберите курорт'>
                                        <option value="{{$trip->transport}}" selected>{{$trip->transport_name}}</option>
                                        <option value="1">Самолёт</option>
                                        <option value="2">Автобус</option>
                                        <option value="3">Поезд</option>
                                        <option value="4">Лайнер</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Город отправления</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" name="city_from" style="display: none;"  data-size="10" title='Выберите город отправления'>
                                        <option value="{{$trip->city_from}}" selected>{{$trip->city_from_name}}</option>
                                        <option value="79">Из Минска</option>
                                        <option value="885">Из Москвы</option>
                                        <option value="1228">Из Киева</option>
                                        <option value="508">Из Вильнюса</option>
                                        <option value="510">Из Каунаса</option>
                                        <option value="667">Из Варшавы</option>
                                        <option value="75">Из Бреста</option>
                                        <option value="950">Из Санкт-Петербурга</option>
                                        <option value="77">Из Гродно</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Тип питания</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" name="food" style="display: none;"  data-size="10">
                                        <option value="{{$trip->food}}" selected>{{$trip->food_name}}</option>
                                        <option value="0">не указан</option>
                                        <option value="1">только Завтраки</option>
                                        <option value="2">Всё включино</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Количество ночей</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Количество ночей" name="night" value="{{$trip->count_night}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Отель</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Отель" name="hotel" value="{{$trip->hotel}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Звёзд</label>
                                <div class="col-md-8">
                                    <select class="form-control selectpicker" name="hotel_start" style="display: none;"  data-size="10" title='Выберите количество звёзд'>
                                        <option value="{{$trip->hotel_star}}" selected>{{$trip->hotel_star}}</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label>Картинки</label>
                                <br>
                                <div class="pic">
                                    <input type="file" name="file[]" class="file" accept="image/jpeg,image/png,image/gif"><br>
                                </div>
                                <a class="btn btn-info" id="add_pic" href="javascript:void 0">Добавить ещё</a>
                            </div>
                            <div class="form-group">
                                <label>Краткое описание тура (до 300 символов)</label>
                                <br>
                                <textarea id="ckeditor1" name="short_about_trip"  onkeydown="textCounter2(this.form.doc_desc,this.form.grLenght2,300);" onkeyup="textCounter2(this.form.ckeditor1,this.form.grLenght2,300);">
                                    {{$trip->short_about_trip}}
                                </textarea>
                                <p>Длина: <input readonly="readonly"  type="text" name="grLenght2" size="3" maxlength="3" value="0" /> (Максимум <b>300</b> символов)</p>
                            </div>
                            <div class="form-group">
                                <label>Подробное описание тура (до 10 000 символов)</label>
                                <br>
                                <textarea id="ckeditor" name="full_about_trip"   onkeydown="textCounter2(this.form.full_about_trip,this.form.grLenght1,10000);" onkeyup="textCounter2(this.form.full_about_trip,this.form.grLenght1,10000);">
                                     {{$trip->full_about_trip}}
                                </textarea>
                                <p>Длина: <input readonly="readonly"  type="text" name="grLenght1" size="3" maxlength="3" value="0" /> (Максимум <b>10 000</b> символов)</p>
                            </div>









                            <div class="form-group">
                                <input type="submit" value="Обновить" class="btn btn">
                            </div>
                        </form>

                    </div>
                    <!-- ./summernote plugin -->
                    <script>
                        CKEDITOR.replace( 'ckeditor1');
                        function textCounter2(field, countfield, maxlimit)
                        {
                            if (field.value.length > maxlimit) // if too long...trim it!
                                field.value=field.value.substring(0, maxlimit);
                            else  // otherwise, update counter
                                countfield.value=field.value.length;
                        }
                        var editor = CKEDITOR.instances.ckeditor1;
                        editor.on( 'key', function( evt ){
                            // Update the counter with text length of editor HTML output.
                            textCounter2( { value : evt.editor.getData() },this.form.grLenght2, 300 );
                        }, editor.element.$ );
                        // Whether content has exceeded the maximum characters.
                        var locked;
                        editor.on( 'key', function( evt ){

                            var currentLength = editor.getData().length,
                                    maximumLength = 300;
                            if( currentLength >= maximumLength )
                            {
                                if ( !locked )
                                {
                                    // Record the last legal content.
                                    editor.fire( 'saveSnapshot' ), locked = 1;
                                    // Cancel the keystroke.
                                    evt.cancel();
                                }
                                else
                                // Check after this key has effected.
                                    setTimeout( function()
                                    {
                                        // Rollback the illegal one.
                                        if( editor.getData().length > maximumLength )
                                            editor.execCommand( 'undo' );
                                        else
                                            locked = 0;
                                    }, 0 );
                            }
                        });

                        CKEDITOR.replace('ckeditor');
                        function textCounter1(field, countfield, maxlimit)
                        {
                            if (field.value.length > maxlimit) // if too long...trim it!
                                field.value=field.value.substring(0, maxlimit);
                            else  // otherwise, update counter
                                countfield.value=field.value.length;
                        }
                        var editore = CKEDITOR.instances.ckeditor;
                        editore.on( 'key', function( evt ){
                            // Update the counter with text length of editor HTML output.
                            textCounter1( { value : evt.editor.getData() },this.form.grLenght1, 10000 );
                        }, editore.element.$ );
                        // Whether content has exceeded the maximum characters.
                        var lockede;
                        editore.on( 'key', function( evt ){

                            var currentLength = editore.getData().length,
                                    maximumLength =10000;
                            if( currentLength >= maximumLength )
                            {
                                if ( !lockede )
                                {
                                    // Record the last legal content.
                                    editore.fire( 'saveSnapshot' ), lockede = 1;
                                    // Cancel the keystroke.
                                    evt.cancel();
                                }
                                else
                                // Check after this key has effected.
                                    setTimeout( function()
                                    {
                                        // Rollback the illegal one.
                                        if( editore.getData().length > maximumLength )
                                            editore.execCommand( 'undo' );
                                        else
                                            lockede = 0;
                                    }, 0 );
                            }
                        });
                    </script>


                </div>

            </div>

        </div>



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
<!-- ./page content -->
<?php
//НЕ УДАЛЯТЬ ЭТОТ DIV
?>
</div>
<!-- ./page container -->

@endsection