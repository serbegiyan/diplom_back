@extends('layouts.main')
@section('title')
    Редактировать позицию заказа
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать позицию заказа</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('order.index') }}">Заказы</a></li>
                            <li class="breadcrumb-item active">Редактировать позицию заказа</li>
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
                    <form action="{{ route('order_items.update', $orderItems->id) }}" method="POST"
                          enctype="multipart/form-data" class="w-full">
                        <!--begin::Body-->
                        @csrf
                        @method('PATCH')
                        <div class="ml-2">
                            <p class="mb-0">Номер заказа</p>
                            <input name="order_id" class="mb-3" value="{{ $orderItems->order_id }}">
                            <p class="mb-0">ID товара</p>
                            <input name="product_id" class="mb-3"
                                   value="{{ $orderItems->product_id }}" placeholder="ID товара">
                            <p class="mb-0">Название товара</p>
                            <input name="product_name" class="mb-3"
                                   value="{{ $orderItems->product_name }}" placeholder="Название товара">
                            <p class="mb-0">Размер</p>
                            <input name="size" class="mb-3"
                                   value="{{ $orderItems->size }}" placeholder="Размер">
                            <p class="mb-0">Цена за единицу</p>
                            <input name="product_price" class="mb-3"
                                   value="{{ $orderItems->product_price }}" placeholder="Цена за единицу">
                            <p class="mb-0">Количество</p>
                            <input name="count" class="mb-3"
                                   value="{{ $orderItems->count }}" placeholder="Количество">
                            <p class="mb-0">Итоговая цена</p>
                            <input name="total_product_price" class="mb-3"
                                   value="{{ $orderItems->total_product_price }}" placeholder="Итоговая цена">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                        <!--end::Footer-->
                </form>
            </div>
            <!-- /.row -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
