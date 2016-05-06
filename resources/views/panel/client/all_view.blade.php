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
                        <h1>Список туров</h1>
                    </div>
                    <!-- ./page title -->

                    <!-- summernote plugin -->
                    <div class="wrapper ">

                        <table class="table table-bordered table-striped table-sortable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Название">Название</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Описание" >Описание</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Просмотров">Просмотров</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Дейтсвия">Дейтсвия</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($trips as $trip)
                                <tr role="row" class="odd">
                                    <td class="">{{$trip->name_trip}}</td>
                                    <td>{!! $trip->short_about_trip !!}</td>
                                    <td class="sorting_1">{{$trip->visits}}</td>
                                    <td><a href="{{url('/dashboard/trip/update/'.$trip->id)}}" class="btn btn-success">Редактировать</a> <a href="#" class="btn btn-warning">Поднять</a> <a href="#" class="btn btn-info">Выделить</a> <a href="#" class="btn btn-primary">Добавить путёвку</a> <a href="#" class="btn btn-danger">Удалить</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                    <!-- ./summernote plugin -->
                    <script>
                        CKEDITOR.replace('ckeditor');
                        CKEDITOR.replace('ckeditor1');
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