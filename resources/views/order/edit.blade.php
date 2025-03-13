@extends('layouts.main')
@section('title')
    Редактировать заказ
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать заказ № {{ $order->id }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Редактировать заказ</li>
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
                    <form action="{{ route('order.update', $order->id) }}" method="POST"
                          enctype="multipart/form-data" class="w-full">
                        <!--begin::Body-->
                        @csrf
                        @method('PATCH')
                        <div class="ml-2">
                            <p class="mb-0">Имя покупателя</p>
                            <input name="name" class="mb-3"
                                   value="{{ $order->name }}" placeholder="Имя покупателя">
                            <p class="mb-0">Адрес доставки</p>
                            <input name="address" class="mb-3"
                                   value="{{ $order->address }}" placeholder="Адрес доставки">
                            <p class="mb-0">Телефон</p>
                            <input name="phone" class="mb-3"
                                   value="{{ $order->phone }}" placeholder="Телефон">
                            <p class="mb-0">Цена за весь заказ</p>
                            <input name="total_price" class="mb-3"
                                   value="{{ $order->total_price }}" placeholder="Цена за весь заказ">
                            <p class="mb-0">Дата заказа</p>
                            <input name="created_at" class="mb-3"
                                   value="{{ $order->created_at }}" placeholder="Дата заказа">
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
