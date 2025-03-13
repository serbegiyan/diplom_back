@extends('layouts.main')
@section('title')
    {{ $product->name }}
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $product->name }}</h1>
                        <div class="row">
                            <a class="btn btn-primary mt-2 ml-2" href="{{ route('product.edit', $product->id) }}">Редактировать</a>
                            <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2 ml-2" type="submit" title="Удалить">Удалить</button>
                            </form>
                        </div>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $product->name }}</li>
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
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Артикул</td>
                                        <td>{{ $product->article }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Название</td>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Цена</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Тип</td>
                                        <td>{{ $product->type }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Пол</td>
                                        <td>{{ $product->gender }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Сезон</td>
                                        <td>{{ $product->season }}</td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Состав</td>
                                        @if($product->composition->cotton > 0)
                                            <td>Хлопок: {{ $product->composition->cotton }}</td>
                                        @endif
                                        @if($product->composition->viscose > 0)
                                            <td>Вискоза: {{ $product->composition->viscose }}</td>
                                        @endif
                                        @if($product->composition->elastane > 0)
                                            <td>Эластан: {{ $product->composition->elastane }}</td>
                                        @endif
                                        @if($product->composition->wool > 0)
                                            <td>Шерсть: {{ $product->composition->wool }}</td>
                                        @endif
                                        @if($product->composition->polyester > 0)
                                            <td>Полиэстер: {{ $product->composition->polyester }}</td>
                                        @endif
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Количество по размерам</td>
                                        @if($product->size->XS > 0)
                                            <td>XS: {{ $product->size->XS }}</td>
                                        @endif
                                        @if($product->size->S > 0)
                                            <td>S: {{ $product->size->S }}</td>
                                        @endif
                                        @if($product->size->M > 0)
                                            <td>M: {{ $product->size->M }}</td>
                                        @endif
                                        @if($product->size->L > 0)
                                            <td>L: {{ $product->size->L }}</td>
                                        @endif
                                        @if($product->size->XL > 0)
                                            <td>XL: {{ $product->size->XL }}</td>
                                        @endif
                                    </tr>
                                    <tr class="align-middle">
                                        <td>Изображения</td>
                                        @if($product->image->main_img_path !== null)
                                            <td>Главное: <img alt="#" style="height: 100px" src="{{ asset('storage/'.$product->image->main_img_path) }} "></td>
                                        @endif
                                        @if($product->image->second_img_path !== null)
                                            <td>Второе: <img alt="#" style="height: 100px" src="{{ asset('storage/'.$product->image->second_img_path) }} "></td>
                                        @endif
                                        @if($product->image->third_img_path !== null)
                                            <td>Третье: <img alt="#" style="height: 100px" src="{{ asset('storage/'.$product->image->third_img_path) }} "></td>
                                        @endif
                                        @if($product->image->fourth_img_path !== null)
                                            <td>Четвертое: <img alt="#" style="height: 100px" src="{{ asset('storage/'.$product->image->fourth_img_path) }} "></td>
                                        @endif
                                        @if($product->image->model_img_path !== null)
                                            <td>Модельное: <img alt="#" style="height: 100px" src="{{ asset('storage/'.$product->image->model_img_path) }} "></td>
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
