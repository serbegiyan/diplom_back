@extends('layouts.main')
@section('title')
    Заказ {{ $order->id }}
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Заказ {{ $order->id }}</h1>
                        <div class="row">
                            <a class="btn btn-primary mt-2 ml-2" href="{{ route('order.edit', $order->id) }}">Редактировать</a>
                            <form action="{{ route('order.delete', $order->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2 ml-2" type="submit" title="Удалить">Удалить заказ</button>
                            </form>
                        </div>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Заказ {{ $order->id }}</li>
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
                                        <th>Номер заказа</th>
                                        <th>Имя покупателя</th>
                                        <th>Адрес доставки</th>
                                        <th>Телефон</th>
                                        <th>Цена за весь заказ</th>
                                        <th>Дата заказа</th>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->total_price }}</td>
                                        <td>{{ $order->created_at }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr class="align-middle">
                                        <th>Превью товара</th>
                                        <th>Название товара</th>
                                        <th>Размер</th>
                                        <th>Цена за единицу</th>
                                        <th>Количество</th>
                                        <th>Итоговая цена</th>
                                        <th colspan="2" class="text-center">Действия</th>
                                    </tr>
                                    @foreach($order_items as $item)
                                        <tr class="align-middle">
                                        <td><img alt="{{ $item->product_name }}"
                                                 src="{{ asset('storage/'.$item->product_preview) }}"
                                                 style="width: 50px" ></td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ $item->size }}</td>
                                        <td>{{ $item->product_price }}</td>
                                        <td>{{ $item->count }}</td>
                                        <td>{{ $item->total_product_price }}</td>
                                            <td class="text-center"><a href="{{ route('order_items.edit', $item->id) }}" title="Редактировать"><i class="far fa-edit"></i></a></td>
                                            <td>
                                                <form action="{{ route('order_items.delete', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-danger border-0 bg-transparent text-center" type="submit" title="Удалить"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                    </tr>
                                    @endforeach
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
