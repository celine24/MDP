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
                                <li>
                                    <div class="mdp-provisions-tab-prov">Lèvre et menton       </div>
                                    <div class="mdp-provisions-tab-price">10 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Demi-jambes*       </div>
                                    <div class="mdp-provisions-tab-price">15 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Jambes complètes*       </div>
                                    <div class="mdp-provisions-tab-price">22 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Maillot classique      </div>
                                    <div class="mdp-provisions-tab-price">9 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Maillot brésilien      </div>
                                    <div class="mdp-provisions-tab-price">12 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Maillot intégral       </div>
                                    <div class="mdp-provisions-tab-price">18 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Aisselles       </div>
                                    <div class="mdp-provisions-tab-price">9 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Nez      </div>
                                    <div class="mdp-provisions-tab-price">4 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Demi-bras*       </div>
                                    <div class="mdp-provisions-tab-price">10 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Bras complets*       </div>
                                    <div class="mdp-provisions-tab-price">14 €</div>
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
                                <li>
                                    <div class="mdp-provisions-tab-prov">Jambes complètes*      </div>
                                    <div class="mdp-provisions-tab-price">25 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Aisselles      </div>
                                    <div class="mdp-provisions-tab-price">8 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Oreilles ou nez     </div>
                                    <div class="mdp-provisions-tab-price">4 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Sourcils     </div>
                                    <div class="mdp-provisions-tab-price">8 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Forfaits épilation</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Demi-jambes* + maillot <span class="mdp-bold">OU</span> demi-jambes* + aisselles       </div>
                                    <div class="mdp-provisions-tab-price">22 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Demi-jambes* + maillot + aisselles       </div>
                                    <div class="mdp-provisions-tab-price">28 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Jambes complètes* + maillot <span class="mdp-bold">OU</span> jambes complètes* + aisselles      </div>
                                    <div class="mdp-provisions-tab-price">29 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Jambes complètes* + maillot + aisselles      </div>
                                    <div class="mdp-provisions-tab-price">36 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Sourcils + lèvres + menton     </div>
                                    <div class="mdp-provisions-tab-price">15 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Dos* + torse* + épaules*    </div>
                                    <div class="mdp-provisions-tab-price">25 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <div class="mdp-provisions-tab-note">
                        <p>
                            * cire au sucre certifiée Cosmétique Écologique et Biologique par <span class="mdp-bold">ECOCERT SAS </span>idéale pour les peaux sensibles : 100% du total des ingrédients sont d'origine naturelle : 90, 5% du total des ingrédients sont issus de l'agriculture biologique.
                        </p>
                    </div>
                </main>
            </div>
            <div class="mdp-provisions-tab">
                <header>
                    <h2>Soins et beauté des mains et des pieds</h2>
                </header>
                <main>
                    <section class="mdp-provisions-tab-category">
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Beauté des mains ou des pieds simple (0h30)      </div>
                                    <div class="mdp-provisions-tab-price">20 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Beauté des mains ou des pieds complète (beauté simple + gommage + masque)(0h45)       </div>
                                    <div class="mdp-provisions-tab-price">30 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Pose de vernis classique mains <span class="mdp-bold">OU</span> pieds      </div>
                                    <div class="mdp-provisions-tab-price">7 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Pose de vernis french mains <span class="mdp-bold">OU</span> pieds      </div>
                                    <div class="mdp-provisions-tab-price">7 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Pose de vernis semi-permanent couleur <span class="mdp-bold">OU</span> french mains ou pieds (sur ongles vernis, supplément de 5€ facturé en cas de démaquillage)     </div>
                                    <div class="mdp-provisions-tab-price">20 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Dépose vernis semi-permanent + soin    </div>
                                    <div class="mdp-provisions-tab-price">5 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Supplément</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Nail art <span class="mdp-bold">OU</span> déco par doigt      </div>
                                    <div class="mdp-provisions-tab-price">de + 0,30 à 3 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <div class="mdp-provisions-tab-note">
                        <p>
                            Pour les soins et la beauté des ongles, j'ai choisi de travailler avec la marque <span class="mdp-bold">Beautynails</span> qui propose une magnifique palette de couleurs.
                            Dotée d'une formation de plasti-modéliste ongulaire, je rends vos ongles magnifiques sans les abimer grace au <span class="mdp-bold">vernis semi-permanent Beautynails</span>.
                            Celui-ci me permet de répondre à toutes vos envies (classique, french, nail-art) et de vous garantir une tenue de 2 semaines minimum.
                        </p>
                    </div>
                </main>
            </div>
            <div class="mdp-provisions-tab">
                <header>
                    <h2>Maquillage</h2>
                </header>
                <main>
                    <section class="mdp-provisions-tab-category">
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Jour     </div>
                                    <div class="mdp-provisions-tab-price">20 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Soir     </div>
                                    <div class="mdp-provisions-tab-price">25 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Mariée  <span class="mdp-italic">(essai offert)</span>    </div>
                                    <div class="mdp-provisions-tab-price">40 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Cours d'auto-maquillage <span class="mdp-italic">(dès 50€ de maquillage Zao acheté, séance d'auto-maquillage à 25€, dès 100€ de maquillage Zao acheté, séance d'auto-maquillage offerte)</span>      </div>
                                    <div class="mdp-provisions-tab-price">45 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                </main>
            </div>
            <div class="mdp-provisions-tab">
                <header>
                    <h2>Forfaits Mariée</h2>
                </header>
                <main>
                    <section class="mdp-provisions-tab-category">
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Forfait basique : soin E N A T A E ® + épilation demi-jambes + maillot + aisselles + sourcils + maquillage (essai offert) + pose vernis semi-permanent mains    </div>
                                    <div class="mdp-provisions-tab-price">127 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Forfait basique avec pose de vernis semi-permanent pieds  </div>
                                    <div class="mdp-provisions-tab-price">137 €</div>
                            </ul>
                        </main>
                    </section>
                    <div class="mdp-provisions-tab-note">
                        <p>
                            Les Forfaits Mariée sont <span class="mdp-bold">personnalisables</span> selon vos besoins et vos envies !
                        </p>
                    </div>
                </main>
            </div>
            <div class="mdp-provisions-tab">
                <header>
                    <h2>Soins visage</h2>
                </header>
                <main>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Soins visage bio vitacology ®</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Oasia désaltérant <span class="mdp-italic">(orange douce, lemon grass)</span> (1h15)      </div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Pandiane équilibrant <span class="mdp-italic">(sauge, arbre à thé)</span> (1h15)       </div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Koalia apaisant <span class="mdp-italic">(coquelicot, camomille)</span> (1h15) </div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Elefia lift biolift <span class="mdp-italic">(cranberries, bois de rose, rosier muscat)</span> (1h15) </div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Multi végétale éclat <span class="mdp-italic">(éclairci, oxygène, raisin, mûre, bleuet)</span> (1h15)</div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Noursea repulpant <span class="mdp-italic">(abricot, banane)</span> (1h15)</div>
                                    <div class="mdp-provisions-tab-price">60 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Lynxia jeunesse du regard <span class="mdp-italic">(argatensyl, kalpariane)</span> (0h30)</div>
                                    <div class="mdp-provisions-tab-price">30 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Cure intensive de 8 soins contour des yeux sur 4 semaines + 1 produit "spécial regard"</div>
                                    <div class="mdp-provisions-tab-price">199 €</div>
                                </li>
                                <li>
                                    <div class="mdp-provisions-tab-prov">Soin ado <span class="mdp-bold">(-15 ans)</span> (1h00)</div>
                                    <div class="mdp-provisions-tab-price">40 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Soins du monde visage enatae ®</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Polynésien, africain, amérindien, européen ou asiatique. <span class="mdp-italic">Choisissez votre destination et partez pour un voyage de bien-être, de détente et de dépaysement tout en faisant du bien à votre peau</span> (1h00)</div>
                                    <div class="mdp-provisions-tab-price">50 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
                    <section class="mdp-provisions-tab-category">
                        <header>
                            <h3>Soin visage future maman</h3>
                        </header>
                        <main>
                            <ul class="mdp-provisions-tab-list">
                                <li>
                                    <div class="mdp-provisions-tab-prov">Sans huiles essentielles (1h)</div>
                                    <div class="mdp-provisions-tab-price">50 €</div>
                                </li>
                            </ul>
                        </main>
                    </section>
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