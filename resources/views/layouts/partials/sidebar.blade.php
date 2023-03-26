<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3 open">
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <nav class="navbar bg-light navbar-light">
        <a href="#" class="navbar-brand mx-4 mb-3">
            <h4 class="text-primary"><img src={{asset("images/baraka-idman.png")}} alt="" class="logo_sidebar"></h4>
        </a>
        
        {{-- <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div> --}}
        <div class="navbar-nav w-100">
            @if (Auth::user()->admin)
                <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            @endif
            @canany(['create', 'viewAny'], App\Models\User::class)
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user me-2"></i>Utilisateurs</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        @can('create', App\Models\User::class)
                            <a href="{{ route('new-user-form') }}" class="dropdown-item">Ajouter</a>
                        @endcan
                        @can('viewAny', App\Models\User::class)
                            <a href="{{ route('users.index') }}" class="dropdown-item">Afficher</a>
                        @endcan
                    </div>
                </div>
            @endcanany
            @canany(['create', 'viewAny'], App\Models\Beneficiaire::class)
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-user-shield me-2"></i>Bénéficiaires</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        @can('create', App\Models\Beneficiaire::class)
                            <a href="{{ route('beneficiaires.create') }}" class="dropdown-item">Ajouter</a>
                        @endcan
                        @can('viewAny', App\Models\Beneficiaire::class)
                            <a href="{{ route('beneficiaires.index') }}" class="dropdown-item">Afficher</a>
                        @endcan
                        @can('show-history-beneficiaire-ability')
                        <a href="{{ route('beneficiaires-history') }}" class="dropdown-item">L'archivage</a>
                        @endcan
                    </div>
                </div>
            @endcanany
            @if (Auth::user()->intervenant)
                <a href="{{ route('programme-zone-affected') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Afféctations</a>
            @endif
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle d-flex text-wrap align-items-center" data-bs-toggle="dropdown"><i class="fas fa-briefcase"></i>CMS</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('showAtelier') }}" class="dropdown-item">Ateliers</a>
                    <a href="{{ route('all-type-drogue') }}" class="dropdown-item">Type de drogues</a>
                    <a href="{{ route('ShowCouvertureMedical') }}" class="dropdown-item">Couvertures</a>
                    <a href="{{ route('showCasJuridique') }}" class="dropdown-item">Gestion des cas juridique</a>
                    <a href="{{ route('showGroups') }}" class="dropdown-item">Groupes</a>
                    <a href="{{ route('showService') }}" class="dropdown-item">Services</a>
                    <a href="{{ route('show-partenaire') }}" class="dropdown-item">Partenaires</a>
                    <a href="{{ route('zoneintervenance') }}" class="dropdown-item">Zones</a>
                    <a href="{{ route('showProgram') }}" class="dropdown-item">Programmes</a>
                    <a href="{{ route('showFormation') }}" class="dropdown-item">Formations</a>
                    <a href="{{ route('showSocialVisite') }}" class="dropdown-item">Visites sociales</a>
                </div>
            </div>
            @canany(['roles-permissions-ability', 'roles-services-ability'])
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-pencil-ruler me-2"></i>Gestion des roles</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        @can('roles-permissions-ability')
                            <a href="{{ route('roles-permissions') }}" class="dropdown-item">Avec les permissions</a>
                        @endcan
                        @can('roles-services-ability')
                            <a href="{{ route('AffectServiceRole') }}" class="dropdown-item">Avec les services</a>
                        @endcan
                    </div>
                </div>
            @endcanany
            <a href="{{ route('logout') }}" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Quitter</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
