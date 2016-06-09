<header class="mdp-header-wrapper">
    <div class="mdp-header">
        <div class="mdp-logo">
            <img src="{{ asset('img/logo/logo.png') }}" alt="logo" />
        </div>
        <div class="mdp-logo-mobile">
            <img src="{{ asset('img/logo/logo-mobile.png') }}" alt="logo" />
            <p> institut de beauté et de bien-être, cosmétique bio et naturelle</p>
        </div>
        <div class="mdp-navbar-container">
            <nav class="mdp-main-menu">
                <ul id="mdp-navbar">
                    <li class="{{ Request::is('/') ? 'current_page_item' : '' }}"><a href="{{ URL::to( '/') }}" >Accueil</a></li>
                    <li class="{{ Request::is('institut') ? 'current_page_item' : '' }}"><a href="{{ URL::to( 'institut') }}">Institut</a></li>
                    <li class="{{ Request::is('prestations') ? 'current_page_item' : '' }}"><a href="{{ URL::to( 'prestations') }}">Prestations</a></li>
                    <li class="{{ Request::is('produits') ? 'current_page_item' : '' }}"><a href="{{ URL::to( 'produits') }}">Produits</a></li>
                    <li class="{{ Request::is('offres') ? 'current_page_item' : '' }}"><a href="{{ URL::to( 'offres') }}">Offres</a></li>
                    <li class="{{ Request::is('conseils') ? 'current_page_item' : '' }}"><a href="{{ URL::to( 'conseils') }}">Conseils</a></li>
                    <li class="{{ Request::is('contact') ? 'current_page_item' : '' }}"><a href="{{ URL::to( 'contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>