<footer>
    <div class="mdp-footer">
        <div class="mdp-footer-menu">
            <ul class="mdp-footer-main-menu">
                <li class="{{ Request::is('/') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( '/') }}">Accueil</a></li>
                <li class="{{ Request::is('institut') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'institut') }}">Institut</a></li>
                <li class="{{ Request::is('prestations') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'prestations') }}">Prestations</a></li>
                <li class="{{ Request::is('produits') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'produits') }}">Produits</a></li>
                <li class="{{ Request::is('offres') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'offres') }}">Offres</a></li>
                <li class="{{ Request::is('conseils') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'conseils') }}">Conseils</a></li>
                <li class="{{ Request::is('contact') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'contact') }}">Contact</a></li>
            </ul>
            <ul class="mdp-footer-small-menu">
                <li class="{{ Request::is('partenaires') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'partenaires') }}">Partenaires</a></li>
                <li class="{{ Request::is('mentions-legales') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'mentions-legales') }}">Mentions légales</a></li>
                <li class="{{ Request::is('remerciements') ? 'mdp-active-footer' : '' }}"><a href="{{ URL::to( 'remerciements') }}">Remerciements</a></li>
            </ul>
        </div>
        <div class="mdp-footer-fb">
            <p>Retrouvez Ma Douce Parenthèse sur Facebook</p>
            <p class="mdp-footer-fb-icons">
                <a href="https://www.facebook.com/pages/Ma-Douce-Parenth%C3%A8se-Institut-de-Beaut%C3%A9-et-de-Bien-%C3%A8tre-BIO/574914512634205"><img src="{{ asset('img/footer/facebook.png') }}" alt="facebook" /></a>
                <img src="{{ asset('img/footer/like.png') }}" alt="like" />
            </p>
        </div>
    </div>
</footer>