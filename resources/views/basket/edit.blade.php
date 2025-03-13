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
                        <h1 class="m-0">Редактировать данные продукта</h1>
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
                    <form action="{{ route('product.update', $product->id) }}" method="POST"
                          enctype="multipart/form-data">
                        <!--begin::Body-->
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Артикул</label>
                                <input class="form-control" name="article"
                                       value="{{ $product->article }}" placeholder="Артикул">
                                @error('message')
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Название</label>
                                <input class="form-control" name="name"
                                       value="{{ $product->name }}" placeholder="Название">
                                @error('message')
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Цена</label>
                                <input class="form-control" name="price"
                                       value="{{ $product->price }}" placeholder="Цена">
                                @error('message')
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Тип одежды</label>
                                <select name="type" class="custom-select rounded-0">
                                    <option value="{{ $product->type }}" selected>{{ $product->type }}</option>
                                    <option value="pубашка">Рубашка</option>
                                    <option value="футболка">Футболка</option>
                                    <option value="trouser">Брюки</option>
                                    <option value="blouse">Блузка</option>
                                    <option value="skirt">Юбка</option>
                                    <option value="dress">Платье</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Пол</label>
                                <select name="gender" class="custom-select rounded-0">
                                    <option value="{{ $product->gender }}" selected>{{ $product->gender }}</option>
                                    <option value="мужской">Мужской</option>
                                    <option value="женский">Женский</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Сезон ношения одежды</label>
                                <select name="season" class="custom-select rounded-0">
                                    <option value="{{ $product->season }}" selected>{{ $product->season }}</option>
                                    <option value="лето">Лето</option>
                                    <option value="зима">Зима</option>
                                    <option value="демисезон">Демисезон</option>
                                </select>
                            </div>
                            <div class="form-group card">
                                <p class="ml-3 mt-2"><strong>Состав одежды</strong></p>
                                <div class="row">
                                    <div class="form-group mb-3 ml-3">
                                        <label class="form-label ml-1">Хлопок</label>
                                        <input type="number" class="form-control" name="cotton"
                                               value="{{ $product->composition->cotton }}" placeholder="Хлопок">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">Вискоза</label>
                                        <input type="number" class="form-control" name="viscose"
                                               value="{{ $product->composition->viscose }}" placeholder="Вискоза">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">Эластан</label>
                                        <input type="number" class="form-control" name="elastane"
                                               value="{{ $product->composition->elastane }}" placeholder="Эластан">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">Шерсть</label>
                                        <input type="number" class="form-control" name="wool"
                                               value="{{ $product->composition->wool }}" placeholder="Шерсть">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">Полиэстер</label>
                                        <input type="number" class="form-control" name="polyester"
                                               value="{{ $product->composition->polyester }}" placeholder="Полиэстер">
                                        @error('message')
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group card">
                                <p class="ml-3 mt-2"><strong>Количество продукта по размерам</strong></p>
                                <div class="row">
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">XS</label>
                                        <input type="number" class="form-control" name="XS"
                                               value="{{ $product->size->XS }}" placeholder="XS">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">S</label>
                                        <input type="number" class="form-control" name="S"
                                               value="{{ $product->size->S }}" placeholder="S">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">M</label>
                                        <input type="number" class="form-control" name="M"
                                               value="{{ $product->size->M }}" placeholder="M">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">L</label>
                                        <input type="number" class="form-control" name="L"
                                               value="{{ $product->size->L }}" placeholder="L">
                                        @error('message')
                                        @enderror
                                    </div>
                                    <div class="mb-3 ml-3">
                                        <label class="form-label ml-1">XL</label>
                                        <input type="number" class="form-control" name="XL"
                                               value="{{ $product->size->XL }}" placeholder="XL">
                                        @error('message')
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group card">
                                <div class="pl-3 pt-3">
                                    @if($product->image->main_img_path != null)
                                        <img style="height: 200px" alt="главное изображение"
                                             src="{{ asset('storage/'.$product->image->main_img_path) }} ">
                                    @else<p><b>Изображение не загружено</b></p>
                                    @endif
                                </div>
                                <label class="pl-3" for="exampleInputFile">Изменить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="main_img" class="custom-file-input">
                                        <label class="custom-file-label">Выберите файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузить</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group card">
                                <div class="pl-3 pt-3">
                                    @if($product->image->second_img_path != null)
                                    <img style="height: 200px" alt="#"
                                         src="{{ asset('storage/'.$product->image->second_img_path) }} ">
                                    @else<p><b>Изображение не загружено</b></p>
                                    @endif
                                </div>
                                <label class="pl-3" for="exampleInputFile">Изменить второе изображение</label>
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
                            <div class="form-group card">
                                <div class="pl-3 pt-3">
                                    @if($product->image->third_img_path != null)
                                        <img style="height: 200px" alt="#"
                                             src="{{ asset('storage/'.$product->image->third_img_path) }} ">
                                    @else<p><b>Изображение не загружено</b></p>
                                    @endif
                                </div>
                                <label class="pl-3" for="exampleInputFile">Изменить третье изображение</label>
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
                            <div class="form-group card">
                                <div class="pl-3 pt-3">
                                    @if($product->image->fourth_img_path != null)
                                        <img style="height: 200px" alt="#"
                                             src="{{ asset('storage/'.$product->image->fourth_img_path) }} ">
                                    @else<p><b>Изображение не загружено</b></p>
                                    @endif
                                </div>
                                <label class="pl-3" for="exampleInputFile">Изменить четвертое изображение</label>
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
                            <div class="form-group card">
                                <div class="pl-3 pt-3">
                                    @if($product->image->model_img_path != null)
                                        <img style="height: 200px" alt="#"
                                             src="{{ asset('storage/'.$product->image->model_img_path) }} ">
                                    @else<p><b>Изображение не загружено</b></p>
                                    @endif
                                </div>
                                <label class="pl-3" for="exampleInputFile">Изменить изображение для модели</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="model_img" class="custom-file-input">
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
