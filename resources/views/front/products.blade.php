@extends('front.layouts.template')
@section('title', 'Produits')
@section('content')
    <section class="mdp-products">
        <header><h1>Gammes de Produits</h1></header>
        <main>
            <p>En créant (Ma Douce Parenthèse)® j'ai fait le choix de me tourner vers des partenaires proposant une large gamme de produits de soin et cosmétiques bio et naturels. Par respect pour vous, et pour notre planète.</p>
            <ul class="mdp-products-list">
                <li>
                    <img src="{{ asset('img/pages/products/panda-tourterelle.jpg') }}" alt="Panda & Tourterelle" />
                    <h2>La Gamme Panda & Tourterelle</h2>
                    <p>« <span class="mdp-italic">L'art de se faire Plaisir, le bonheur à Offrir</span> »</p>
                    <p>Le concept de ma nouvelle marque repose sur le plaisir de pouvoir s'appliquer de vrais produits naturels fabriqués de facon artisanale et fait main "comme autrefois".</p>
                    <p>Je vous propose un vrai savon à l'ancienne avec la méthode de "saponification à froid" dont les ingrédients sont des huiles végétales naturelles (olive, coco, ...) des huiles essentielles BIO, pures et naturelles, des beurres de karité ou cacao, des jus ou purée de fruits, miel et des argiles selon les besoins cutanés, des pigments minéraux et parfois des parfums de Grasse.
                        Je vous propose également des huiles sèches pour le corps aux huiles végétales 100% naturelles; elle nourrissent votre peau sans laisser de film gras tout en la parfumant délicatement. Des huiles de massage aux huiles végétales 100% naturelles sont également disponibles.</p>
                    <p>Venez vite les découvrir à l'institut !</p>
                </li>
                <li>
                    <img src="{{ asset('img/pages/products/vitacology.jpg') }}" alt="Vitacology" />
                    <h2>La Gamme Vitacology</h2>
                    <p>
                        « La philosophie de V I T A C O L O G Y ® repose sur la volonté des fondateurs de proposer le meilleur de la nature à la beauté des femmes, tout en rendant à la nature les bienfaits qu'elle nous offre chaque jour. Pour obtenir des résultats visibles rapidement, nos produits de soins sont formulés jusqu'à 100% d'ingrédients riches en actifs : grâce aux huiles essentielles, aux huiles végétales et aux eaux florales qui apportent à votre peau tous les bienfaits de leurs propriétés actives. De plus, plusieurs de nos gammes de produits (Eléfia, Dolfine, Lynxia) comportent des ingrédients naturels brevetés (Kalparianne ®, Adiposlim ®, Argatensyl ®) qui ont démontré leurs résultats grâce à des tests d'efficacité.
                    </p>
                    <p>
                        Conformément à notre philosophie et afin de garantir une qualité optimale de nos cosmétiques BIO, tout en veillant à la protection de la vie écologique, les cosmétiques V I T A C O L O G Y ® sont certifiés par un organisme indépendant agréé par l'état français : Ecocert.
                    </p>
                    <p>
                        La cosmétique biologique ne contient pas de substances chimiques et polluantes, qui à moyen et long terme sont néfastes pour notre organisme et notre environnement. Elle contient une quantité d'ingrédients actifs, beaucoup plus importante que la cosmétique classique, pour une efficacité réelle et à long terme.
                    </p>
                    <p>
                        Le respect de la vie écologique se traduit par le contrôle de toutes les étapes de la conception des cosmétiques BIO :
                    </p>
                    <ul>
                        <li>les matières premières BIO sélectionnées sont cultivées sans engrais, ni pesticides</li>
                        <li> les matières premières sont principalement issues du monde végétal et sont naturelles et biodégradables</li>
                        <li>la fabrication des produits est effectuée sans polluants pour l'environnement</li>
                        <li>les emballages doivent être biodégradables ou recyclables</li>
                        <li>les tests des produits sur les animaux sont interdits</li>
                    </ul>
                    <p>
                        La charte Cosmébio offre une transparence quant à la nature des ingrédients qui composent le produit certifié BIO, les produits finis sont garantis :
                    </p>
                    <ul>
                        <li>non conservés avec des parabens ou du phénoxyétanol</li>
                        <li>sans parfum ni colorant de synthèse</li>
                        <li>sans pétrochimie (paraffine, silicone, PEG)</li>
                        <li>sans matière première animale</li>
                    </ul>
                    <p>
                        Tous nos produits sont formulés avec un minimum de 99% à 100% d'ingrédients naturels ou d'origine naturelle et jusqu' à 98% d'ingrédients BIO. »
                    </p>
                    <p>
                        Découvrez le site<a href="http://www.vitacology.fr/fr.aspx"> V I T A C O L O G Y ®</a>.
                    </p>
                </li>
                <li>
                    <img src="{{ asset('img/pages/products/zao.jpg') }}" alt="Zao" />
                    <h2>La Gamme ZAO</h2>
                    <p>
                        Pour une mise en beauté respectueuse de votre peau, ZAO a développé des formules 100% d'origine naturelle*, enrichies de principes actifs biologiques. Laissez-vous séduire par des couleurs lumineuses et des textures alliant confort et longue durée. Une innovation logée dans un matériau moderne et végétal : le bambou. Parce que nous sommes convaincus qu’une ligne de maquillage certifiée bio* se doit d’utiliser un packaging naturel, nous avons choisi le bambou pour son élégance et sa modernité.Tous les arbres sont des stockeurs de carbone mais la vitesse de croissance exceptionnelle du bambou, en fait un champion de la capture du carbone durant son cycle de vie. Il permet aux produits ZAO d’afficher un bilan carbone très satisfaisant.
                    </p>
                    <p>
                        Grâce à notre système de recharge facile et ludique**, vous pouvez très facilement remplacer votre produit de manière économique en ne rachetant que la recharge. Outre la réduction des coûts et des emballages induites par notre système, il permet également d’essayer et d’alterner très facilement toutes les couleurs qui correspondant à vos envies du moment. Rien de plus simple ! Il suffit d’avoir plusieurs recharges pour donner libre cours à votre créativité !
                    </p>
                    <p>
                        ZAO répond à 6 exigences absolues :
                    </p>
                    <ul>
                        <li>être innovante… les packaging et formules sont développées à partir du Bambou</li>
                        <li>être éthique…le respect des hommes et des animaux (label cruelty free) est garanti à chaque étape de fabrication</li>
                        <li>être naturelle… les produits sont labellisés Cosmébio* et certifiés par Ecocert*</li>
                        <li>être durable… le système innovant des recharges rend chaque produit écologique et économique</li>
                        <li>être sensuelle… le design féminin des pack, tout en douceur, est subtilement illuminé de couleurs</li>
                        <li>être cohérente… Zao offre la beauté du bambou à l’extérieur (emballages) avec les bienfaits du bambou (extraits de bambou dans les ingrédients) à l’intérieur.</li>
                    </ul>
                    <p>
                        <span class="mdp-italic">* Hors Vernis, Soin des Ongles et Accessoires</span><br>
                        <span class="mdp-italic"> ** Sur certains produits »</span>
                    </p>
                    <p>
                        Découvrez le site<a href="http://www.zaomakeup.com/index.php?lang=fr://www.vitacology.fr/fr.aspx"> ZAO</a>.
                    </p>

                    <p>
                        <a href="{{ asset('pdf/zao_tarifs_produits.pdf') }}">Téléchargez la liste des produits en vente dans ma boutique et leurs tarifs</a>.
                    </p>
                </li>
                <li>
                    <img src="{{ asset('img/pages/products/bna.jpg') }}" alt="BeautyNails" />
                    <h2>La Gamme BeautyNails</h2>
                    <p>
                        « Depuis plusieurs décennies, avant même que la prothésie ongulaire ne devienne en France un phénomène de société, la marque Beautynails s'est forgée une renommée fondée sur le haut niveau de ses formations, ainsi que sur la qualité et la technicité de ses produits. Installée à Paris, Marseille et Nice depuis les années 1990, l’histoire de Beautynails est marquée par une continuité de développement autour de valeurs fondamentales : le savoir faire, la qualité et la féminité. Au cours de ces dernières années, la marque a étoffé son offre en créant de nouveaux produits visionnaires et raffinés pour les mains : des Gels UV haute technicité, des Vernis UV Permanents, des Vernis à ongles profonds et lumineux, des crèmes de soins... Beautynails est devenue une marque créatice d'articles exclusifs, qui reflètent les exigences élevées des femmes d'aujourd'hui. »
                    </p>
                    <p>
                        Pour les soins et la beauté des ongles, j'ai choisi de travailler avec la marque Beautynails qui propose une magnifique palette de couleurs. Dotée d'une formation de plasti-modéliste ongulaire, je sublime vos ongles sans les abimer grâce au vernis semi-permanent Beautynails. Celui-ci me permet de répondre à toutes vos envies (classique, french, nail-art) et de vous garantir une tenue de 2 semaines minimum. Je vous invite également à retrouver les vernis de la marque Beautynails dans ma boutique.
                    </p>
                </li>
            </ul>
        </main>
    </section>
@endsection