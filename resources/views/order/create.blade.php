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
                        <h1 class="m-0">Добавить продукт</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавить продукт</li>
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
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        <!--begin::Body-->
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Артикул</label>
                                <input class="form-control" name="article"
                                       value="{{ old('article') }}" placeholder="Артикул">
                                @error('article')
                                <p class="text-danger">Поле "Артикул" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Название</label>
                                <input class="form-control" name="name"
                                       value="{{ old('name') }}" placeholder="Название">
                                @error('name')
                                <p class="text-danger">Поле "Название" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Цена</label>
                                <input class="form-control" name="price"
                                       value="{{ old('price') }}" placeholder="Цена">
                                @error('price')
                                <p class="text-danger">Поле "Цена" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите тип одежды</label>
                                <select name="type" class="custom-select rounded-0">
                                    <option disabled selected>Тип одежды</option>
                                    <option value="pубашка">Рубашка</option>
                                    <option value="футболка">Футболка</option>
                                    <option value="брюки">Брюки</option>
                                    <option value="блузка">Блузка</option>
                                    <option value="юбка">Юбка</option>
                                    <option value="платье">Платье</option>
                                </select>
                                @error('type')
                                <p class="text-danger">Поле "Тип одежды" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите пол</label>
                                <select name="gender" class="custom-select rounded-0">
                                    <option disabled selected>Пол</option>
                                    <option value="мужской">Мужской</option>
                                    <option value="женский">Женский</option>
                                </select>
                                @error('gender')
                                <p class="text-danger">Поле "Пол" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Выберите сезон ношения одежды</label>
                                <select name="season" class="custom-select rounded-0">
                                    <option disabled selected>Сезон</option>
                                    <option value="лето">Лето</option>
                                    <option value="зима">Зима</option>
                                    <option value="демисезон">Демисезон</option>
                                </select>
                                @error('season')
                                <p class="text-danger">Поле "Сезон" обязательно для заполнения</p>
                                @enderror
                            </div>
                                <p><strong>Укажите состав одежды</strong></p>
                            <div class="row">
                                <div class="mb-3 mr-2">
                                    <label class="form-label">Хлопок</label>
                                    <input type="number" class="form-control" name="cotton"
                                           value="{{ old('cotton') }}" placeholder="Хлопок">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">Вискоза</label>
                                    <input type="number" class="form-control" name="viscose"
                                           value="{{ old('viscose') }}" placeholder="Вискоза">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">Эластан</label>
                                    <input type="number" class="form-control" name="elastane"
                                           value="{{ old('elastane') }}" placeholder="Эластан">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">Шерсть</label>
                                    <input type="number" class="form-control" name="wool"
                                           value="{{ old('wool') }}" placeholder="Шерсть">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Полиэстер</label>
                                    <input type="number" class="form-control" name="polyester"
                                           value="{{ old('polyester') }}" placeholder="Полиэстер">
                                </div>
                            </div>
                            <p><strong>Укажите количество продукта по размерам</strong></p>
                            <div class="row">
                                <div class="mb-3 mr-2">
                                    <label class="form-label">XS</label>
                                    <input type="number" class="form-control" name="XS"
                                           value="{{ old('XS') }}" placeholder="XS">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">S</label>
                                    <input type="number" class="form-control" name="S"
                                           value="{{ old('S') }}" placeholder="S">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">M</label>
                                    <input type="number" class="form-control" name="M"
                                           value="{{ old('M') }}" placeholder="M">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">L</label>
                                    <input type="number" class="form-control" name="L"
                                           value="{{ old('L') }}" placeholder="L">
                                </div>
                                <div class="mb-3 mr-2">
                                    <label class="form-label">XL</label>
                                    <input type="number" class="form-control" name="XL"
                                           value="{{ old('XL') }}" placeholder="XL">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="main_img" class="custom-file-input">
                                        <label class="custom-file-label">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('main_img')
                                <p class="text-danger">Поле "Главное изображение" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить второе изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="second_img" class="custom-file-input">
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
                                        <input type="file" name="third_img" class="custom-file-input">
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
                                        <input type="file" name="fourth_img" class="custom-file-input">
                                        <label class="custom-file-label">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Добавить изображение для модели</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="model_img" class="custom-file-input">
                                        <label class="custom-file-label">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                                @error('model_img')
                                <p class="text-danger">Поле "Изображение для модели" обязательно для заполнения</p>
                                @enderror
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
