@extends('front.layouts.template')
@section('title', 'Institut')
@section('content')
    <section class="mdp-salon">
        <header><h1>L'institut</h1></header>
        <main>
            <div class="mdp-salon-introduction">
                <figure>
                    <img src="{{ asset('img/pages/salon/pascale.jpg') }}" alt="Pascale Grandchamp" />
                    <figcaption>Pascale Grandchamp, esthéticienne
                        plastimodéliste ongulaire diplômée d’état</figcaption>
                </figure>
                <div class="mdp-salon-introduction-text">
                    <p>Passionnée depuis toujours par l'univers de la beauté et du bien-être, c'est naturellement que ce projet est né.</p>
                    <p>Je me suis formée avec passion et ai repris mes études à 37 ans afin d'obtenir mon diplôme en esthétique, cosmétique et parfumerie. Mon local, indépendant de ma maison, dans le fond de ma cour, était parfait pour accueillir un institut de beauté. Son lilas du Japon nous attendait et je crois qu'il attendait également (Ma Douce Parenthèse)® et son univers asiatique !
                        Mon concept a donc été longuement muri et réfléchi pour vous proposer le meilleur du BIO et des produits naturels et vous permettre un dépaysement total.</p>
                    <p>Forte de mes 17 années dans le commerce de proximité et un parcours en franchisée, il était pour moi impensable d'adhérer à nouveau à un réseau de franchise. Je voulais MON concept, MA communication. Celle-ci a été travaillée et réalisée en collaboration avec ma sœur Sandrine Rointru, architecte D.P.L.G. et designer, parce qu'elle était la meilleure pour ce travail. Très professionnelle, elle me connait par cœur et a su répondre parfaitement à mes attentes.</p>
                    <p>Chaque détail compte et c'est ce qui fait de (Ma Douce Parenthèse)® un lieu unique, un lieu ou vous vous sentirez bien, un lieu au sein duquel vous aurez envie de revenir...</p>
                </div>
            </div>
            <div class="mdp-salon-interview">
                <audio controls="controls">
                    Votre navigateur ne supporte pas l'élément <code>audio</code>.
                    <source src="{{asset('mp3/interview.mp3')}}" type="audio/mp3">
                </audio>
                <p class="mdp-italic">Mon interview par Radio Prévert Pontvallain</p>
            </div>

            <div class="mdp-salon-slideshow">
                <ul class="bxslider">
                    <li><img src="{{ asset('img/pages/salon/slideshow/entree.jpg') }}" title="Entrée" /></li>
                    <li><img src="{{ asset('img/pages/salon/slideshow/entree3.jpg') }}" title="Entrée" /></li>
                    <li><img src="{{ asset('img/pages/salon/slideshow/entree2.jpg') }}" title="Entrée" /></li>
                    <li><img src="{{ asset('img/pages/salon/slideshow/accueil.jpg') }}" title="Accueil" /></li>
                </ul>
            </div>
            </main>
    </section>
@endsection