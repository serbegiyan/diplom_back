@extends('layouts.main')
@section('title')
    Корзины
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Корзины</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Корзины</li>
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
                    <a href="{{ route('basket.create') }}" class="btn btn-primary mb-3 ml-2">Добавить</a>
                </div>
                <div>
                    <div>
                        <div>
                            <div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px" class="text-center">id</th>
                                        <th class="text-center">Номер юзера</th>
                                        <th class="text-center">product_id</th>
                                        <th colspan="3" class="text-center">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($baskets as $basket)
                                        <tr class="align-middle">
                                            <td class="text-center">{{ $basket->id }}</td>
                                            <td class="text-center">{{ $basket->user_identifier }}</td>
                                            <td class="text-center">{{ $basket->product_id }}</td>
                                            <td class="text-center"><a href="{{ route('basket.show', $basket->id) }}" title="Просмотреть"><i class="fas fa-eye"></i></a></td>
                                            <td class="text-center"><a href="{{ route('basket.edit', $basket->id) }}" title="Редактировать"><i class="far fa-edit"></i></a></td>
                                            <td>
                                                <form action="{{ route('article.delete', $basket->id) }}" method="POST">
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
