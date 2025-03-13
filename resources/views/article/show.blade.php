@extends('layouts.main')
@section('title')
    {{ $article->name }}
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $article->name }}</h1>
                        <div class="row">
                            <a class="btn btn-primary mt-2 ml-2" href="{{ route('article.edit', $article->id) }}">Редактировать</a>
                            <form action="{{ route('article.delete', $article->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2 ml-2" type="submit" title="Удалить">Удалить</button>
                            </form>
                        </div>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $article->name }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div>
                    <div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr class="align-middle">
                                        <td>Id</td>
                                        <td>{{ $article->id }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Название</td>
                                        <td>{{ $article->title }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Автор</td>
                                        <td>{{ $article->author }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Врезка</td>
                                        <td>{{ $article->lead }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Контент</td>
                                        <td>{{ $article->content }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Изображения</td>
                                        @if($article->preview_admin !== null)
                                            <td>Главное: <img style="height: 100px" src="{{ $article->preview_admin }} "></td>
                                        @endif
                                        @if($article->img_first_admin !== null)
                                            <td>Второе: <img style="height: 100px" src="{{ $article->img_first_admin }} "></td>
                                        @endif
                                        @if($article->img_second_admin !== null)
                                            <td>Третье: <img style="height: 100px" src="{{ $article->img_second_admin }} "></td>
                                        @endif
                                        @if($article->img_third_admin !== null)
                                            <td>Четвертое: <img style="height: 100px" src="{{ $article->img_third_admin }} "></td>
                                        @endif
                                        @if($article->img_fourth_admin !== null)
                                            <td>Пятое: <img style="height: 100px" src="{{ $article->img_fourth_admin }} "></td>
                                        @endif
                                        @if($article->img_fifth_admin !== null)
                                            <td>Шестое: <img style="height: 100px" src="{{ $article->img_fifth_admin }} "></td>
                                        @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
