@extends('front.layouts.template')
@section('title', 'Offres')
@section('content')
    <section class="mdp-offers">
        <header><h1>Offres spéciales et bons cadeaux</h1></header>
        <main>
            <section class="mdp-offers-special-offers">
                <header>
                    <h2>Offres promotionnelles</h2>
                </header>
                <main>
                    <p>Régulièrement, (Ma Douce Parenthèse) ® vous propose ses offres spéciales ; ma façon de vous remercier de votre confiance et de votre fidélité :</p>
                    <p><span class="mdp-h3">Jusqu’au 14/05/2016 :</span></p>
                    <p>
                        offres en cours.
                    </p>
                </main>
            </section>
            <section class="mdp-offers-advantages">
                <header>
                    <h2>Avantages</h2>
                </header>
                <main>
                    <p><span class="mdp-h3">Carte Fidélité :</span> Gratuite, elle vous donne droit à des remises dès votre 1ere visite à l'institut ! (offre non cumulable avec les promotions en cours)</p>
                    <p><span class="mdp-h3">Parrainage :</span> Pour 3 ami(e)s parrainé(e)s, un soin offert (à choisir parmi plusieurs prestations). Et pour vos filleuls, 10% de remise lors de la 1ère visite. N'hésitez pas, parlez de moi autour de vous. </p>
                    <div class="mdp-offers-cards">
                        <figure>
                            <img src="{{asset('img/pages/offers/fidelite.jpg')}}" title="carte fidélité" alt="carte fidélité" />
                        </figure>
                        <figure>
                            <img src="{{asset('img/pages/offers/parrainage.jpg')}}" title="carte parrainage" alt="carte parrainage" />
                        </figure>
                    </div>
                </main>
            </section>
            <section class="mdp-offers-gifts">
                <header>
                    <h2>Bons cadeaux</h2>
                </header>
                <main>
                    <p>Pour toutes les occasions, anniversaires, fêtes, naissances (la jeune maman sera touchée que vous pensiez à son bien-être), retraite ou simplement pour le plaisir d'offrir, pleins d'idées cadeaux vous attendent! Je crée pour vous, selon vos envies et vos besoins, des coffrets cadeaux personnalisés. Les panières sont à remplir à votre convenance avec mes cosmétiques, bijoux et accessoires. Et si vous manquez d'inspiration, pas de panique, je vous conseille dans vos choix ! Je vous propose également des bons cadeaux pour offrir un moment de détente, une Douce Parenthèse. Parce que c'est si bon d'offrir et de faire plaisir, n'hésitez plus...</p>
                </main>
            </section>
        </main>
    </section>
@endsection