<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight" style="color: white">PANEL DE CONTROL</span>
    </a>

    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">

                <!-- ROLES Y PERMISO -->
                @can('sidebar.roles.y.permisos')
                    <li class="nav-item">

                        <a href="#" class="nav-link nav-">
                            <i class="far fa-edit"></i>
                            <p>
                                Roles y Permisos
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}" target="frameprincipal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rol y Permisos</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.permisos.index') }}" target="frameprincipal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Usuario</p>
                                </a>
                            </li>

                        </ul>
                        <!-- API´S -->
                        <!-- API´S -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-edit"></i>
                            <p>
                                API´S
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                                     <li class="nav-item">
  <a class="nav-link" href="{{ route('apis') }}" target="frameprincipal">
    <i class="far fa-circle nav-icon"></i>
    <p>APIs Canvas y Geolocalización</p>
</a>
</li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('apiVideo') }}" target="frameprincipal">
                                    <i class="fas fa-video nav-icon"></i>
                                    <p>APIs Video</p>
                                </a>
                            </li>
              

                        </ul>
                    </li>

                    </li>
                @endcan
                <!-- Aquí agregamos Ordenamiento Worker -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/workers') }}" target="frameprincipal">
                        <i class="fas fa-cogs nav-icon"></i>
                        <p>Ordenamiento Worker</p>
                    </a>
                </li>
                
            </ul>
        </nav>

    </div>
</aside>