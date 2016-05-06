@extends('panel.main')

@section('content')


    <div class="dev-page-content">
        <!-- page content container -->
        <div class="container">
    <div class="row row-condensed">
        <div class="col-lg-12 col-md-6">

            <div class="wrapper">

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">
            <tr>
                <th width="200" class="text-left">Изображение</th>
                <th width="150" class="text-left">Заголовок</th>
                <th>Действия</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>
                        <div class="" style="width: 160px;">
                            <a href="#" class="list-contacts-item">
                                <img src="{{route('file', [$post->filename])}}" style="width: 150px;height: 150px;">
                            </a>
                        </div>
                    </td>
                    <td class="text-left table-products">
                        <a href="#">{{$post->title}}</a>
                    </td>
                    <td>
                        <button class="btn btn-primary ">Просмотреть</button>
                        <a href="{{url('/dashboard/blog/edit/'.$post->id)}}" ><button class="btn btn-warning ">Редактировать</button></a>
                        <a href="{{url('/dashboard/blog/delete/'.$post->id)}}" ><button class="btn btn-danger ">Удалить</button></a>
                    </td>
                </tr>
            @endforeach

        </table>
        <?php echo $posts->render(); ?>
    </div>
            </div>

        </div>
    </div>
    </div>
    </div>

@endsection