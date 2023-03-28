<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">
                <span class="logo-name">{{ config('app.name', 'Laravel') }}</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            @role('admin')
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="users"></i><span>Utilisateurs</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href='{{ route('admin.users.index') }}'>Liste des utilisateurs</a></li>
                    <li><a class="nav-link" href='{{ route('admin.register') }}'>Ajouter un utilisateur</a></li>
                </ul>
            </li>
            @endrole
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="book"></i><span>Service</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href='{{ route('admin.categories.index') }}'>Categories des services</a></li>
                    <li><a class="nav-link" href='{{ route('admin.services.index') }}'>Liste des services</a></li>
                    <li><a class="nav-link" href='{{ route('admin.services.create') }}'>Ajouter un service</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="settings"></i><span>Parametres</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href='{{ route('admin.contents.tabs') }}'>Nos contenus</a></li>
                    <li><a href=''>Profil</a></li>
                    <li><a href=''>Mettre a jour le profil</a></li>
                    <li><a href=''>Changer de mot de passe</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
