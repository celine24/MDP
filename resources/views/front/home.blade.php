@extends('front.layouts.template')
@section('title', 'Accueil')
@section('content')
    <section class="mdp-home">
        <header><h1>Ma Douce Parenthèse, institut de beauté et de bien-être bio</h1></header>
        <main>
            <p>
                Proche de vous, Ma Douce Parenthèse est un institut de beauté et de bien-être Bio situé à Verneil le Chétif en sud Sarthe
                (3 km de Mayet, 11 de Chateau du Loir, 10 de Pontvallain, 6 d'Aubigné Racan).
            </p>
            <p>
                Un lieu unique, pensé et imaginé pour votre détente. L'univers asiatique dont je me suis inspirée est un appel au dépaysement et au lacher prise.
                Je prends soin de vous avec des produits Bio (V I T A C O L O G Y ®) et naturels (E N A T A E ®) parce que c'est bon pour vous et pour notre planète.
                J'ai également sélectionné la marque ZAO qui propose un maquillage BIO digne des plus grandes marques en terme
                de tenue et de couleurs et des packagings en bambou magnifiques rechargeables (écologique et économique).
            </p>
            <p> Laissez-vous faire, je vous emmène en voyage, embarquez pour votre Douce Parenthèse...</p>
            <p class="mdp-signature">Pascale Grandchamp, votre esthéticienne diplômée d'état plastimodéliste ongulaire.</p>
            <img class="mdp-home-img" src="{{ asset('img/pages/home/mdp_carte.jpg') }}" alt="Décoration Zen" />
        </main>
    </section>
@endsection