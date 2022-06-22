<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('assets/img/logo.png') }}" alt="">
            <!--  <h1>ECOLE 2.0<span>.</span></h1>-->
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                @if (Route::is('accueil'))
                    <li><a href="/" class="active">Accueil</a></li>
                @else
                    <li><a href="/">Accueil</a></li>
                @endif

                @if (Route::is('about'))
                    <li><a href="{{ route('about') }}" class="active">à propros de nous</a></li>
                @else
                    <li><a href="/about">à propros de nous</a></li>
                @endif

                @if (Route::is('ateliers'))
                    <li><a href="{{ route('ateliers') }}" class="active">Ateliers pratiques</a></li>
                @else
                    <li><a href="/ateliers">Ateliers pratiques</a></li>
                @endif
                <li><a href="#">Filière</a></li>

                @if (Route::is('actualites'))
                    <li><a href="{{ route('actualites') }}" class="active">Actualité</a></li>
                @else
                    <li><a href="/actualites">Actualité</a></li>
                @endif

                @if (Route::is('contact'))
                    <li><a href="{{ route('contact') }}" class="active">Contact</a></li>
                @else
                    <li><a href="/contact">Contact</a></li>
                @endif
                <li class="dropdown"><a href="#"><span>Création du compte</span> <i
                            class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="connexion/connexion.html">Compte étudiant</a></li>
                        <!--  <li class="dropdown"><a href="#"><span>Compte professeur</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>-->
                        <li><a href="connexion/connexionP.html">Compte professeur</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
