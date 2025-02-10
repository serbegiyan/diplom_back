@extends('layouts.main')
@section('title')
    Продукты
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Продукты</a></li>
                        <li class="breadcrumb-item active">Продукты</li>
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
                <a href="{{ route('product.create') }}" class="btn btn-primary mb-3 ml-2">Добавить</a>
            </div>
                <div>
                    <div>
                    <div>
                        <div>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px" class="text-center">id</th>
                                    <th class="text-center">Превью</th>
                                    <th class="text-center">Артикул</th>
                                    <th class="text-center">Название</th>
                                    <th class="text-center">Тип</th>
                                    <th class="text-center">Пол</th>
                                    <th class="text-center">Сезон</th>
                                    <th class="text-center">Цена</th>
                                    <th colspan="3" class="text-center">Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr class="align-middle">
                                        <td class="text-center">{{ $product->id }}</td>
                                        <td><a href="{{ route('product.show', $product->id) }}"><img style="height: 40px" class="ml-4" src="{{ asset('storage/'.$product->image->main_img_path) }}"></a></td>
                                        <td class="text-center">{{ $product->article }}</td>
                                        <td class="text-center">{{ $product->name }}</td>
                                        <td class="text-center">{{ $product->type }}</td>
                                        <td class="text-center">{{ $product->gender }}</td>
                                        <td class="text-center">{{ $product->season }}</td>
                                        <td class="text-center">{{ $product->price }}</td>
                                        <td class="text-center"><a href="{{ route('product.show', $product->id) }}" title="Просмотреть"><i class="fas fa-eye"></i></a></td>
                                        <td class="text-center"><a href="{{ route('product.edit', $product->id) }}" title="Редактировать"><i class="far fa-edit"></i></a></td>
                                        <td>
                                            <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-danger border-0 bg-transparent text-center" type="submit" title="Удалить"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div>

                                    </div>
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
