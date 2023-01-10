<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link" style="width: 100%;">
        <div style="width: 100%;height:40px;display: flex;justify-content:center;align-items:center">
            <img src="{{asset('/images/expodetalles_white.png')}}"
             alt="Expo Detalles"
             class="brand-image ">
        </div>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>
