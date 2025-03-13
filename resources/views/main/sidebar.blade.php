<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    Главная
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    Пользователи
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-tshirt"></i>
                    Продукты
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('order.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                    Заказы
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('article.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                    Статьи
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
