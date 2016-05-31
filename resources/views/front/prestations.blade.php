@extends('front.layouts.template')
@section('title', 'Prestations')
@section('content')
    <section class="mdp-provisions">
        <header><h1>Prestations et Tarifs</h1></header>
        <main>
            <div class="mdp-provisions-tab">
                <header>
                    <h2>Epilations</h2>
                </header>
                <main>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Femme</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Sourcils (création ligne)       </div>
                                    <div class="mdp-provisions-tab-price">10 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Sourcils (entretien)       </div>
                                    <div class="mdp-provisions-tab-price">7 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Lèvre ou menton       </div>
                                    <div class="mdp-provisions-tab-price">6 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Homme</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Dos ou torse *       </div>
                                    <div class="mdp-provisions-tab-price">15 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Epaules *       </div>
                                    <div class="mdp-provisions-tab-price">7 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Demi-jambes *      </div>
                                    <div class="mdp-provisions-tab-price">17 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <div class="mdp-provisions-tab-note">
                        <p>
                            * cire au sucre certifiée Cosmétique Écologique et Biologique par ECOCERT SAS idéale pour les peaux sensibles : 100% du total des ingrédients sont d'origine naturelle : 90, 5% du total des ingrédients sont issus de l'agriculture biologique.
                        </p>
                    </div>
                </main>
            </div>
            <div class="mdp-provisions-tab">
                <header>
                    <h2>Soins corps</h2>
                </header>
                <main>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Soins corps bio vitacology ®</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Dolfine pacific relaxant et amincissant (thé vert, prèle, adiploslim) (1h15)       </div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">- Cure 6 soins minceur + crème dolfine       </div>
                                    <div class="mdp-provisions-tab-price">310 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Toniara tropical relaxant et raffermissant (algues laminaires, pamplemousse, lemon grass, collagène marin) (1h15) </div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Soins du monde corps enatae ®</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Modelage des pieds ou des mains (0h20)</div>
                                    <div class="mdp-provisions-tab-price">20 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Siam Foot SPA (soin complet des pieds) (0h45) </div>
                                    <div class="mdp-provisions-tab-price">40 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Modelage du dos (0h30)    </div>
                                    <div class="mdp-provisions-tab-price">27 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Les rituels enatae ®</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Polynésien, africain, améridien, européen ou asiatique. <span class="mdp-italic">Une invitation au voyage et à l'éveil des sens comprenant un soin corps et un soin visage.</span> (2h30)</div>
                                    <div class="mdp-provisions-tab-price">135 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Soin corps future maman</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Sans huiles essentielles (1h)       </div>
                                    <div class="mdp-provisions-tab-price">50 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                </main>
            </div>
        </main>
    </section>
@endsection