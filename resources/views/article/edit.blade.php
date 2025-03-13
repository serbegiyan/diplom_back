@extends('layouts.main')
@section('title')
    Редактировать
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать статью</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Редактировать</li>
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
                <div class="row">
                    <form action="{{ route('article.update', $article->id) }}" method="POST"
                          enctype="multipart/form-data">
                        <!--begin::Body-->
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Название</label>
                                <input class="form-control" name="title"
                                       value="{{ $article->title }}" placeholder="Название">
                                @error('message')
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Автор</label>
                                <input class="form-control" name="author"
                                       value="{{ $article->author }}" placeholder="Автор">
                                @error('message')
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Врезка</label>
                                <input class="form-control" name="lead"
                                       value="{{ $article->lead }}" placeholder="Врезка">
                                @error('message')
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Контент</label>
                                <input class="form-control" name="content"
                                       value="{{ $article->content }}" placeholder="Контент">
                            </div>
                            <div class="form-group card">
                                <div class="pl-3 pt-3">
                                    @if($article->preview_admin != null)
                                        <img style="height: 200px" alt="#"
                                             src="{{ $article->preview_admin }} ">
                                    @else
                                        <p><b>Изображение не загружено</b></p>
                                    @endif
                                </div>
                                <label class="pl-3" for="exampleInputFile">Изменить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="preview_admin" class="custom-file-input">
                                        <label class="custom-file-label">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                <div class="form-group card">
                                    <div class="pl-3 pt-3">
                                        @if($article->img_first_admin != null)
                                            <img style="height: 200px" alt="#"
                                                 src="{{ $article->img_first_admin }} ">
                                        @else
                                            <p><b>Изображение не загружено</b></p>
                                        @endif
                                    </div>
                                    <label class="pl-3" for="exampleInputFile">Изменить второе изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img_first_admin" class="custom-file-input">
                                            <label class="custom-file-label">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group card">
                                    <div class="pl-3 pt-3">
                                        @if($article->img_second_admin != null)
                                            <img style="height: 200px" alt="#"
                                                 src="{{ $article->img_second_admin }} ">
                                        @else
                                            <p><b>Изображение не загружено</b></p>
                                        @endif
                                    </div>
                                    <label class="pl-3" for="exampleInputFile">Изменить третье изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img_second_admin" class="custom-file-input">
                                            <label class="custom-file-label">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group card">
                                    <div class="pl-3 pt-3">
                                        @if($article->img_third_admin != null)
                                            <img style="height: 200px" alt="#"
                                                 src="{{ $article->img_third_admin }} ">
                                        @else
                                            <p><b>Изображение не загружено</b></p>
                                        @endif
                                    </div>
                                    <label class="pl-3" for="exampleInputFile">Изменить четвертое изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img_third_admin" class="custom-file-input">
                                            <label class="custom-file-label">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group card">
                                    <div class="pl-3 pt-3">
                                        @if($article->img_fourth_admin != null)
                                            <img style="height: 200px" alt="#"
                                                 src="{{ $article->img_fourth_admin }} ">
                                        @else
                                            <p><b>Изображение не загружено</b></p>
                                        @endif
                                    </div>
                                    <label class="pl-3" for="exampleInputFile">Изменить пятое изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img_fourth_admin" class="custom-file-input">
                                            <label class="custom-file-label">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group card">
                                    <div class="pl-3 pt-3">
                                        @if($article->img_fifth_admin != null)
                                            <img style="height: 200px" alt="#"
                                                 src="{{ $article->img_fifth_admin }} ">
                                        @else
                                            <p><b>Изображение не загружено</b></p>
                                        @endif
                                    </div>
                                    <label class="pl-3" for="exampleInputFile">Изменить шестое изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img_fifth_admin" class="custom-file-input">
                                            <label class="custom-file-label">Выберите файл</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузить</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                                <!--end::Footer-->
                            </div>
                    </form>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
