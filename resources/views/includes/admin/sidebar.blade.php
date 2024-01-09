<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Панель управления</li>
        <li class="nav-item">
            <a href="{{ @route('admin.users') }}" class="nav-link white-text active">
                <i class="nav-icon fa-solid fa-users"></i>
                <p>
                    Пользователи
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ @route('admin.trenings') }}" class="nav-link white-text">
                <i class="nav-icon fa-solid fa-table-list"></i>
                <p>
                    Тренировки
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ @route('admin.corts') }}" class="nav-link white-text">
                <i class="nav-icon fa-solid fa-map-location-dot"></i>
                <p>
                    Корты
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ @route('admin.tactiviti') }}" class="nav-link white-text">
                <i class="nav-icon fa-solid fa-map-location-dot"></i>
                <p>
                    Записи на тренировку
                </p>
            </a>
        </li>
    </ul>
</nav>
