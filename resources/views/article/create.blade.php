@extends('layouts.main')
@section('title')
    Добавить
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить статью</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавить статью</li>
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
                    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                        <!--begin::Body-->
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Название</label>
                                <input class="form-control" name="title"
                                       value="{{ old('title') }}" placeholder="Название">
                                @error('title')
                                <p class="text-danger">Поле "Название" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Автор</label>
                                <input class="form-control" name="author"
                                       value="{{ old('author') }}" placeholder="Автор">
                                @error('author')
                                <p class="text-danger">Поле "Автор" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Врезка</label>
                                <input class="form-control" name="lead"
                                       value="{{ old('lead') }}" placeholder="Врезка">
                                @error('lead')
                                <p class="text-danger">Поле "Врезка" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Контент</label>
                                <textarea class="form-control" name="content" placeholder="Контент"></textarea>
                                @error('content')
                                <p class="text-danger">Поле "Контент" обязательно для заполнения</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Добавить превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="preview_admin" class="custom-file-input">
                                        <label class="custom-file-label">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('preview')
                                <p class="text-danger">Поле "Превью" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить второе изображение</label>
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
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить третье изображение</label>
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
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить четвертое изображение</label>
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
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить пятое изображение</label>
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
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить шестое изображение</label>
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
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
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
