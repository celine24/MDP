@extends('front.layouts.template')
@section('title', 'Partenaires')
@section('content')
    <section class="mdp-partners">
        <header><h1>Mes partenaires</h1></header>
        <main>
            <p>Vous trouverez ci-dessous des liens vers les sites web et pages facebook des partenaires que j'ai choisi avec la plus grande attention afin de vous proposer le meilleur...</p>
            <h2>Le meilleur de la nature...</h2>
            <p>...avec des cosmétiques BIO et naturels, parce que c'est bon pour votre peau et pour notre planète :</p>
            <ul class="mdp-partners-list">
                <li>
                    <a href="http://www.enatae.fr"><img src="{{ asset('img/pages/partners/enatae.jpg') }}" alt="Enatae" /></a>
                </li>
                <li>
                    <a href="http://www.vitacology.fr"><img src="{{ asset('img/pages/partners/vitacology.jpg') }}" alt="Vitacology" /></a>
                </li>
                <li>
                    <a href="http://www.zaomakeup.com/index.php?lang=fr"><img src="{{ asset('img/pages/partners/zao.jpg') }}" alt="Zao" /></a>
                </li>
            </ul>
            <h2>Le meilleur de la Sarthe...</h2>
            <p>...avec des artistes talentueuses du Mans parce que c'est essentiel de travailler local et d'encourager l'économie de notre territoire tout en se faisant plaisir avec des bijoux et accessoires uniques qui, comme mes soins et cosmétiques, vous sublimeront :</p>
            <ul class="mdp-partners-list">
                <li>
                    <a href="https://www.facebook.com/maleesfactory"><img src="{{ asset('img/pages/partners/malee.jpg') }}" alt="Malee" /></a>
                </li>
                <li>
                    <a href="https://www.facebook.com/laboutiquemeliemel"><img src="{{ asset('img/pages/partners/melimel.jpg') }}" alt="Mélimel" /></a>
                </li>
            </ul>
        </main>
    </section>
@endsection