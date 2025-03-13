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
                        <h1 class="m-0">Редактировать данные пользователя</h1>
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
                    <form action="{{ route('user.update', $user->id) }}" method="POST"
                          enctype="multipart/form-data">
                        <!--begin::Body-->
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Имя</label>
                                <input class="form-control" name="name"
                                       value="{{ $user->name }}" placeholder="Имя">
                                @error('message')
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" name="email"
                                       value="{{ $user->email }}" placeholder="Email">
                                @error('message')
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Пароль</label>
                                <input class="form-control" name="password"
                                       value="{{ $user->password }}" placeholder="Пароль">
                                @error('message')
                                @enderror
                            </div>
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
