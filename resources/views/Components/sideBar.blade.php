    <link rel="stylesheet" href="{{ asset('css/base-sidebar.css') }}">
    <div class="d-flex flex-row w-100 h-100">
        <div class="d-flex flex-row h-100">
            <div class="side-navbar d-flex flex-column flex-shrink-0 p-3" style="width: 280px;height: 950px; background-color: #242625;">
                <div class="d-flex flex-row ms-3 mt-3 mb-3">
                    <div class="card d-flex flex-column align-items-center justify-content-center align-self-center" style="width: 45px; height: 45px; background-color: #a492ff;">
                        <span class="fs-2 fw-bold text-white"></span>
                    </div>
                    <div class="d-flex flex-column ms-2 align-self-center">
                        <span class="fw-bold text-white">Mohammed reda</span>
                        <span class="fw-bold text-white">mohammed@serenity.com</span>
                    </div>
                </div>
                <span class="fs-2 fw-bold ms-3 mt-3 mb-3" style="color: #1FC063;">Serenity</span>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        @include('Components.link', ['pathName' => 'dashboard', 'logo'=> 'images/home.png', 'text'=> 'Dashboard', 'className'=> 'nav-link sidebar-link'])
                    </li>
                    <li class="nav-item mt-3">
                         @include('Components.link', ['pathName' => 'praticien2', 'logo'=> 'images/home.png', 'text'=> 'Praticien', 'className'=> 'nav-link sidebar-link'])
                    </li>
                    <li class="nav-item mt-3">
                       @include('Components.link', ['pathName' => 'dashboard', 'logo'=> 'images/home.png', 'text'=> 'Blog', 'className'=> 'nav-link sidebar-link'])
                    </li>
                    <li class="nav-item mt-3">
                         @include('Components.link', ['pathName' => 'dashboard', 'logo'=> 'images/home.png', 'text'=> 'Products', 'className'=> 'nav-link sidebar-link'])
                    </li>
                    <li class="nav-item mt-3">
                          @include('Components.link', ['pathName' => 'promo', 'logo'=> 'images/home.png', 'text'=> 'Promos', 'className'=> 'nav-link sidebar-link'])
                    </li>  
                    <li class="nav-item mt-3">
                          @include('Components.link', ['pathName' => 'parametre2', 'logo'=> 'images/home.png', 'text'=> 'Parametre', 'className'=> 'nav-link sidebar-link'])
                    </li>
                </ul>
                <div class="dropdown container-logout-link">
                    <a href="{{ route('logout') }}" class="nav-link sidebar-link">
    <span>Deconnexion</span>
</a>                </div>
            </div>
        </div>
        <main class="d-flex flex-column w-100 h-100 overflow-auto">
           
        </main>
    </div>
