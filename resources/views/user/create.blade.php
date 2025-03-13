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
                        <h1 class="m-0">Добавить пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавить пользователя</li>
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
                    <form action="{{ route('user.store') }}" method="POST">
                        <!--begin::Body-->
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Имя</label>
                                <input class="form-control" name="name"
                                       value="{{ old('name') }}" placeholder="Имя">
                                @error('name')
                                <p class="text-danger">Поле "Имя" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" name="email"
                                       value="{{ old('email') }}" placeholder="Email">
                                @error('Email')
                                <p class="text-danger">Поле "Email" обязательно для заполнения</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Пароль</label>
                                <input class="form-control" name="password"
                                       value="{{ old('password') }}" placeholder="Пароль">
                                @error('password')
                                <p class="text-danger">Поле "Пароль" обязательно для заполнения</p>
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
