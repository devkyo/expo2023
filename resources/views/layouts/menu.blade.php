<!-- need to remove -->
<li class="nav-item">
  <a href="{{ route('dashboard') }}" class="nav-link active">
      <i class="nav-icon fas fa-home"></i>
      <p>Dashboard</p>
  </a>
</li>
<li class="nav-header">STAFF</li>
<li class="nav-item has-treeview">
  <a href="/docs/3.0/components" class="nav-link ">
      <i class="nav-icon fas fa-users"></i>
      <p> Usuarios <i class="right fas fa-angle-left"></i>
      </p>
  </a>
  <ul class="nav nav-treeview" style="display: none;">
    <li class="nav-item">
      <a href="/docs/3.0/components/main-header.html" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>Ver todos</p>
      </a>
    </li>
  </ul>
</li>




<li class="nav-header">FERIAS</li>
<li class="nav-item has-treeview">
  <a href="/docs/3.0/components" class="nav-link ">
      <i class="nav-icon fas fa-calendar-week"></i>
      <p>Formularios <i class="right fas fa-angle-left"></i>
      </p>
  </a>
  <ul class="nav nav-treeview" style="display: none;">
    <li class="nav-item">
      <a href="/docs/3.0/components/main-header.html" class="nav-link ">
        <i class="nav-icon fas fa-list-ol"></i>
        <p>Crear formulario</p>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item">
  <a href="{{ route('dashboard') }}" class="nav-link">
    <i class="nav-icon fas fa-user-tie"></i>
      <p>Visitantes</p>
  </a>
</li>
<li class="nav-item">
  <a href="{{ route('dashboard') }}" class="nav-link">
    <i class="nav-icon fas fa-qrcode"></i>
      <p>Escanear QR</p>
  </a>
</li>

<li class="nav-header">DATA</li>
<li class="nav-item">
  <a href="{{ route('dashboard') }}" class="nav-link">
    <i class="nav-icon fas fa-database"></i>
      <p>Exportar</p>
  </a>
</li>
<li class="nav-header">SETTING</li>
<li class="nav-item has-treeview">
  <a href="/docs/3.0/components" class="nav-link ">
      <i class="nav-icon fas fa-cogs"></i>
      <p> Web <i class="right fas fa-angle-left"></i>
      </p>
  </a>
  <ul class="nav nav-treeview" style="display: none;">
    <li class="nav-item">
      <a href="/docs/3.0/components/main-header.html" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>Sliders</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/docs/3.0/components/main-header.html" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>Color</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="/docs/3.0/components/main-header.html" class="nav-link ">
        <i class="far fa-circle nav-icon"></i>
        <p>Fecha</p>
      </a>
    </li>
  </ul>
</li>